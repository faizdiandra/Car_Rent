<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPeminjaman;
class Peminjaman extends Controller
{
    public function index()
    {
        $data['datas']=ModelPeminjaman::join('mobil','mobil.id_mobil','peminjaman.id_mobil')->join('user','user.id_user','peminjaman.id_user')->get();
        return view("Peminjaman",$data);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_mobil' => 'required',
            'id_user' => 'required',
            // 'fotoktp' => 'required',
        ]);

        $data = new ModelPeminjaman();
        $data->id_mobil = $request->id_mobil;
        $data->id_user = $request->id_user;
        $data->save();

        return redirect()->action('Peminjaman@index')->with('alert_message', 'Berhasil menambah data!');
    }
    public function create()
    {
        return view('Peminjaman_create');
    }
    public function hapus($id)
    {
        ModelPeminjaman::where('id_peminjaman', $id)->delete();
        return redirect()->action('Peminjaman@index')->with('alert_message', 'Berhasil');
    }
    public function show($id)
    {
        $data = ModelUser::all();
        return view('peminjaman_detail', compact('data'));
    }
}
