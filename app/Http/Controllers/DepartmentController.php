<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{

  public function __construct()
  {
    // Access to only authenticated uses

    $this->middleware('auth');

    // Access to only department

    $this->middleware('department');
  }

  // Display department dashboard

  public function getDashboard()
  {
    return view('users.department.dashboard');
  }

  // Display all notices

  public function getAllNotices()
  {
    return view('users.department.notices.all');
  }

  // Display new notice form

  public function getNewNotice()
  {
    return view('users.department.notices.new');
  }

  // Display notice categories

  public function getNoticeCategories()
  {
    return view('users.department.notices.categories');
  }

  // Display all subscribers

  public function getAllSubscribers()
  {
    return view('users.department.subscribers.all');
  }

  // Display all comments by subscribers

  public function getAllSubscriberComments()
  {
    return view('users.department.subscribers.comments');
  }

  // Display all messages

  public function getMessagesAll()
  {
    return view('users.department.messages.all');
  }

  // Display settings

  public function getSettings()
  {
    return view('users.department.settings');
  }
}
