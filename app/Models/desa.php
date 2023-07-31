<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class desa extends Model
{
  use HasFactory;
  protected $fillable = [
    'nama_desa',
    'indeks',
    'potensi',
    'fasilitas',
    'umkm',
    'medis',
    'keamanan',
    'pembangunan',
    'penataan',
    'pengembangan',
    'transportasi',
    'bank',
    'internet',
    'peringkat'
  ];
}
