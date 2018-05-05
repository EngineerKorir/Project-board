<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use App\LikeShare;
use App\Comment;
use App\TargetYear;
use App\Follow;
use App\Attachment;
use App\TargetDepartment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  // all notices

  public function index()
  {
    $notices = Notice::latest()->paginate(10);

    $subscriptionIds = Follow::Where(['follower' => Auth::user()->id])->pluck('user_id')->toArray();

    $notices = Notice::whereIn('user_id', $subscriptionIds)->latest()->paginate(10);

    $likeShare = [];
    $isLike = [];
    $totalComments = [];

    foreach ($notices as $notice)
    {
      $likeShare[$notice->id]['like'] = LikeShare::where(['content_id' => $notice->id, 'content_type' => 1, 'action' => 1])->count();

      $likeShare[$notice->id]['share'] = LikeShare::where(['content_id' => $notice->id, 'content_type' => 1, 'action' => 2])->count();

      $isLikeNotice[$notice->id] = LikeShare::where(['user_id' => Auth::user()->id, 'content_id' => $notice->id, 'content_type' => 1, 'action' => 1])->count();

      $totalComments[$notice->id] = Comment::where('notice_id', $notice->id)->count();
    }

    return view('users.home.authed', compact('notices', 'likeShare', 'isLikeNotice', 'totalComments'));
  }

  // all notices for auth user year

  public function myYear()
  {
    $notices = Notice::whereHas('targetYears', function($q){
      $q->where('year_id', Auth::user()->year);
    })->latest()->paginate(10);

    $likeShare = [];
    $isLike = [];
    $totalComments = [];

    foreach ($notices as $notice)
    {
      $likeShare[$notice->id]['like'] = LikeShare::where(['content_id' => $notice->id, 'content_type' => 1, 'action' => 1])->count();

      $likeShare[$notice->id]['share'] = LikeShare::where(['content_id' => $notice->id, 'content_type' => 1, 'action' => 2])->count();

      $isLikeNotice[$notice->id] = LikeShare::where(['user_id' => Auth::user()->id, 'content_id' => $notice->id, 'content_type' => 1, 'action' => 1])->count();

      $totalComments[$notice->id] = Comment::where('notice_id', $notice->id)->count();
    }

    // controls the home dropdown menu

    $myYear = true;

    return view('users.home.authed', compact('notices', 'likeShare', 'isLikeNotice', 'totalComments', 'myYear'));
  }

  // all notices for auth user department

  public function myDepartment()
  {

    $notices = Notice::whereHas('targetDepartments', function($q){
      $q->where('department_id', Auth::user()->department_id);
    })->whereHas('targetYears', function($q){
      $q->where('year_id', Auth::user()->year);
    })->latest()->paginate(10);

    $likeShare = [];
    $isLike = [];
    $totalComments = [];

    foreach ($notices as $notice)
    {
      $likeShare[$notice->id]['like'] = LikeShare::where(['content_id' => $notice->id, 'content_type' => 1, 'action' => 1])->count();

      $likeShare[$notice->id]['share'] = LikeShare::where(['content_id' => $notice->id, 'content_type' => 1, 'action' => 2])->count();

      $isLikeNotice[$notice->id] = LikeShare::where(['user_id' => Auth::user()->id, 'content_id' => $notice->id, 'content_type' => 1, 'action' => 1])->count();

      $totalComments[$notice->id] = Comment::where('notice_id', $notice->id)->count();

      $totalAttachments[$notice->id] = Attachment::where(['context' => 1, 'content_id' => $notice->id])->count();
    }

    // controls the home dropdown menu

    $myDepartment = true;

    return view('users.home.authed', compact('notices', 'likeShare', 'isLikeNotice', 'totalComments', 'myDepartment', 'totalAttachments'));

  }

  // all notices for auth user subscriptions

  public function mySubscriptions()
  {

    $subscriptionIds = Follow::Where(['follower' => Auth::user()->id])->pluck('user_id')->toArray();

    (Auth::user()->id !== '1') ? $subscriptionIds[] = Auth::user()->id : '';

    $notices = Notice::whereIn('user_id', $subscriptionIds)->latest()->paginate(10);

    $likeShare = [];
    $isLike = [];
    $totalComments = [];

    foreach ($notices as $notice)
    {
      $likeShare[$notice->id]['like'] = LikeShare::where(['content_id' => $notice->id, 'content_type' => 1, 'action' => 1])->count();

      $likeShare[$notice->id]['share'] = LikeShare::where(['content_id' => $notice->id, 'content_type' => 1, 'action' => 2])->count();

      $isLikeNotice[$notice->id] = LikeShare::where(['user_id' => Auth::user()->id, 'content_id' => $notice->id, 'content_type' => 1, 'action' => 1])->count();

      $totalComments[$notice->id] = Comment::where('notice_id', $notice->id)->count();

      $totalAttachments[$notice->id] = Attachment::where(['context' => 1, 'content_id' => $notice->id])->count();
    }

    // controls the home dropdown menu

    $subscribedChannels = true;

    return view('users.home.authed', compact('notices', 'likeShare', 'isLikeNotice', 'totalComments', 'subscribedChannels', 'totalAttachments'));
  }
}
