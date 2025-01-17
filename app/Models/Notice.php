<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Notice extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'notice',
        'noticedes',
        'telegram_id'
    ];
}
