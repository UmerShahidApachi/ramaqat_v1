<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lesson;

class Section extends Model
{
    public function lessons()
    {
        return $this->hasMany(Lesson::class,'section_id','id');
    }
}
