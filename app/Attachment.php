<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
  // Many to one relationship with User

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  // Many to one relationship with notice

  public function notice()
  {
    return $this->belongsTo('App\Notice');
  }
}
