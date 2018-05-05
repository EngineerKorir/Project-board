<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salutation extends Model
{

    // One to many relationship with User

    public function lecturers()
    {
      return $this->hasMany('App\User');
    }
}
