<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\desa;
use App\Models\Bayesian;
use App\Http\Controllers\Controller;

class DesaController extends Controller
{
  public function index()
  {
    $desa = desa::all();
    // Ambil data yang dibutuhkan dari database
    $data = Bayesian::all();

    // Inisialisasi variabel untuk menyimpan geojson

    // Mendapatkan data dari tabel "bayesian"




    $filePath = public_path('geojson/ADM.geojson');
    // Baca file GeoJSON
    $fileContents = file_get_contents($filePath);
    $geoJson = json_decode($fileContents, true);
    // Buat feature geojson untuk setiap data dan simpan warna ke dalam properties
    // Ubah isi file GeoJSON sesuai dengan data dari database



    foreach ($data as $item) {
      // Cari fitur GeoJSON berdasarkan kondisi tertentu, misalnya menggunakan NAMOBJ sebagai identifikasi
      foreach ($geoJson['features'] as &$feature) {
        if ($feature['properties']['NAMOBJ'] == $item->des) {
          // Ubah nilai properti yang diinginkan
          if ($item->keterangan == 'cukup potensial') {
            $feature['properties']['Warna'] = '#b7fbb8';
          } else if ($item->keterangan == 'potensial') {
            $feature['properties']['Warna'] = '#ffeabd';
          } else {
            $feature['properties']['Warna'] = '#feff73';
          }
          break;
        }
      }
    }


    // Simpan kembali isi file GeoJSON yang telah diubah
    file_put_contents($filePath, json_encode($geoJson));

    // Tambahkan feature ke dalam array features pada geojson



    return view('content.isi.peta', compact('desa', 'data'));
  }
}
