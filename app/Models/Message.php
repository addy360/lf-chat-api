<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Message extends Model
{
    use HasFactory;

    public $fillable = [
        "message",
        "to_user",
        "from_user",
    ];

    public function receiver()
    {
        return $this->belongsTo(User::class, "to_user", 'id');
    }
}
