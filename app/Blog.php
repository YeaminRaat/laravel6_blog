<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'categoryId', 'blog_title', 'blog_content', 'status',
    ];

}
