<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    protected $fillable = [
        'client_id', 'position', 'offer', 'description'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','client_id');
    }
    
}
