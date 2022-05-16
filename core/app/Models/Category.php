<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected  $fillable = [
        'name',
        'slug',
        'photo',
        'status',
        'created_at',
        'updated_at'
    ];

    public function subcategory(){
        return $this->hasMany('App\Models\Subcategory','category_id','id');
    }
}
