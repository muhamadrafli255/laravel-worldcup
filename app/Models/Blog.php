<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function getBlogPost()
    {
        $blogs = Blog::select(
            [
                'id',
                'title',
                'slug',
                'subject',
                'body',
                'image',
            ]
            );
        return $blogs;
    }
}
