<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Hostel;
use App\User;
use App\Follow;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class StudentController extends Controller
{

  public function __construct()
  {
    // Access to only authenticated uses

    $this->middleware('auth');

    // Access to only student

    $this->middleware('student');
  }

  public function getDashboard()
  {
    // total subscriptions

    $subscriptions = Follow::where(['follower' => Auth::user()->id])->count();

    // total subscribers

    $subscribers = Follow::where(['user_id' => Auth::user()->id])->count();

    // total comments

    $comments = Comment::where(['user_id' => Auth::user()->id])->get();


    return view('users.student.dashboard', compact('subscriptions', 'subscribers', 'comments'));
  }

  public function getChannels()
  {
    $data                 = [];
    $data['users']    = User::whereIn('role_id', [2,3,4,5])->get();

    // total subscribers-box

    $totalSubscribers = $isSubscribed = [];

    foreach ($data['users'] as $user)
    {
      $totalSubscribers[$user->id]  = Follow::where(['user_id' => $user->id])->count();
      $isSubscribed[$user->id]      = Follow::where(['user_id' => $user->id, 'follower' => Auth::user()->id])->first();
    }
    return view('users.student.notices.channels', compact('data', 'totalSubscribers', 'isSubscribed'));
  }

  public function getReminders()
  {
    return view('users.student.notices.reminders');
  }

  public function getSaved()
  {
    return view('users.student.notices.saved');
  }

  public function getSettings()
  {
    return view('users.student.settings');
  }

  public function getEdit()
  {
    $data                 = [];
    $data['departments']  = Department::orderBy('name', 'asc')->get();
    $data['hostels']      = Hostel::orderBy('name', 'asc')->get();;

    return view('users.student.profile.edit', compact('data'));
  }

  // Update student profile

  public function postEdit(Request $request)
  {

    // Validate user input

    $this->validate($request, [
      'email'         => 'required',
      'department_id' => 'required',
      'year'          => 'required',
      'phone'         => 'required',
      'hostel_id'     => 'required',
      'password'      => 'nullable',
      'photo'         => 'nullable|mimes:jpg,jpeg',

    ]);

    $student = Auth::user();

    $student->email         = $request->input('email');
    $student->department_id = $request->input('department_id');
    $student->year          = $request->input('year');
    $student->phone         = $request->input('phone');
    $student->hostel_id     = $request->input('hostel_id');

    if($request->input('password'))
    {
      $student->password      = bcrypt($request->input('password'));
    }

    $student->update();

    // Update profile image

    $file = $request->file('photo');

    if ($file)
    {
      $xt = $request->file('photo')->getClientOriginalExtension();
      $fileName = $student->id . '.' . $xt;

      $fileDestinationLarge     = public_path('images/avatars/large/');
      $fileDestinationMedium    = public_path('images/avatars/medium/');
      $fileDestinationSmall     = public_path('images/avatars/small/');
      $fileDestinationOriginal  = public_path('images/avatars/original/');

      // Image side

      $width = Image::make($file->getRealPath())->width();
      $height = Image::make($file->getRealPath())->height();

      // Get the smallest side

      $size = $width < $height ? $width : $height;

      $size = $size <= 500 ? $size : 500;

      // Save large

      $fileLarge = Image::make($file->getRealPath())->fit(floor($size), floor($size), function(){}, 'top');
      $fileLarge->save($fileDestinationLarge . $fileName, 80);

      // Save medium

      $fileMedium = Image::make($fileLarge)->fit(floor($size/2), floor($size/2), function(){}, 'top');
      $fileMedium->save($fileDestinationMedium . $fileName);

      // Save small

      $fileSmall = Image::make($fileMedium)->fit(floor($size/4), floor($size/4), function(){}, 'top');
      $fileSmall->save($fileDestinationSmall . $fileName);

      // Save original

      $fileOriginal = Image::make($file->getRealPath());
      $fileOriginal->save($fileDestinationOriginal . $fileName);

      // Update record on database

      $student->photo = $fileName;
      $student->update();
    }

    return redirect()->back()->with('success','Your profile has been updated');
  }

  // all subscribers

  public function getSubscribers()
  {

    // get all subscriber ids

    $subscribersId = Follow::where(['user_id' => Auth::user()->id])->pluck('follower')->toArray();

    // get their total subscribers and block status

    $totalSubscribers = $isBlocked = [];

    foreach ($subscribersId as $subscriber)
    {

      // total subscribers

      $totalSubscribers[$subscriber] = Follow::where(['user_id' => Auth::user()->id])->count();

      // block status

      $isBlocked[$subscriber] = Follow::where(['user_id' => Auth::user()->id, 'follower' => $subscriber, 'status' => 0])->first();
    }

    // Get the user data

    $subscribers = User::whereIn('id', $subscribersId)->paginate(12);

    return view('users.student.profile.subscribers', compact('subscribers', 'isBlocked', 'totalSubscribers'));
  }

  // all subscriptions

  public function getSubscriptions()
  {

    // get all subscriber ids

    $subscribersId = Follow::where(['follower' => Auth::user()->id])->pluck('user_id')->toArray();

    // get their total subscribers

    $totalSubscribers = [];

    foreach ($subscribersId as $subscriber)
    {

      // total subscribers

      $totalSubscribers[$subscriber] = Follow::where(['user_id' => $subscriber])->count();
    }

    // Get the user data

    $subscribers = User::whereIn('id', $subscribersId)->paginate(12);

    return view('users.student.profile.subscriptions', compact('subscribers', 'totalSubscribers'));
  }
}
