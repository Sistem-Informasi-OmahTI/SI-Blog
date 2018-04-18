<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        "users_id", "title", "content"
    ];

    public function user(){
        return $this->belongsTo("App\User");
    }

    public function comment(){
        return $this->hasMany("App\Comment");
    }
}
