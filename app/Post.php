<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $guarded = [
        'created_at',
        'updated_at'
    ];
}
