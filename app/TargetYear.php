<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetYear extends Model
{

  // define custom table

  protected $table = 'target_years';

  // many to many relationship with Notice

  public function notices()
  {
    return $this->belongsToMany('App\Notice', 'notice_target_year', 'year_id', 'notice_id')->withTimestamps();
  }
}
