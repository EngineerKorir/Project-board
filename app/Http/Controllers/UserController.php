<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use App\Follow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    // Check for availability of a username

    public function postName(Request $request)
    {
      $user = User::where('username', $request->username)->count();
      $exists = $user > 0 ? "<small class='form-text text-danger'>Sorry, <strong>" . $request->username . "</strong> is already registered</small>" :
      "";
      return response($exists);
    }

    // subscribe/unsubscribe

    public function postSubscribe($id)
    {

      // is the Auth user already following this $id?

      $follow = Follow::where(['user_id' => $id, 'follower' => Auth::user()->id])->count();

      if ($follow > 0)
      {

        // the auth user is already following this $id

        // unsubscribe the auth user from $id

        Follow::where(['user_id' => $id, 'follower' => Auth::user()->id])->delete();

        return redirect()->back()->with('success','You have unsubscribed from this user');

      } else {

        $subscriber           = new Follow();
        $subscriber->user_id  = $id;
        $subscriber->follower = Auth::user()->id;
        $subscriber->save();

        return redirect()->back()->with('success','You are now subscribed to this user');
      }
    }

    // block/unblock

    public function postBlock($id)
    {

      // has the auth user already blocked this $id?

      $block = Follow::where(['user_id' => Auth::user()->id, 'follower' => $id, 'status' => 0])->count();

      if ($block > 0)
      {

        // the auth user has already blocked this $id

        // unblock this $id

        Follow::where([
          'user_id'   => Auth::user()->id,
          'follower'  => $id,
          'status'    => 0])->update(['status' => 1]);

        return redirect()->back()->with('success','You have unblocked this user');

      } else {

        // block the user

        Follow::where(['user_id' => Auth::user()->id, 'follower' => $id, 'status' => 1])
        ->update(['status' => 0]);

        return redirect()->back()->with('success','You have blocked this user');
      }
    }
}
