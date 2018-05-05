<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Notice;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function postNoticeComment(Request $request, $id)
    {
      // Validation

      $this->validate($request, [
        'text' => 'required',
      ]);

      // Create new comment

      $comment = new Comment();

      // Assign attributes

      $comment->notice_id     = $id;
      $comment->text     = $request->input('text');

      // Save comment with user id

      $request->user()->comments()->save($comment);

      // Redirect to comments section

      return redirect($request->headers->get('referer') . '#notice-comments')->with('success', 'Comment posted');
    }
}
