<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  protected $fillable =
  [
      'name',
      'des',
      'price',
      'img',
      'serialNo',
      'quantity'
    ];

}
