<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = [
      'categoryname_en',
      'categoryname_bn',
      'publication_status'
    ];
}
