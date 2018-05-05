<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{

    // One to many relationship with Department

    public function departments()
    {
      return $this->hasMany('App\Department');
    }

    // One to many relationship with User

    public function users()
    {
      return $this->hasMany('App\User');
    }
}
