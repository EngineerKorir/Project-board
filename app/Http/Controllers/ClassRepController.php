<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassRepController extends Controller
{
  public function __construct()
  {
    // Access to only authenticated uses

    $this->middleware('auth');

    // Access to only class rep

    $this->middleware('class-rep');
  }

  // Display class rep dashboard

  public function getDashboard()
  {
    return view('users.class-rep.dashboard');
  }

  // Display all notices

  public function getAllNotices()
  {
    return view('users.class-rep.notices.all');
  }

  // Display new notice form

  public function getNewNotice()
  {
    return view('users.class-rep.notices.new');
  }

  // Display notice categories

  public function getNoticeCategories()
  {
    return view('users.class-rep.notices.categories');
  }

  // Display all subscribers

  public function getAllSubscribers()
  {
    return view('users.class-rep.subscribers.all');
  }

  // Display all comments by subscribers

  public function getAllSubscriberComments()
  {
    return view('users.class-rep.subscribers.comments');
  }

  // Display all messages

  public function getMessagesAll()
  {
    return view('users.class-rep.messages.all');
  }

  // Display settings

  public function getSettings()
  {
    return view('users.class-rep.settings');
  }
}
