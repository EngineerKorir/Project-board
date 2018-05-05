<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use App\Follow;
use App\Comment;
use App\LikeShare;
use App\Attachment;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{

  public function __construct()
  {
    // Access to only authenticated uses

    $this->middleware('auth');
  }

  // display single notice

  public function getShowNotice($id, $slug)
  {
    // fetch particular notice

    $notice = Notice::find($id);

    // total notices by user

    $totalNotices = Notice::where('user_id', $notice->user->id)->count();

    // total subsribers by user

    $totalSubscribers = Follow::where(['user_id' => $notice->user->id])->count();

    // fetch comments

    $comments = Comment::where('notice_id', $id)->paginate(15);

    // total comments

    $totalComments = Comment::where('notice_id', $id)->count();

    // likes and shares

    $likeShare['like']  = LikeShare::where(['content_id' => $id, 'content_type' => 1, 'action' => 1])->count();
    $likeShare['share'] = LikeShare::where(['content_id' => $id, 'content_type' => 1, 'action' => 2])->count();
    $isLikeNotice       = LikeShare::where(['user_id' => Auth::user()->id, 'content_id' => $id, 'content_type' => 1, 'action' => 1])->count();

    // likes and shares comments

    foreach ($comments as $comment)
    {
      $likeShareComment[$comment->id]['like'] = LikeShare::where(['content_id' => $id, 'content_type' => 2, 'action' => 1, 'cid' => $comment->id])->count();

      $likeShareComment[$comment->id]['share'] = LikeShare::where(['content_id' => $comment->id, 'content_type' => 2, 'action' => 2])->count();

      $isLike[$comment->id] = LikeShare::where(['user_id' => Auth::user()->id, 'content_id' => $id, 'content_type' => 2, 'action' => 1, 'cid' => $comment->id])->count();
    }

    //dd($isLike);

    // increment notice views

    $notice->views += 1;
    $notice->update();

    //dd($likeShareComment);

    // Attachments

    $attachment = Attachment::where(['context' => 1, 'content_id' => $notice->id])->get();

    $totalAttachments = Attachment::where(['context' => 1, 'content_id' => $notice->id])->count();

    return view('users.notices.view', compact('notice', 'totalNotices', 'totalSubscribers', 'comments', 'totalComments', 'likeShare', 'likeShareComment', 'isLike', 'isLikeNotice', 'totalAttachments', 'attachment'));
  }

  // like/unlike on notice

  public function postLike($id)
  {

    // check whether user already liked

    $userId = Auth::user()->id;

    $count = LikeShare::where(['user_id' => $userId, 'content_id' => $id, 'content_type' => 1, 'action' => 1])->count();

    if ($count > 0)
    {
      // user already liked
      // unlike

      LikeShare::where(['content_id' => $id, 'content_type' => '1', 'action' => '1', 'user_id' => $userId])->delete();

    } else {

      // user hasn't liked
      // like

      $likeShare = new LikeShare();

      $likeShare->user_id = $userId;
      $likeShare->content_id = $id;
      $likeShare->content_type = '1'; // notice
      $likeShare->action = '1'; // like

      $likeShare->save();
    }

    return redirect()->back();
  }

  // like/unlike on comment

  public function postCommentLike($noticeId, $commentId)
  {

    // check whether user already liked

    $userId = Auth::user()->id;

    $count = LikeShare::where(['user_id' => $userId, 'content_id' => $noticeId, 'content_type' => 2, 'action' => 1, 'cid' => $commentId])->count();

    if ($count > 0)
    {
      // user already liked
      // unlike

      LikeShare::where(['content_id' => $noticeId, 'content_type' => 2, 'action' => 1, 'user_id' => $userId, 'cid' => $commentId])->delete();

    } else {

      // user hasn't liked
      // like

      $likeShareComment = new LikeShare();

      $likeShareComment->user_id = $userId;
      $likeShareComment->content_id = $noticeId;
      $likeShareComment->cid = $commentId;
      $likeShareComment->content_type = 2; // comment
      $likeShareComment->action = 1; // like

      $likeShareComment->save();
    }

    return redirect()->back();
  }

  // share notice

  public function postNoticeShare($id, $to)
  {
    // user already shared?

    $count = LikeShare::where([
      'user_id'       => Auth::user()->id,
      'content_id'    => $id,
      'content_type'  => 1, // notice
      'action'        => 2 // share
      ])->count();

    if (! $count > 0)
    {
      // haven't shared yet

      $userId = Auth::user()->id;

      $likeShare = new LikeShare();

      $likeShare->user_id = $userId;
      $likeShare->content_id = $id;
      $likeShare->content_type = '1'; // notice
      $likeShare->action = '2'; // share

      $likeShare->save();
    }

    // redirect to ... to

    return redirect()->back();
  }

  // share comment

  public function postCommentShare($id, $to)
  {

    // user already shared?

    $count = LikeShare::where([
      'user_id'       => Auth::user()->id,
      'content_id'    => $id,
      'content_type'  => 2, // comment
      'action'        => 2 // share
      ])->count();

    if (! $count > 0)
    {
      // haven't shared yet

      $userId = Auth::user()->id;

      $likeShare = new LikeShare();

      $likeShare->user_id = $userId;
      $likeShare->content_id = $id;
      $likeShare->content_type = '2'; // comment
      $likeShare->action = '2'; // share

      $likeShare->save();
    }

    // redirect to ... to

    return redirect()->back();
  }
}
