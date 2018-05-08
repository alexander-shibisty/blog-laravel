<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Post extends Model
{
    use CrudTrait;
    
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
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
