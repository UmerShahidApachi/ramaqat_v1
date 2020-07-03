<?php

namespace App\Models;

use App\Lesson;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [''];
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class,'course_id','id');
    }
}
