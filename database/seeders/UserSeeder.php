<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $User = [
      [
        'name' => 'admin',
        'username' => 'admin',
        'password' => Hash::make('123123123'),

      ]
    ];
    foreach ($User as $us) {
      User::create($us);
    }
  }
}
