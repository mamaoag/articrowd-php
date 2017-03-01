<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        protected $fillable = [
                'author_id', 'body', 'title', 'tags'
        ];

        protected $table = 'posts';

        public function users(){
            return $this->belongsTo('App\User','author_id');
        }

        public function comments(){
            return $this->morphMany('App\Comment', 'commentable');
        }
}
