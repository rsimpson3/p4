<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    # Each game belongs to one user
    public function user() {
        return $this->belongsTo('\App\User')

    }
}
