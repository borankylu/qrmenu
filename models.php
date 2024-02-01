<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Yemek extends Model
{
    protected $fillable = [
        'isim',
        'resim',
        'fiyat',
        'kategori',
    ];
}
