<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->belongsToMany("App\Models\Tag");
    }


    public function likes() {
        return $this->belongsToMany("App\Models\User", "likes", "article_id", "user_id");
        // SELECT
    }

    public function comments() {
        return $this->hasMany("App\Models\Comment");
    }
}
