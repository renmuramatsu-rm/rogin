<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rogin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'generation',
        'email',
        'message',
        'content',
    ];
}
