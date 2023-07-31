<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bayesian;

class BayesianSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $Bayesian = [
      [
        'desa' => 'X1',
        'D1' => '4',
        'D2' => '3',
        'D3' => '2',
        'D4' => '1',
        'D5' => '1',
        'D6' => '1',
        'D7' => '1',
        'D8' => '3',
        'D9' => '2',

        'Bobot' => '0.13',

      ],
      [
        'desa' => 'X2',
        'D1' => '3',
        'D2' => '2',
        'D3' => '2',
        'D4' => '1',
        'D5' => '1',
        'D6' => '1',
        'D7' => '1',
        'D8' => '1',
        'D9' => '1',

        'Bobot' => '0.11',
      ],
      [
        'desa' => 'X3',
        'D1' => '7',
        'D2' => '2',
        'D3' => '3',
        'D4' => '2',
        'D5' => '4',
        'D6' => '4',
        'D7' => '4',
        'D8' => '2',
        'D9' => '3',

        'Bobot' => '0.11',
      ],
      [
        'desa' => 'X4',
        'D1' => '1',
        'D2' => '2',
        'D3' => '3',
        'D4' => '2',
        'D5' => '2',
        'D6' => '2',
        'D7' => '2',
        'D8' => '3',
        'D9' => '1',

        'Bobot' => '0.09',
      ],
      [
        'desa' => 'X5',
        'D1' => '2',
        'D2' => '2',
        'D3' => '1',
        'D4' => '1',
        'D5' => '0',
        'D6' => '0',
        'D7' => '0',
        'D8' => '2',
        'D9' => '1',

        'Bobot' => '0.13',
      ],
      [
        'desa' => 'X6',
        'D1' => '5',
        'D2' => '2',
        'D3' => '2',
        'D4' => '1',
        'D5' => '1',
        'D6' => '1',
        'D7' => '1',
        'D8' => '1',
        'D9' => '2',

        'Bobot' => '0.13',
      ],
      [
        'desa' => 'X7',
        'D1' => '5',
        'D2' => '2',
        'D3' => '2',
        'D4' => '2',
        'D5' => '1',
        'D6' => '1',
        'D7' => '1',
        'D8' => '2',
        'D9' => '2',

        'Bobot' => '0.1',
      ],

      [
        'desa' => 'X8',
        'D1' => '3',
        'D2' => '1',
        'D3' => '1',
        'D4' => '1',
        'D5' => '3',
        'D6' => '3',
        'D7' => '2',
        'D8' => '3',
        'D9' => '1',

        'Bobot' => '0.13',
      ],
      [
        'desa' => 'X9',
        'D1' => '5',
        'D2' => '4',
        'D3' => '1',
        'D4' => '1',
        'D5' => '1',
        'D6' => '1',
        'D7' => '2',
        'D8' => '3',
        'D9' => '1',

        'Bobot' => '0.11',

      ],
      [
        'desa' => 'X10',
        'D1' => '5',
        'D2' => '4',
        'D3' => '1',
        'D4' => '1',
        'D5' => '1',
        'D6' => '1',
        'D7' => '2',
        'D8' => '3',
        'D9' => '1',

        'Bobot' => '0.11',

      ],

      // Tambahkan data pengguna lainnya di sini
    ];
    foreach ($Bayesian as $bs) {
      Bayesian::create($bs);
    }
  }
}
