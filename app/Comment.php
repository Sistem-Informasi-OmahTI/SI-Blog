<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        "users_id", "posts_id", "content"
    ];

    public function user(){
        return $this->belongsTo("App\User");
    }

    public function post(){
        return $this->belongsTo("App\Post");
    }
}
