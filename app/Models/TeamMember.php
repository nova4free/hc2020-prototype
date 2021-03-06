<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }
}
