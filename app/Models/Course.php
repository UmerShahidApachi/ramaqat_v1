<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [''];
    public function users()
    {
        return $this->hasMany('App\User','user_id','id');
    }
    public function category()
    {
        return $this->hasMany('App\Category','category_id','id');
    }
}
