<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(User::class, 'user');
    }

    public function komentars()
    {
        return $this->hasMany(KomentarProduk::class, 'produk', 'id');
    }
}
