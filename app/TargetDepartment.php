<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetDepartment extends Model
{

  // define custom table

  protected $table = 'target_departments';

  // many to many relationship with Notice

  public function notices()
  {
    return $this->belongsToMany('App\Notice', 'notice_target_department', 'department_id', 'notice_id')->withTimestamps();
  }
}
