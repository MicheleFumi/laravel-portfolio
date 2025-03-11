<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
