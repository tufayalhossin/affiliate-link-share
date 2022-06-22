<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSections extends Model
{
    use HasFactory;

    public function leasons(){
        return $this->hasMany('App\Models\CourseLessons','section_id','id')->where('status',1);
    }
}
