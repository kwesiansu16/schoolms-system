<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholar extends Model
{
    //
    protected $table = 'scholars';

    protected $fillable= [
        'first_name',
        'last_name',
        'email',
      'registration_date',
      'birth_date',
      'completion_date',
      'gender',
        'phone_number',
        'address',
  
      ];
}
