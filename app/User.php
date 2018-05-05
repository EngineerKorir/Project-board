<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Notifications\Notifiable;


class User extends Model implements Authenticatable, CanResetPassword
{
    use \Illuminate\Auth\Authenticatable;
    use \Illuminate\Auth\Passwords\CanResetPassword;
    use \Illuminate\Notifications\Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'phone', 'is_active', 'gender', 'bio', 'role_id', 'hostel_id', 'faculty_id', 'department_id',
        'salutation_id', 'dob', 'photo', 'year', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Many to one relationship with Department

    public function department()
    {
      return $this->belongsTo('App\Department');
    }

    // Many to one relationship with Faculty

    public function faculty()
    {
      return $this->belongsTo('App\Faculty');
    }

    // Many to one relationship with Salutation

    public function salutation()
    {
      return $this->belongsTo('App\Salutation');
    }

    // One to many relationship with Notice

    public function notices()
    {
      return $this->hasMany('App\Notice');
    }

    // One to many relationship with Category

    public function categories()
    {
      return $this->hasMany('App\Category');
    }

    // one to many relationship with Comment

    public function comments()
    {
      return $this->hasMany('App\Comment');
    }

    // one to many relationship with attachment

    public function attachments()
    {
      return $this->hasMany('App\Attachment');
    }
}
