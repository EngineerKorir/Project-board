<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  // Many to one relationship with User

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  // Many to many relationship with Notice

  public function notices()
  {
    return $this->belongsToMany('App\Notice');
  }
}
