<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name',
        'email',
        'content',
        'publicated',
        'create_at',
    ];

    public function post() {
        return $this->belongsTo('App\User', 'post_id');
    }
}
