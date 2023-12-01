<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'transaction_user_id', 'id');
    }

    public function game(){
        return $this->belongsTo(Game::class, 'transaction_game_id', 'id');
    }
}
