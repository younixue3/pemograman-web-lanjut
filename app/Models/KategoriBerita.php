<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;
    protected $table = 'berita_kategori';

    public function kategori_berita()
    {
        return $this->belongsTo(Kategori::class, 'kategori');
    }
}
