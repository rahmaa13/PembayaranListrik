<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

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

}
