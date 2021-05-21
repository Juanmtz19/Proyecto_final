<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyboard extends Model
{
    use HasFactory;
    protected $fillable = [
        'image','brand' , 'mark' , 'sampler' , 'octaves' , 'case' , 'fuction',
        'pedal' , 'color' , 'description' , 'comment' , 'chac' , 'available', 'tune',

    ];

}
