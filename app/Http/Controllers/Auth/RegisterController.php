<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Register Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users as well as their
  | validation and creation. By default this controller uses a trait to
  | provide this functionality without requiring any additional code.
  |
  */

  use RegistersUsers;

  /**
  * Where to redirect users after registration.
  *
  * @var string
  */
  protected $redirectTo = '/home';

  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('guest');
  }

  public function showRegistrationForm($role = 'default')
  {
    switch ($role)
    {
      case 'student':
        return view('users.auth.student');
      break;

      case 'department':
        return view('users.auth.department');
      break;

      case 'organization':
        return view('users.auth.organization');
      break;

      case 'lecturer':
        return view('users.auth.lecturer');
      break;

      case 'class_rep':
        return view('users.auth.class_rep');
      break;

      default:
        return view('users.auth.landing');
      break;
    }
  }

  /**
  * Get a validator for an incoming registration request.
  *
  * @param  array  $data
  * @param  string $role
  * @return \Illuminate\Contracts\Validation\Validator
  */
  protected function validator(array $data, $role)
  {
    switch ($role)
    {

      case 'student':

        return Validator::make($data, [
          'username'      => 'required|unique:users',
          'gender'        => 'required',
          'email'         => 'required|unique:users',
          'department_id' => 'required',
          'year'          => 'required',
          'phone'         => 'required',
          'hostel_id'     => 'required',
          'password'      => 'required',
        ]);
      break;

      case 'department':

        return Validator::make($data, [
          'email'         => 'required',
          'department_id' => 'required',
          'phone'         => 'required',
          'password'      => 'required',
        ]);
      break;

      case 'organization':

        return Validator::make($data, [
          'username'  => 'required',
          'email'     => 'required',
          'phone'     => 'required',
          'password'  => 'required',
        ]);
      break;

      case 'lecturer':

        return Validator::make($data, [
          'username'      => 'required',
          'gender'        => 'required',
          'faculty_id'    => 'required',
          'email'         => 'required',
          'phone'         => 'required',
          'password'      => 'required',
        ]);
      break;

      case 'class_rep':

        return Validator::make($data, [
          'username'      => 'required',
          'department_id' => 'required',
          'year'          => 'required',
          'gender'        => 'required',
          'email'         => 'required',
          'phone'         => 'required',
          'password'      => 'required',
        ]);
      break;

      default:
        return false;
      break;
    }
  }

  /**
  * Create a new user instance after a valid registration.
  *
  * @param  array  $data
  * @param  array  $role
  * @return User
  */
  protected function create(array $data, $role)
  {
    switch ($role)
    {

      case 'student':

        return User::create([
          'username'      => $data['username'],
          'gender'        => $data['gender'],
          'email'         => $data['email'],
          'department_id' => $data['department_id'],
          'year'          => $data['year'],
          'phone'         => $data['phone'],
          'role_id'       => '1',
          'hostel_id'     => $data['hostel_id'],
          'password'      => bcrypt($data['password']),
        ]);
      break;

      case 'department':

        // Generate unique username

        $username = '';

        do {
          $username = str_random(4);

          // Check in database for username uniqueness

          $count = User::where('username', $username)->count();
        } while ($count > 0);

        return User::create([
          'username'      => $username,
          'email'         => $data['email'],
          'department_id' => $data['department_id'],
          'phone'         => $data['phone'],
          'bio'           => $data['bio'],
          'role_id'       => '2',
          'password'      => bcrypt($data['password']),
        ]);
      break;

      case 'organization':

        return User::create([
          'username'      => $data['username'],
          'email'         => $data['email'],
          'phone'         => $data['phone'],
          'bio'           => $data['bio'],
          'role_id'       => '3',
          'password'      => bcrypt($data['password']),
        ]);
      break;

      case 'lecturer':

        return User::create([
          'username'      => $data['username'],
          'salutation_id' => $data['salutation_id'],
          'gender'        => $data['gender'],
          'faculty_id'    => $data['faculty_id'],
          'email'         => $data['email'],
          'phone'         => $data['phone'],
          'role_id'       => '4',
          'password'      => bcrypt($data['password']),
        ]);
      break;

      case 'class_rep':

        return User::create([
          'username'      => $data['username'],
          'department_id' => $data['department_id'],
          'year'          => $data['year'],
          'gender'        => $data['gender'],
          'email'         => $data['email'],
          'phone'         => $data['phone'],
          'role_id'       => '5',
          'password'      => bcrypt($data['password']),
        ]);
      break;

      default:
        return false;
      break;
    }
  }
}
