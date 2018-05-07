<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name',
        'content',
        'title',
        'h1',
        'description',
        'publicated',
        'created_at',
    ];

    public function comments() {
        return $this->hasMany(Comments::class, 'post_id', 'id');
    }
}
