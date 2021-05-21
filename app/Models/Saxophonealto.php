<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saxophonealto extends Model
{
    use HasFactory;

    protected $fillable = [
        'image','brand', 'mark', 'color', 'Pieces', 'Register', 'description', 
        'comment', 'available', 'charac',
    ];
}
