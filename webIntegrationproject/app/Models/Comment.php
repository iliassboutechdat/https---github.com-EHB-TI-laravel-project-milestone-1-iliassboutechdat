<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function post(){
        return $this->belongsTo('\App\Models\post');
    }

    public function author(){
        return $this->belongsTo('\App\Models\User');
    }
}
