<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    //
    protected $table = 'instructors';

    protected $fillable= [
        'first_name',
        'last_name',
        'email',
      'joining_date',
      'designation',
     
        'phone_number',
        'address',
  
      ];
}
