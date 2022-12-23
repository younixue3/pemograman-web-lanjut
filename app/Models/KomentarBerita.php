<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarBerita extends Model
{
    use HasFactory;
    protected $table = 'komentar_berita';
    protected $guarded = [];

    public function komentator()
    {
        return $this->belongsTo(User::class, 'user');
    }
}
