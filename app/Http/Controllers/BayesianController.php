<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Bayesian;
use App\Models\bobot;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BayesianController extends Controller
{
  public function index()
  {

    $Bayesian = Bayesian::all();
    // Menggunakan Eloquent ORM
    $data = Bayesian::pluck('D1');
    $data1 = Bayesian::pluck('D2');
    $data2 = Bayesian::pluck('D3');
    $data3 = Bayesian::pluck('D4');
    $data4 = Bayesian::pluck('D5');
    $data5 = Bayesian::pluck('D6');
    $data6 = Bayesian::pluck('D7');
    $data7 = Bayesian::pluck('D8');
    $data8 = Bayesian::pluck('D9');
    $b1 = bobot::pluck('b1');
    $b2 = bobot::pluck('b2');
    $b3 = bobot::pluck('b3');
    $b4 = bobot::pluck('b4');
    $b5 = bobot::pluck('b7');


    // Atau menggunakan Query Builder
    // $data = DB::table('data_angka')->pluck('nilai');
    //D1


    ///BOBOT 13/////
    $total = 0;
    foreach ($b1 as $b1s) {
      foreach ($data as $nilai) {
        $total += ($nilai * $b1s);
      }


      //D2
      $total1 = 0;
      foreach ($data1 as $nilai1) {
        $total1 += ($nilai1 * $b1s);
      }

      //D3
      $total2 = 0;
      foreach ($data2 as $nilai2) {
        $total2 += ($nilai2 * $b1s);
      }

      //D4
      $total3 = 0;
      foreach ($data3 as $nilai3) {
        $total3 += ($nilai3 * $b1s);
      }


      //D5
      $total4 = 0;
      foreach ($data4 as $nilai4) {
        $total4 += ($nilai4 * $b1s);
      }

      //D6
      $total5 = 0;
      foreach ($data5 as $nilai5) {
        $total5 += ($nilai5 * $b1s);
      }

      //D7
      $total6 = 0;
      foreach ($data6 as $nilai6) {
        $total6 += ($nilai6 * $b1s);
      }


      //D8
      $total7 = 0;
      foreach ($data7 as $nilai7) {
        $total7 += ($nilai7 * $b1s);
      }

      //D9
      $total8 = 0;
      foreach ($data8 as $nilai8) {
        $total8 += ($nilai8 * $b1s);
      }
    }



    ///BOBOT 16/////
    $totala = 0;
    foreach ($b2 as $b2) {
      foreach ($data as $nilai) {
        $totala += ($nilai * $b2);
      }


      //D2
      $totalb = 0;
      foreach ($data1 as $nilai1) {
        $totalb += ($nilai1 * $b2);
      }

      //D3
      $totalc = 0;
      foreach ($data2 as $nilai2) {
        $totalc += ($nilai2 * $b2);
      }

      //D4
      $totald = 0;
      foreach ($data3 as $nilai3) {
        $totald += ($nilai3 * $b2);
      }


      //D5
      $totalf = 0;
      foreach ($data4 as $nilai4) {
        $totalf += ($nilai4 * $b2);
      }

      //D6
      $totalg = 0;
      foreach ($data5 as $nilai5) {
        $totalg += ($nilai5 * $b2);
      }

      //D7
      $totalh = 0;
      foreach ($data6 as $nilai6) {
        $totalh += ($nilai6 * $b2);
      }


      //D8
      $totali = 0;
      foreach ($data7 as $nilai7) {
        $totali += ($nilai7 * $b2);
      }

      //D9
      $totalj = 0;
      foreach ($data8 as $nilai8) {
        $totalj += ($nilai8 * $b2);
      }

      ////akhir bobot 0.16///



    }

    ///BOBOT 11/////
    $totala1 = 0;
    foreach ($b3 as $b3) {
      foreach ($data as $nilai) {
        $totala1 += ($nilai * $b3);
      }


      //D2
      $totalb1 = 0;
      foreach ($data1 as $nilai1) {
        $totalb1 += ($nilai1 * $b3);
      }

      //D3
      $totalc1 = 0;
      foreach ($data2 as $nilai2) {
        $totalc1 += ($nilai2 * $b3);
      }

      //D4
      $totald1 = 0;
      foreach ($data3 as $nilai3) {
        $totald1 += ($nilai3 * $b3);
      }


      //D5
      $totalf1 = 0;
      foreach ($data4 as $nilai4) {
        $totalf1 += ($nilai4 * $b3);
      }

      //D6
      $totalg1 = 0;
      foreach ($data5 as $nilai5) {
        $totalg1 += ($nilai5 * $b3);
      }

      //D7
      $totalh1 = 0;
      foreach ($data6 as $nilai6) {
        $totalh1 += ($nilai6 * $b3);
      }


      //D8
      $totali1 = 0;
      foreach ($data7 as $nilai7) {
        $totali1 += ($nilai7 * $b3);
      }

      //D9
      $totalj1 = 0;
      foreach ($data8 as $nilai8) {
        $totalj1 += ($nilai8 * $b3);
      }

      ////akhir bobot 0.11///



    }


    //0.09//
    $totala2 = 0;
    foreach ($b4 as $b4) {
      foreach ($data as $nilai) {
        $totala2 += ($nilai * $b4);
      }


      //D2
      $totalb2 = 0;
      foreach ($data1 as $nilai1) {
        $totalb2 += ($nilai1 * $b4);
      }

      //D3
      $totalc2 = 0;
      foreach ($data2 as $nilai2) {
        $totalc2 += ($nilai2 * $b4);
      }

      //D4
      $totald2 = 0;
      foreach ($data3 as $nilai3) {
        $totald2 += ($nilai3 * $b4);
      }


      //D5
      $totalf2 = 0;
      foreach ($data4 as $nilai4) {
        $totalf2 += ($nilai4 * $b4);
      }

      //D6
      $totalg2 = 0;
      foreach ($data5 as $nilai5) {
        $totalg2 += ($nilai5 * $b4);
      }

      //D7
      $totalh2 = 0;
      foreach ($data6 as $nilai6) {
        $totalh2 += ($nilai6 * $b4);
      }


      //D8
      $totali2 = 0;
      foreach ($data7 as $nilai7) {
        $totali2 += ($nilai7 * $b4);
      }

      //D9
      $totalj2 = 0;
      foreach ($data8 as $nilai8) {
        $totalj2 += ($nilai8 * $b4);
      }

      ////akhir bobot 0.11///



    }

    //0.1//
    $totala3 = 0;
    foreach ($b5 as $b5) {
      foreach ($data as $nilai) {
        $totala3 += ($nilai * $b5);
      }


      //D2
      $totalb3 = 0;
      foreach ($data1 as $nilai1) {
        $totalb3 += ($nilai1 * $b5);
      }

      //D3
      $totalc3 = 0;
      foreach ($data2 as $nilai2) {
        $totalc3 += ($nilai2 * $b5);
      }

      //D4
      $totald3 = 0;
      foreach ($data3 as $nilai3) {
        $totald3 += ($nilai3 * $b5);
      }


      //D5
      $totalf3 = 0;
      foreach ($data4 as $nilai4) {
        $totalf3 += ($nilai4 * $b5);
      }

      //D6
      $totalg3 = 0;
      foreach ($data5 as $nilai5) {
        $totalg3 += ($nilai5 * $b5);
      }

      //D7
      $totalh3 = 0;
      foreach ($data6 as $nilai6) {
        $totalh3 += ($nilai6 * $b5);
      }


      //D8
      $totali3 = 0;
      foreach ($data7 as $nilai7) {
        $totali3 += ($nilai7 * $b5);
      }

      //D9
      $totalj3 = 0;
      foreach ($data8 as $nilai8) {
        $totalj3 += ($nilai8 * $b5);
      }

      ////akhir bobot 0.11///



    }



    $totalALL1 = $total * (4) + $totala + $totala1 * (3) + $totala2 + $totala3;
    $totalALL2 = $total1 * (4) + $totalb + $totalb1 * (3) + $totalb2 + $totalb3;
    $totalALL3 = $total2 * (4) + $totalc + $totalc1 * (3) + $totalc2 + $totalc3;
    $totalALL4 = $total3 * (4) + $totald + $totald1 * (3) + $totald2 + $totald3;
    $totalALL5 = $total4 * (4) + $totalf + $totalf1 * (3) + $totalf2 + $totalf3;
    $totalALL6 = $total5 * (4) + $totalg + $totalg1 * (3) + $totalg2 + $totalg3;
    $totalALL7 = $total6 * (4) + $totalh + $totalh1 * (3) + $totalh2 + $totalh3;
    $totalALL8 = $total7 * (4) + $totali + $totali1 * (3) + $totali2 + $totali3;
    $totalALL9 = $total8 * (4) + $totalj + $totalj1 * (3) + $totalj2 + $totalj3;

    $data = Bayesian::find(1);
    $data2 = Bayesian::find(2);
    $data3 = Bayesian::find(3);
    $data4 = Bayesian::find(4);
    $data5 = Bayesian::find(5);
    $data6 = Bayesian::find(6);
    $data7 = Bayesian::find(7);
    $data8 = Bayesian::find(8);
    $data9 = Bayesian::find(9);

    // Cek apakah data dengan 'id' yang diberikan ditemukan
    if ($data) {

      // Dan set nilai-nilai variabel lainnya sesuai kebutuhan

      // Lakukan pembaruan pada kolom-kolom yang diinginkan
      $data->update([
        'TN' => $totalALL1,
        // Sesuaikan nama_kolom_total1, nama_kolom_total2, dan seterusnya dengan nama kolom yang sesuai di tabel
      ]);
    }
    //UPDATE DATA2
    if ($data2) {
      $data2->update([
        'TN' => $totalALL2,
        // Sesuaikan nama
      ]);
    }


    //UPDATE DATA3
    if ($data3) {
      $data3->update([
        'TN' => $totalALL3,
        // Sesuaikan nama
      ]);
    }
    //UPDATE DATA4
    if ($data4) {
      $data4->update([
        'TN' => $totalALL4,
        // Sesuaikan nama
      ]);
    }

    //UPDATE DATA 5
    if ($data5) {
      $data5->update([
        'TN' => $totalALL5,
        // Sesuaikan nama
      ]);
    }


    if ($data6) {
      $data6->update([
        'TN' => $totalALL6,
        // Sesuaikan nama
      ]);
    }

    if ($data7) {
      $data7->update([
        'TN' => $totalALL7,
        // Sesuaikan nama
      ]);
    }


    if ($data8) {
      $data8->update([
        'TN' => $totalALL8,
        // Sesuaikan nama
      ]);
    }


    if ($data9) {
      $data9->update([
        'TN' => $totalALL9,
        // Sesuaikan nama
      ]);
    }





    $nilaiMin = min($totalALL1, $totalALL2, $totalALL3, $totalALL4, $totalALL5, $totalALL6, $totalALL7, $totalALL8, $totalALL9);

    $nilaiMax = max($totalALL1, $totalALL2, $totalALL3, $totalALL4, $totalALL5, $totalALL6, $totalALL7, $totalALL8, $totalALL9);

    $nilaiRataRata = ($totalALL1 + $totalALL2 + $totalALL3 + $totalALL4 + $totalALL5 + $totalALL6 + $totalALL7 + $totalALL8 + $totalALL9) / 9;

    // Menentukan potensi berdasarkan nilai rata-rata


    $jangkauan = $nilaiMax - $nilaiMin;
    $interval = $jangkauan / 3;

    $range = $jangkauan - $interval;


    $scores = Bayesian::orderBy('TN', 'desc')->get();
    $prevScore = null;
    $rank = 1;

    foreach ($scores as $index => $scoreData) {
      $score = $scoreData->TN;

      // Cek apakah nilai saat ini sama dengan nilai sebelumnya
      // Jika ya, maka peringkat tetap sama dengan peringkat sebelumnya
      if ($prevScore !== null && $score === $prevScore) {
        $rank--;
      }

      // Tampilkan atau gunakan peringkat sesuai kebutuhan


      // Simpan peringkat ke dalam database
      $scoreData->peringkat = $rank;
      $scoreData->save(); // Simpan data menggunakan instance model Score, bukan stdClass

      // Atur nilai sebelumnya untuk iterasi selanjutnya
      $prevScore = $score;
      $rank++;
    }

    $klasifikasi = Bayesian::select('id', 'peringkat')->get();

    foreach ($klasifikasi as $kelas) {
      $keterangan = '';

      if ($kelas->peringkat >= 1 && $kelas->peringkat <= 3) {
        $keterangan = 'sangat potensial';
      } elseif ($kelas->peringkat >= 4 && $kelas->peringkat <= 6) {
        $keterangan = 'potensial';
      } elseif ($kelas->peringkat >= 7 && $kelas->peringkat <= 8) {
        $keterangan = 'cukup potensial';
      } else {
        $keterangan = 'Tidak Diketahui';
      }

      // Simpan keterangan ke dalam kolom "keterangan" di database
      Bayesian::where('id', $kelas->id)->update(['keterangan' => $keterangan]);
    }
    return view('content.isi.svm', [
      'nilaiD1' => $total, 'nilai1D1' => $total1, 'nilai2D1' => $total2, 'nilai3D1' => $total3, 'nilai4D1' => $total4, 'nilai5D1' => $total5, 'nilai6D1' => $total6, 'nilai7D1' => $total7, 'nilai8D1' => $total8, 'nilaiaD1' => $totala, 'nilaibD1' => $totalb, 'nilaicD1' => $totalc, 'nilaidD1' => $totald, 'nilaifD1' => $totalf, 'nilaigD1' => $totalg, 'nilaihD1' => $totalh, 'nilaiiD1' => $totali, 'nilaijD1' => $totalj,
      'nilaia1D1' => $totala1, 'nilaib1D1' => $totalb1, 'nilaic1D1' => $totalc1, 'nilaid1D1' => $totald1, 'nilaif1D1' => $totalf1, 'nilaig1D1' => $totalg1, 'nilaih1D1' => $totalh1, 'nilaii1D1' => $totali1, 'nilaij1D1' => $totalj1,

      'nilaia2D1' => $totala2, 'nilaib2D1' => $totalb2, 'nilaic2D1' => $totalc2, 'nilaid2D1' => $totald2, 'nilaif2D1' => $totalf2, 'nilaig2D1' => $totalg2, 'nilaih2D1' => $totalh2, 'nilaii2D1' => $totali2, 'nilaij2D1' => $totalj2,

      'nilaia3D1' => $totala3, 'nilaib3D1' => $totalb3, 'nilaic3D1' => $totalc3, 'nilaid3D1' => $totald3, 'nilaif3D1' => $totalf3, 'nilaig3D1' => $totalg3, 'nilaih3D1' => $totalh3, 'nilaii3D1' => $totali3, 'nilaij3D1' => $totalj3,

      'TOTAL' => $totalALL1,

      'TOTAL1' => $totalALL2,
      'TOTAL2' => $totalALL3,
      'TOTAL3' => $totalALL4,
      'TOTAL4' => $totalALL5,
      'TOTAL5' => $totalALL6,
      'TOTAL6' => $totalALL7,
      'TOTAL7' => $totalALL8,
      'TOTAL8' => $totalALL9,
      'Min' => $nilaiMin,
      'Max' => $nilaiMax,
      'jangkauan1' => $jangkauan,
      'inv' => $interval,
      'ranges' => $range,



    ], compact('Bayesian', 'scores'));
  }
}
