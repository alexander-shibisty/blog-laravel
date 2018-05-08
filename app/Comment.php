<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Comment extends Model
{
    use CrudTrait;
    
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
