<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    protected $fillable = [
        'nama_lapangan', 'kategori', 'harga_per_jam', 'lokasi', 'deskripsi'
    ];
}