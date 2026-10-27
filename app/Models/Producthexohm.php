<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producthexohm extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'order',
        'image',
    ];
}
