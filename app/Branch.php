<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //
    protected $table = 'branches';

    protected $fillable= [
'bsort','bfull'
  
      ];
}