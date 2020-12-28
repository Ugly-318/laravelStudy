<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * 该分类拥有所用的博客
     */
    public function blogs()
    {
        return $this->hasMany(Blog::class,'category_id','id');
    }
}
