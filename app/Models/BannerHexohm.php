<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerHexohm extends Model
{
    use HasFactory;
    protected $fillable = ['urutan', 'gambar'];
}
