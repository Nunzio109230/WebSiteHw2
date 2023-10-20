<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Album extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}