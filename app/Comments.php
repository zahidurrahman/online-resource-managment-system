<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
  protected $fillable = [
      'user_id', 'details',
  ];

  public function User()
  {
      return $this->belongsTo(User::class, 'user_id');
  }
}
