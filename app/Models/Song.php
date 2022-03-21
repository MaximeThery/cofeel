<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    public function user() {
        // SELECT * from users where id= $this->user_id
        return $this->belongsTo("App\Models\User", "user_id");
    }
}
