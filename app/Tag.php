<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function hobbies() {
      return $this->belongsToMany('App\Hobby');
  }

    protected $table = 'tags';

    protected $fillable= [

      
  
         'name',
        'style',
        
  
      ];
}
