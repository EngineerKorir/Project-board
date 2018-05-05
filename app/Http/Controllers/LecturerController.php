<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salutation;
use App\Faculty;
use App\Comment;
use App\Notice;
use App\Category;
use App\Department;
use App\Attachment;
use App\TargetDepartment;
use App\TargetYear;
use App\Follow;
use App\User;
use Mail;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class LecturerController extends Controller
{
  public function __construct()
  {
    // Access to only authenticated uses

    $this->middleware('auth');

    // Access to only lecturer

    $this->middleware('lecturer');
  }

  // Display lecturer dashboard

  public function getDashboard()
  {
    // total notices

    $notices = Notice::where(['user_id' => Auth::user()->id])->count();

    // total subscribers

    $subscribers = Follow::where(['user_id' => Auth::user()->id])->count();

    // toal categories

    $categories = Category::where(['user_id' => Auth::user()->id])->count();

    // total comments

    $notices2 = Notice::where(['user_id' => Auth::user()->id])->get();

    $ids = [];

    foreach ($notices2 as $notice)
    {
      $ids[] = $notice->id;
    }

    $comments = Comment::whereIn('notice_id', $ids)->count();

    return view('users.lecturer.dashboard', compact('notices', 'subscribers', 'categories', 'comments'));
  }

  // Display new notice form

  public function getNewNotice()
  {

    // Get categories

    $categories = Category::where('user_id', Auth::user()->id)->get();

    // departments

    $departments = TargetDepartment::orderBy('name', 'asc')->get();

    // years

    $years = TargetYear::all();

    return view('users.lecturer.notices.new', compact('categories', 'departments', 'years'));
  }

  // Display notice categories

  public function getNoticeCategories()
  {
    $categories = Category::where('user_id', Auth::user()->id)->get();

    return view('users.lecturer.notices.categories', compact('categories'));
  }

  // Display all subscribers

  public function getAllSubscribers()
  {

    // Get the user ids

    $subscribers = Follow::where(['user_id' => Auth::user()->id])->pluck('follower')->toArray();

    // Get the user data

    $subscribers = User::whereIn('id', $subscribers)->paginate(12);

    return view('users.lecturer.subscribers.all', compact('subscribers'));
  }

  // Display all comments by subscribers

  public function getAllSubscriberComments()
  {

    $notices = Notice::where(['user_id' => Auth::user()->id])->pluck('id')->toArray();

    $comments = Comment::whereIn('notice_id', $notices)->latest()->paginate(10);

    return view('users.lecturer.subscribers.comments', compact('comments'));
  }

  // Display all messages

  public function getMessagesAll()
  {
    return view('users.lecturer.messages.all');
  }

  // Display settings

  public function getSettings()
  {
    $data               = [];
    $data['salutation'] = Salutation::all();
    $data['faculty']    = Faculty::all();
    return view('users.lecturer.settings')->with('data', $data);
  }

  // post new notice

  public function postNewNotice(Request $request)
  {

    // Validation

    $this->validate($request, [
      'title' => 'required|max:191',
      'body' => 'required',
    ]);

    // Create new notice

    $notice = new Notice();

    // Assign attributes

    $notice->title    = $request->input('title');
    $notice->slug     = str_slug($notice->title, '-');
    $notice->body     = $request->input('body');
    $notice->status   = $request->input('submit');
    $notice->deadline = $request->input('deadline');

    // Save notice with user id

    $request->user()->notices()->save($notice);

    // Save categories

    $notice->categories()->attach($request->category_id);

    // save year year target

    $notice->targetYears()->attach($request->target_id['year']);

    // save department target

    $notice->targetDepartments()->attach($request->target_id['department']);


      foreach ($request->file('files') as $file) {
        $destinationPath = 'uploads';
        $filename = time() . str_slug(strtolower($file->getClientOriginalName())) . '.' . $file->getClientOriginalExtension();
        $file->move($destinationPath, $filename);

        // Create new attachment

        $attachment = new Attachment();

        $attachment->name = $filename;
        $attachment->size = $file->getClientSize();
        $attachment->user_id = $request->user()->id;
        $attachment->context = 1; // notice
        $attachment->content_id = $notice->id;

        $attachment->save();
        }

    // send email to users

    // Get the user ids

    $subscribers = [];

    if($request->input('strict'))
    {
      $subscribers = User::whereIn('year', $request->target_id['year'])->whereIn('department_id', $request->target_id['department'])->pluck('email')->toArray();
    } else {
      $subscribers = Follow::where(['user_id' => Auth::user()->id])->pluck('follower')->toArray();

      // Get the user data emails

      $subscribers = User::whereIn('id', $subscribers)->pluck('email')->toArray();
    }


    if ($subscribers)
    {
      $title = $notice->title;
      $content = $notice->body;

      Mail::send('users.email.send', ['title' => $title, 'content' => $content], function ($message) use ($notice, $subscribers)
      {

        $message->subject($notice->title);
    		$message->from('no-reply@masenoboards.com', 'Masenoboards');
    		$message->to($subscribers);

      });
    }

    // Redirect all notices

    return redirect()->route('getLecturerAllNotices')->with('success', 'Notice has been posted');
  }

  // post edit notice

  public function postEditNotice(Request $request, $id)
  {

    // Validation

    $this->validate($request, [
      'title' => 'required|max:191',
      'body' => 'required',
    ]);

    $notice = Notice::find($id);

    // Assign attributes

    $notice->title    = $request->input('title');
    $notice->slug     = str_slug($notice->title, '-');
    $notice->body     = $request->input('body');
    $notice->status   = $request->input('submit');
    $notice->deadline = $request->input('deadline');

    // Update notice with user id

    $request->user()->notices()->save($notice);

    // update categories

    $notice->categories()->sync($request->category_id);

    // update year target

    $notice->targetYears()->sync($request->target_id['year']);

    // update department target

    $notice->targetDepartments()->sync($request->target_id['department']);

    // Redirect all notices

    return redirect()->route('getLecturerAllNotices')->with('success', 'Notice has been updated');
  }

  // Post new notice category

  public function postNoticeCategories(Request $request)
  {

    // Validation

    $this->validate($request, [
      'category' => 'required|max:100',
    ]);

    // Create new category

    $category = new Category();

    // Assign attributes

    $category->title    = $request->input('category');

    // Save category with user id

    $request->user()->categories()->save($category);

    // Redirect categories

    $categories = Category::where('user_id', Auth::user()->id)->get();

    return redirect()->route('getLecturerNoticeCats', compact('categories'));
  }

  // Display all notices

  public function getAllNotices()
  {
    $notices = Notice::where('user_id', Auth::user()->id)->latest()->paginate(15);
    /*
    $likesShares = [];
    foreach ($notices as $notice)
    {
      $likeShares[$notice->id]['like'] = LikeShare::where();
      $likeShares[$notice->id]['share'] = LikeShare::where();
    }
    */
    return view('users.lecturer.notices.all', compact('notices'));
  }

  // edit notice

  public function getEditNotice($id)
  {
    $notice = Notice::where(['user_id' => Auth::user()->id, 'id' => $id])->firstOrFail();

    // normal date

    $date = date_create($notice->deadline);

    // Get categories

    $categories = Category::where('user_id', Auth::user()->id)->get();

    // category ids

    $activeCats = $notice->categories;

    $catIds = [];

    foreach ($activeCats as $cat)
    {
      $catIds[] = $cat->id;
    }

    // departments

    $departments = TargetDepartment::orderBy('name', 'asc')->get();

    $activeDepts = $notice->targetDepartments;

    $deptIds = [];

    foreach ($activeDepts as $activeDept)
    {
      $deptIds[] = $activeDept->id;
    }

    // years

    $years = TargetYear::all();

    $activeYears = $notice->targetYears;

    $yearIds = [];

    foreach ($activeYears as $activeYear)
    {
      $yearIds[] = $activeYear->id;
    }

    return view('users.lecturer.notices.edit', compact('notice', 'categories', 'departments', 'years', 'catIds', 'yearIds', 'deptIds', 'date'));
  }

  // delete

  public function deleteNotice($id)
  {
    $notice = Notice::where(['user_id' => Auth::user()->id, 'id' => $id])->first();

    if ($notice && $notice->delete())
    {
      return redirect()->route('getLecturerAllNotices')->with('success', 'Notice has been deleted');
    }
    return redirect()->route('getLecturerAllNotices')->with('warning', 'Notice could not be deleted');
  }

  // Update lecturer profile

  public function postEdit(Request $request)
  {

    // Validate user input

    $this->validate($request, [
      'email'         => 'bail|required',
      'salutation_id' => 'nullable',
      'faculty_id'    => 'required',
      'phone'         => 'required',
      'bio'           => 'nullable',
      'password'      => 'nullable',
      'photo'         => 'nullable|mimes:jpg,jpeg',

    ]);

    $lecturer = Auth::user();

    $lecturer->email         = $request->input('email');
    $lecturer->salutation_id = $request->input('salutation_id');
    $lecturer->faculty_id    = $request->input('faculty_id');
    $lecturer->phone         = $request->input('phone');
    $lecturer->bio           = $request->input('bio');

    if($request->input('password'))
    {
      $lecturer->password      = bcrypt($request->input('password'));
    }

    $lecturer->update();

    // Update profile image

    $file = $request->file('photo');

    if ($file)
    {
      $xt = $request->file('photo')->getClientOriginalExtension();
      $fileName = $lecturer->id . '.' . $xt;

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

      $lecturer->photo = $fileName;
      $lecturer->update();
    }

    return redirect()->back()->with('success','Your settings have been updated');
  }
}
