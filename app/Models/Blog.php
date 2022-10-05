<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    public  $text;

    public function __construct()
    {
        $this->text = $this->maxText();
    }

    protected $primaryKey = "blog_id";

    protected $fillable = [
        "blog_id",
        "title",
        "content",
        "text"
    ];


    private function maxText()
    {

        $limit = 80;
        $text = strip_tags($this->content);
        if (strlen($text) >= $limit)
        {
            $text = substr($text, $limit);
        }

        return $text;
    }
}
