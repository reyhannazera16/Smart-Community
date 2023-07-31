<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Desa;

class DesaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    $desa = [
      [
        'nama_desa' => 'atang senjaya',
        'indeks' => '26.25',
        'potensi' => 'Potensial',
        'fasilitas' => '4',
        'umkm' => '35',
        'medis' => '2',
        'keamanan' => '1',
        'pembangunan' => '16',
        'penataan' => '14',
        'pengembangan' => '18',
        'transportasi' => '3',
        'bank' => '2',
        'internet' => '14',
      ],
      [
        'nama_desa' => 'bojong',
        'indeks' => '21.15',
        'potensi' => 'Potensial',
        'fasilitas' => '3',
        'umkm' => '21',
        'medis' => '2',
        'keamanan' => '1',
        'pembangunan' => '17',
        'penataan' => '18',
        'pengembangan' => '15',
        'transportasi' => '1',
        'bank' => '1',
        'internet' => '16',
      ],
      [
        'nama_desa' => 'jampang',
        'indeks' => '21.25',
        'potensi' => 'Potensial',
        'fasilitas' => '7',
        'umkm' => '24',
        'medis' => '3',
        'keamanan' => '2',
        'pembangunan' => '4',
        'penataan' => '4',
        'pengembangan' => '4',
        'transportasi' => '2',
        'bank' => '3',
        'internet' => '4',
      ],
      [
        'nama_desa' => 'kemang',
        'indeks' => '32.5',
        'potensi' => 'Potensial',
        'fasilitas' => '18',
        'umkm' => '29',
        'medis' => '3',
        'keamanan' => '2',
        'pembangunan' => '24',
        'penataan' => '26',
        'pengembangan' => '26',
        'transportasi' => '3',
        'bank' => '1',
        'internet' => '26',
      ],
      [
        'nama_desa' => 'pabuaran',
        'indeks' => '17.5',
        'potensi' => 'Potensial',
        'fasilitas' => '2',
        'umkm' => '29',
        'medis' => '1',
        'keamanan' => '1',
        'pembangunan' => '0',
        'penataan' => '0',
        'pengembangan' => '0',
        'transportasi' => '2',
        'bank' => '1',
        'internet' => '0',
      ],
      [
        'nama_desa' => 'parakan jaya',
        'indeks' => '16.25',
        'potensi' => 'Potensial',
        'fasilitas' => '5',
        'umkm' => '25',
        'medis' => '2',
        'keamanan' => '1',
        'pembangunan' => '1',
        'penataan' => '1',
        'pengembangan' => '1',
        'transportasi' => '1',
        'bank' => '2',
        'internet' => '1',
      ],
      [
        'nama_desa' => 'pondok udik',
        'indeks' => '20',
        'potensi' => 'Potensial',
        'fasilitas' => '5',
        'umkm' => '26',
        'medis' => '2',
        'keamanan' => '2',
        'pembangunan' => '1',
        'penataan' => '1',
        'pengembangan' => '1',
        'transportasi' => '2',
        'bank' => '2',
        'internet' => '1',
      ],

      [
        'nama_desa' => 'semplak',
        'indeks' => '16.25',
        'potensi' => 'Potensial',
        'fasilitas' => '3',
        'umkm' => '13',
        'medis' => '1',
        'keamanan' => '1',
        'pembangunan' => '3',
        'penataan' => '3',
        'pengembangan' => '2',
        'transportasi' => '3',
        'bank' => '1',
        'internet' => '3',
      ],
      [
        'nama_desa' => 'tegal',
        'indeks' => '28.75',
        'potensi' => 'Potensial',
        'fasilitas' => '5',
        'umkm' => '47',
        'medis' => '1',
        'keamanan' => '1',
        'pembangunan' => '18',
        'penataan' => '18',
        'pengembangan' => '21',
        'transportasi' => '3',
        'bank' => '1',
        'internet' => '20',
      ],
      // Tambahkan data pengguna lainnya di sini
    ];
    foreach ($desa as $ds) {
      Desa::create($ds);
    }
  }
}
