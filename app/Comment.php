<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Many to one relationship with User

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    // Many to one relationship with Notice

    public function notice()
    {
      return $this->belongsTo('App\Notice');
    }

    public function getCreatedAtAttribute($value)
    {
      return date('M j, Y h:ia', strtotime($value));
    }
}
