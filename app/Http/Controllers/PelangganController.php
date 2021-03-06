<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pelanggan;
use \App\Penggunaan;
use \App\Tarif;
use Alert;

class PelangganController extends Controller
{
    public function index(){
    	$pel = Pelanggan::paginate(10);
        $gettarif = Tarif::all();
    	return view('pelanggan.index')->with([
            'pel' => $pel,
            'tarif' => $gettarif
        ]);
    }
    
    public function save(Request $r){
    	$pel = new Pelanggan;
    	$pel->nometer = $r->input('nometer');
    	$pel->nama = $r->input('nama');
    	$pel->alamat = $r->input('alamat');
    	$pel->kodetarif = $r->input('kodetarif');
    	$pel->save();

        Alert::success('Berhasil menambah data Pelanggan.', 'Success!');
    	return redirect(url('pelanggan'));
    }
    public function edit($id){
        $pel = Pelanggan::find($id);
        $tarif = Tarif::get();
        return view('pelanggan.edit')->with('pel',$pel)->with('tarif',$tarif);
    }
    public function update(Request $r){
    	$pel = Pelanggan::find($r->input('id'));
    	$pel->nometer = $r->input('nometer');
    	$pel->nama = $r->input('nama');
    	$pel->alamat = $r->input('alamat');
    	$pel->kodetarif = $r->input('kodetarif');
    	$pel->save();

        Alert::info('Berhasil mengubah data Pelanggan.', 'Success!');
    	return redirect(url('pelanggan'));
    }
    public function delete($id){
    	$pel = Pelanggan::find($id);
    	$pel->delete();

        Alert::success('Berhasil menghapus data Pelanggan.', 'Success!');
    	return redirect(url('pelanggan'));
    }
}
