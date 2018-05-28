<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penggunaan;
use App\Pelanggan;
use Alert;
use App\Tarif;

class PenggunaanController extends Controller
{
   public function index(){
		$penggunaan  = Penggunaan::all();
		$pelanggan  = Pelanggan::all();
		$getTarif = Tarif::all();
		return view('penggunaan.index', ['penggunaan' => $penggunaan, 'pelanggan' => $pelanggan, 'tarif' => $getTarif]);
	}
	
	public function save(Request $r)
	{
		$penggunaan =  new Penggunaan;
		$penggunaan->id_pelanggan = $r->input('id_pelanggan');
		$penggunaan->bulan = $r->input('bulan');
		$penggunaan->tahun = $r->input('tahun');
		$penggunaan->meterawal = $r->input('meterawal');
		$penggunaan->meterakhir = $r->input('meterakhir');
		$penggunaan->save();

		Alert::success('Berhasil menambah data Penggunaan.', 'Success!');
		return redirect(url('penggunaan'));
	}

	public function edit($id)
	{
		$penggunaan = Penggunaan::find($id);

    	return view('penggunaan.edit')->with('pengunaan',$penggunaan);
	}

	public function update(Request $r)
	{
		$penggunaan = Penggunaan::find($r->input('id'));
		$penggunaan->bulan = $r->bulan;
		$penggunaan->tahun = $r->tahun;
		$penggunaan->meterawal = $r->meterawal;
		$penggunaan->meterakhir = $r->meterakhir;
    	$penggunaan->save();

    	Alert::info('Berhasil mengubah data Penggunaan.', 'Success!');
    	return redirect(url('penggunaan'));
	}

	public function delete($id)
	{
		$penggunaan = Penggunaan::find($id);
    	$penggunaan->delete();

    	Alert::success('Berhasil menghapus data Penggunaan.', 'Success!');
    	return redirect(url('penggunaan'));
	}
}
