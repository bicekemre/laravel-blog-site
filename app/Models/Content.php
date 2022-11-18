<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "home_name",
        "home_content",
        "home_about",
        "home_title",
        "home_content2",
        "projects_content",
        "blog_title1",
        "blog_title2",
        "blog_content1",
        "blog_content2",
        "about_name",
        "about_content",
    ];
}
