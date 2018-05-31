<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Saran;
use Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    
    //  public function pagenotfound()
    //  {
    //      return view('503');
    // }
    public function welcome(){
        $total = \App\Tagihan::count();
        $lunas = \App\Tagihan::where('status', 2)->count();
        $data['selesaitagihan'] = \App\Tagihan::where('status', 2)->count();
        $data['getpelanggan'] = \App\Pelanggan::paginate(5);
        if ($total >= 1) {
            $data['presentase']    = ($lunas / $total) * 100;
        }
        else {
            $data['presentase']    = 0;
        }
        return view('welcome')->with($data);
    }
    
    public function index()
    {
        return view('home');
    }

    public function user(){
        $user = User::All();
        return view('user.index')->with('user',$user);
    }

    public function add(){
        return view('user.add');
    }

    public function save(Request $r){
        $user = new User;
        $user->name = $r->input('name');
        $user->email = $r->input('email');
        $user->password = bcrypt($r->input('password'));
        $user->save();

        Alert::success('Berhasil menambah data User.', 'Success!');
        return redirect(url('user'));
    }

    public function edit($id){
        $user = User::find($id);
        return view('user.edit')->with('user',$user);
    }

    public function update(Request $r)
    {
        $user = User::find($r->input('id'));
        $user->name = $r->input('name');
        $user->email = $r->input('email');
        $user->password = bcrypt($r->input('password'));
        $user->save();

        Alert::info('Berhasil mengubah data User.', 'Success!');
        return redirect(url('user'));
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        Alert::success('Berhasil menghapus data User.', 'Success!');
        return redirect(url('user'));
    }

    public function saveSaran(Request $r) {
        dd($r->input('name'));
        $new = new Saran;
        $id = Auth::user() && Auth::user()->id;
        $new->user_id = $id;
        $new->email = $r->input('email');
        $new->phone = $r->input('phone');
        $new->message = $r->input('message');

        $new->save();
    }
}
