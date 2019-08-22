<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
   protected $fillable = ['catagory','productname','modelname','description','file'];
}
