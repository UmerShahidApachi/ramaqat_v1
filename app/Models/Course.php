<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [''];
    public function users()
    {
        return $this->hasMany(User::class,'id','user_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
