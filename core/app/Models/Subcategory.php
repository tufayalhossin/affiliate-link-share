<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected  $fillable = [
        'name',
        'slug',
        'photo',
        'category_id',
        'status',
        'created_at',
        'updated_at'
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id','id');
    }
}
