<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('users.home.index');
});
Route::post('name-check', ['uses' => 'UserController@postName', 'as' => 'check-name']);

// Subscribe/unsubscribe

Route::post('subscribe/{id}', [
  'uses' => 'UserController@postSubscribe',
  'as'   => 'postSubscribe'
]);

// block/unblock

Route::post('block/{id}', [
  'uses' => 'UserController@postBlock',
  'as'   => 'postBlock'
]);

// Student

Route::get('student/dashboard', [
  'uses' => 'StudentController@getDashboard',
  'as'   => 'getStudentDashboard'
]);


Route::get('student/notices/channels', [
  'uses' => 'StudentController@getChannels',
  'as'   => 'getStudentChannels'
]);

Route::get('student/notices/reminders', [
  'uses' => 'StudentController@getReminders',
  'as'   => 'getStudentReminders'
]);

Route::get('student/notices/saved', [
  'uses' => 'StudentController@getSaved',
  'as'   => 'getStudentSaved'
]);

Route::get('student/settings', [
  'uses' => 'StudentController@getSettings',
  'as'   => 'getStudentSettings'
]);

Route::get('student/profile/edit', [
  'uses' => 'StudentController@getEdit',
  'as'   => 'getStudentEdit'
]);

Route::post('student/profile/edit', [
  'uses' => 'StudentController@postEdit',
  'as'   => 'postStudentEdit'
]);

Route::get('student/profile/subscribers', [
  'uses' => 'StudentController@getSubscribers',
  'as'   => 'getStudentSubscriber'
]);

Route::get('student/profile/subscriptions', [
  'uses' => 'StudentController@getSubscriptions',
  'as'   => 'getStudentSubscription'
]);



// Department

Route::get('department/dashboard', [
  'uses' => 'DepartmentController@getDashboard',
  'as'   => 'getDepartmentDashboard'
]);

Route::get('department/notices/all', [
  'uses' => 'DepartmentController@getAllNotices',
  'as'   => 'getDepartmentAllNotices'
]);

Route::get('department/notices/new', [
  'uses' => 'DepartmentController@getNewNotice',
  'as'   => 'getDepartmentNewNotice'
]);

Route::get('department/notices/categories', [
  'uses' => 'DepartmentController@getNoticeCategories',
  'as'   => 'getDepartmentNoticeCats'
]);

Route::get('department/subscribers/all', [
  'uses' => 'DepartmentController@getAllSubscribers',
  'as'   => 'getDepartmentAllSubscribers'
]);

Route::get('department/subscribers/comments', [
  'uses' => 'DepartmentController@getAllSubscriberComments',
  'as'   => 'getDepartmentSubscriberComments'
]);

Route::get('department/messages/all', [
  'uses' => 'DepartmentController@getMessagesAll',
  'as'   => 'getDepartmentMessagesAll'
]);

Route::get('department/settings', [
  'uses' => 'DepartmentController@getSettings',
  'as'   => 'getDepartmentSettings'
]);

// Organization

Route::get('organization/dashboard', [
  'uses' => 'OrganizationController@getDashboard',
  'as'   => 'getOrganizationDashboard'
]);

Route::get('organization/notices/all', [
  'uses' => 'OrganizationController@getAllNotices',
  'as'   => 'getOrganizationAllNotices'
]);

Route::get('organization/notices/new', [
  'uses' => 'OrganizationController@getNewNotice',
  'as'   => 'getOrganizationNewNotice'
]);

Route::get('organization/notices/categories', [
  'uses' => 'OrganizationController@getNoticeCategories',
  'as'   => 'getOrganizationNoticeCats'
]);

Route::get('organization/subscribers/all', [
  'uses' => 'OrganizationController@getAllSubscribers',
  'as'   => 'getOrganizationAllSubscribers'
]);

Route::get('organization/subscribers/comments', [
  'uses' => 'OrganizationController@getAllSubscriberComments',
  'as'   => 'getOrganizationSubscriberComments'
]);

Route::get('organization/messages/all', [
  'uses' => 'OrganizationController@getMessagesAll',
  'as'   => 'getOrganizationMessagesAll'
]);

Route::get('organization/settings', [
  'uses' => 'OrganizationController@getSettings',
  'as'   => 'getOrganizationSettings'
]);

// Lecturer

Route::get('lecturer/dashboard', [
  'uses' => 'LecturerController@getDashboard',
  'as'   => 'getLecturerDashboard'
]);

Route::get('lecturer/notices/all', [
  'uses' => 'LecturerController@getAllNotices',
  'as'   => 'getLecturerAllNotices'
]);

Route::get('lecturer/notices/edit/{id}', [
  'uses' => 'LecturerController@getEditNotice',
  'as'   => 'getLecturerEditNotice'
]);

Route::get('lecturer/notices/delete/{id}', [
  'uses' => 'LecturerController@deleteNotice',
  'as'   => 'deleteLecturerNotice'
]);

Route::post('lecturer/profile/edit', [
  'uses' => 'LecturerController@postEdit',
  'as'   => 'postLecturerEdit'
]);

Route::post('lecturer/notices/edit/{id}', [
  'uses' => 'LecturerController@postEditNotice',
  'as'   => 'postLecturerEditNotice'
]);

Route::get('lecturer/notices/new', [
  'uses' => 'LecturerController@getNewNotice',
  'as'   => 'getLecturerNewNotice'
]);

Route::post('lecturer/notices/new', [
  'uses' => 'LecturerController@postNewNotice',
  'as'   => 'postLecturerNewNotice'
]);

Route::get('lecturer/notices/categories', [
  'uses' => 'LecturerController@getNoticeCategories',
  'as'   => 'getLecturerNoticeCats'
]);

Route::post('lecturer/notices/categories', [
  'uses' => 'LecturerController@postNoticeCategories',
  'as'   => 'postLecturerNoticeCats'
]);

Route::get('lecturer/subscribers/all', [
  'uses' => 'LecturerController@getAllSubscribers',
  'as'   => 'getLecturerAllSubscribers'
]);

Route::get('lecturer/subscribers/comments', [
  'uses' => 'LecturerController@getAllSubscriberComments',
  'as'   => 'getLecturerSubscriberComments'
]);

Route::get('lecturer/messages/all', [
  'uses' => 'LecturerController@getMessagesAll',
  'as'   => 'getLecturerMessagesAll'
]);

Route::get('lecturer/settings', [
  'uses' => 'LecturerController@getSettings',
  'as'   => 'getLecturerSettings'
]);

// Class rep

Route::get('class-rep/dashboard', [
  'uses' => 'ClassRepController@getDashboard',
  'as'   => 'getClassRepDashboard'
]);

Route::get('class-rep/notices/all', [
  'uses' => 'ClassRepController@getAllNotices',
  'as'   => 'getClassRepAllNotices'
]);

Route::get('class-rep/notices/new', [
  'uses' => 'ClassRepController@getNewNotice',
  'as'   => 'getClassRepNewNotice'
]);

Route::get('class-rep/notices/categories', [
  'uses' => 'ClassRepController@getNoticeCategories',
  'as'   => 'getClassRepNoticeCats'
]);

Route::get('class-rep/subscribers/all', [
  'uses' => 'ClassRepController@getAllSubscribers',
  'as'   => 'getClassRepAllSubscribers'
]);

Route::get('class-rep/subscribers/comments', [
  'uses' => 'ClassRepController@getAllSubscriberComments',
  'as'   => 'getClassRepSubscriberComments'
]);

Route::get('class-rep/messages/all', [
  'uses' => 'ClassRepController@getMessagesAll',
  'as'   => 'getClassRepMessagesAll'
]);

Route::get('class-rep/settings', [
  'uses' => 'ClassRepController@getSettings',
  'as'   => 'getClassRepSettings'
]);

// Registration and Login

Route::get('login', [
  'uses' => 'Auth\LoginController@showLoginForm',
  'as'   => 'getLogin'
]);

Route::post('login', [
  'uses' => 'Auth\LoginController@login',
  'as'   => 'postLogin'
]);

Route::get('logout', [
  'uses' => 'Auth\LoginController@logout',
  'as'   => 'getLogout'
]);

Route::get('register/{role?}', [
  'uses' => 'Auth\RegisterController@showRegistrationForm',
  'as'   => 'getRegister'
]);

Route::post('register/{role?}', [
  'uses' => 'Auth\RegisterController@register',
  'as'   => 'postRegister'
]);

// Password reset

Route::get('password/reset', [
  'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm',
  'as'   => 'password.request'
]);

Route::post('password/email', [
  'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail',
  'as'   => 'password.email'
]);

Route::get('password/reset/{token}', [
  'uses' => 'Auth\ResetPasswordController@showResetForm',
  'as'   => 'password.reset'
]);

Route::post('password/reset', [
  'uses' => 'Auth\ResetPasswordController@reset',
  'as'   => 'postResetPassword'
]);

// Notices

Route::get('notices/{id}/{slug}', [
  'uses' => 'NoticeController@getShowNotice',
  'as'   => 'getShowNotice'
]);

Route::post('notices/like/{id}', [
  'uses' => 'NoticeController@postLike',
  'as'   => 'postNoticeLike'
]);

Route::post('notices/share/{id}/{to}', [
  'uses' => 'NoticeController@postNoticeShare',
  'as'   => 'postNoticeShare'
]);

// comments

Route::post('comment/notices/new/{noticeId}', [
  'uses' => 'CommentController@postNoticeComment',
  'as'   => 'postNoticeComment'
]);

Route::post('comment/notices/like/{noticeId}/{commentId}', [
  'uses' => 'NoticeController@postCommentLike',
  'as'   => 'postCommentLike'
]);

Route::post('comment/notices/share/{id}/{to}', [
  'uses' => 'NoticeController@postCommentShare',
  'as'   => 'postNoticeCommentShare'
]);

/*
Route::get('register/{role?}', [
  'uses' => 'UserController@getRegister',
  'as'   => 'getRegister'
]);

Route::post('register/{role?}', [
  'uses' => 'UserController@postRegister',
  'as'   => 'postRegister'
]);
*/

/*
Route::get('login', [
  'uses' => 'UserController@getLogin',
  'as'   => 'getLogin'
]);

Route::post('login', [
  'uses' => 'UserController@postLogin',
  'as'   => 'postLogin'
]);

Route::get('logout', [
  'uses' => 'UserController@getLogout',
  'as'   => 'getLogout'
]);
*/

Route::get('notices/all', function () {
    return view('users.notices.all');
})->name('getNoticesAll');

Route::get('notices/dashboard', function () {
    return view('users.notices.dashboard');
});

Route::get('notices/new', function () {
    return view('users.notices.new');
});

Route::get('notices/categories', function () {
    return view('users.notices.categories');
});

Route::get('notices/subscribers', function () {
    return view('users.notices.subscribers');
});

Route::get('notices/messages', function () {
    return view('users.notices.messages');
});

Route::get('notices/view', function () {
    return view('users.notices.view');
});

Route::get('notices/comments', function () {
    return view('users.notices.comments');
});

Route::get('profile/channels', function () {
    return view('users.profile.channels');
});

Route::get('profile/my-followed', function () {
    return view('users.profile.my-followed');
});

Route::get('profile/my-channels', function () {
    return view('users.profile.my-channels');
});

Route::get('profile/reminders', function () {
  return view('users.profile.reminders');
});

Route::get('profile/saved', function () {
  return view('users.profile.saved');
});

Route::get('profile/edit', [
  'uses' => 'UserController@getProfileEdit',
  'as'   => 'getProfileEdit'
]);

Route::get('profile/followers', function () {
    return view('users.profile.followers');
});

Route::get('profile/subscribers', function () {
    return view('users.profile.subscribers');
});

Route::get('profile/view', function () {
    return view('users.profile.view');
});

Route::get('profile/wallet', function () {
    return view('users.profile.wallet');
});

Route::get('inbox', function () {
    return view('users.inbox.index');
});

Route::get('inbox/new', function () {
    return view('users.inbox.new');
});

Route::get('inbox/view', function () {
    return view('users.inbox.view');
});

//Auth::routes();

Route::get('home', [
  'uses' => 'HomeController@mySubscriptions',
  'as'   => 'getHome'
]);

Route::get('home/department', [
  'uses' => 'HomeController@myDepartment',
  'as'   => 'getHomeDepartment'
]);

Route::get('home/year', [
  'uses' => 'HomeController@myYear',
  'as'   => 'getHomeYear'
]);

Route::get('home/hostel', [
  'uses' => 'HomeController@myHostel',
  'as'   => 'getHomeHostel'
]);

Route::get('home/all', [
  'uses' => 'HomeController@myAll',
  'as'   => 'getHomeAll'
]);
