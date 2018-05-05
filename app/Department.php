<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Faculty;

class Department extends Model
{

    // One to many relationship with User

    public function users()
    {
      return $this->hasMany('App\User');
    }

    // One to many relationship with Faculty

    public function faculty()
    {
      return $this->belongsTo('App\Faculty');
    }
}
