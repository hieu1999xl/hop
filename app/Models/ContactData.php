<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactData extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'full_name',
        'company',
        'email',
        'note',
        'type'
    ];
}
