<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
  protected $fillable = [
      'book_catagory', 'book_sub_catagory','book_name','book_des', 'book_author','book_image','file_name','file_size',
      'total_view','total_download',
  ];
}
