<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $table = 'ideas';

    protected $fillable = [
        'author_id', 'title', 'body', 'tags'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'author_id');
    }
    
}
