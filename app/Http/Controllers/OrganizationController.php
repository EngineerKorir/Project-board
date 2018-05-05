<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
  public function __construct()
  {
    // Access to only authenticated uses

    $this->middleware('auth');

    // Access to only organization

    $this->middleware('organization');
  }

  // Display organization dashboard

  public function getDashboard()
  {
    return view('users.organization.dashboard');
  }

  // Display all notices

  public function getAllNotices()
  {
    return view('users.organization.notices.all');
  }

  // Display new notice form

  public function getNewNotice()
  {
    return view('users.organization.notices.new');
  }

  // Display notice categories

  public function getNoticeCategories()
  {
    return view('users.organization.notices.categories');
  }

  // Display all subscribers

  public function getAllSubscribers()
  {
    return view('users.organization.subscribers.all');
  }

  // Display all comments by subscribers

  public function getAllSubscriberComments()
  {
    return view('users.organization.subscribers.comments');
  }

  // Display all messages

  public function getMessagesAll()
  {
    return view('users.organization.messages.all');
  }

  // Display settings

  public function getSettings()
  {
    return view('users.organization.settings');
  }
}
