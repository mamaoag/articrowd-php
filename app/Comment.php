<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $fillable = [
        'author_id', 'body', 'commentable_id', 'commentable_type'
    ];

    public function commentable() {
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo('App\User', 'author_id');
    }
}
