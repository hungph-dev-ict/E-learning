<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    protected $table = 'categories';

    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }

    public function getAllCategory()
    {
        return Category::all();
    }
}
