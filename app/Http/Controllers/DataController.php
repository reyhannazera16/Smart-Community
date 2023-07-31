<?php

namespace App\Http\Controllers;

use App\Models\Bayesian;
use Illuminate\Http\Request;

class DataController extends Controller
{
  public function index()
  {
    $Bayesian = Bayesian::all();
    return view('content.isi.data', compact('Bayesian'));
  }

  public function edit(Bayesian $Bayesian, $id)
  {
    $Bayesian = Bayesian::all();
    $Bayesian = Bayesian::findOrFail($id);
    return view('content.isi.edit_data', compact('Bayesian'));
  }

  public function update(Request $request, $id)
  {
    $Bayesian = Bayesian::find($id);
    $Bayesian->D1 = $request->input('D1');
    $Bayesian->D2 = $request->input('D2');
    $Bayesian->D3 = $request->input('D3');
    $Bayesian->D4 = $request->input('D4');
    $Bayesian->D5 = $request->input('D5');
    $Bayesian->D6 = $request->input('D6');
    $Bayesian->D7 = $request->input('D7');
    $Bayesian->D8 = $request->input('D8');
    $Bayesian->D9 = $request->input('D9');

    $Bayesian->save();
    if ($Bayesian) {
      return redirect()
        ->route('data.index')
        ->with([
          'success' => 'Bayesian berhasil di edit'
        ]);
    } else {
      return redirect()
        ->route('data.index')
        ->with([
          'error' => 'Silahkan coba lagi'
        ]);
    }
  }

  public function destroy($id)
  {
    $Bayesian = Bayesian::findOrFail($id);
    $Bayesian->delete();

    if ($Bayesian) {
      return redirect()
        ->route('data.index')
        ->with([
          'success' => 'Data berhasil dihapus'
        ]);
    } else {
      return redirect()
        ->route('data.index')
        ->with([
          'error' => 'Silahkan coba lagi'
        ]);
    }
  }
}
