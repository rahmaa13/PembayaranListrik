<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use DB;
use Excel;

class TarifController extends Controller
{
  public function index(){
   $tarif = \App\Tarif::get();
   return view('tarif.index', ['tarif' => $tarif]); 
 }

 public function add(){
   return view('tarif.add');
 }

 public function save(Request $r)
 {
  $tarif =  new \App\Tarif;
  $tarif->id = $r->id;
  $tarif->kodetarif = $r->kodetarif;
  $tarif->daya = $r->daya;
  $tarif->tarifperkwh = $r->tarifperkwh;
  $tarif->save();

  Alert::success('Berhasil menambahkan data Tarif baru.', 'Success!');
  return redirect(url('tarif'));
}

public function edit($id)
{
  $tarif = \App\Tarif::find($id);
  return view('tarif.edit', ['tarif' => $tarif]);  
}

public function update(Request $request)
{
  $b = \App\Tarif::find($request->input('id'));
  $b->kodetarif = $request->kodetarif;
  $b->daya = $request->daya;
  $b->tarifperkwh = $request->tarifperkwh;      
  $b->save();

  Alert::info('Berhasil mengubah data Tarif.', 'Success!');
  return redirect(url('tarif'));
}

public function delete($id)
{
  $tarif = \App\Tarif::find($id);
  $tarif->delete();

  Alert::success('Berhasil menghapus data Tarif.', 'Success!');
  return redirect('tarif');
}

  public function importExcel()

  {

    if(Input::hasFile('import_file')){

      $path = Tarif::file('import_file')->getRealPath();

      $data = Excel::load($path, function($reader) {

      })->get();

      if(!empty($data) && $data->count()){

        foreach ($data as $key => $value) {

          $insert[] = ['kodetarif' => $value->kodetarif, 'daya' => $value->daya, 'tarifperkwh' => $value->tarifperkwh];

        }

        if(!empty($insert)){

          DB::table('tarifs')->insert($insert);

          dd('Insert Record successfully.');

        }

      }

    }

    return back();

  }

}
