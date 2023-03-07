<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;


    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function likes() {
        return $this->belongsToMany("App\Models\Article", "likes", "user_id", "article_id");
        // SELECT
    }
}
