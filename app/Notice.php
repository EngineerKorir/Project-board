<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
  // Many to one relationship with User

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  // Many to many relationship with Category

  public function categories()
  {
    return $this->belongsToMany('App\Category');
  }

  // many to many relationship with TargetYear

  public function targetYears()
  {
    return $this->belongsToMany('App\TargetYear', 'notice_target_year', 'notice_id', 'year_id')->withTimestamps();
  }

  // many to many relationship with TargetDepartment

  public function targetDepartments()
  {
    return $this->belongsToMany('App\TargetDepartment', 'notice_target_department', 'notice_id', 'department_id')->withTimestamps();
  }

  // One to many relationship with Comment

  public function comments()
  {
    return $this->hasMany('App\Comment');
  }

  // one to many relationship with attachment

  public function attachments()
  {
    return $this->hasMany('App\Attachment');
  }

  public function getCreatedAtAttribute($value)
  {
    return date('M j, Y h:ia', strtotime($value));
  }

  public function getDeadlineAttribute($value)
  {
    if ($value)
    {
      return date('M j, Y h:ia', strtotime($value));
    }
  }
}
