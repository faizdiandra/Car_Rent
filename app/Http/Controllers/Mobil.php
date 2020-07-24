<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelMobil;
class Mobil extends Controller
{
    public function index(){
        $data['datas']=ModelMobil::all();
        return view("Mobil",$data);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'jenis_mobil' => 'required',
            'plat_mobil' => 'required',
            'warna' => 'required',
            'harga_sewa' => 'required',
            'fotomobil' => 'required',
        ]);

        $data = new ModelMobil();
        $data->jenis_mobil = $request->jenis_mobil;
        $data->plat_mobil = $request->plat_mobil;
        $data->warna = $request->warna;
        $data->harga_sewa = $request->harga_sewa;
        $data->fotomobil = $request->fotomobil;
        $data->save();

        return redirect()->action('Mobil@index')->with('alert_message', 'Berhasil menambah data!');
    }
    public function create()
    {
        return view('mobil_create');
    }
    public function edit($id)
    {
        $data = ModelMobil::where('id_mobil', $id)->get();
        return view('mobil_edit', compact('data'));
    }

    public function update(Request $request)
    {
        ModelMobil::where('id_mobil', $request->id)->update([
            'jenis_mobil' => $request->jenis_mobil,
            'plat_mobil' => $request->plat_mobil,
            'warna' => $request->warna,
            'harga_sewa' => $request->harga_sewa,
            'fotomobil' => $request->fotomobil,   
        ]);
        if($request->hasFile('fotomobil')){
            $request->file('fotomobil')->move('images/', $request->file('fotomobil')->getClientOriginalName());
            $data->fotomobil = $request->file('fotomobil')->getClientOriginalNama();
            $data->save();
        }
            
        return redirect()->action('Mobil@index')->with('alert_message', 'Berhasil mengubah data!');
    }
    public function hapus($id)
    {
        ModelMobil::where('id_mobil', $id)->delete();
        return redirect()->action('Mobil@index')->with('alert_message', 'Berhasil');
    }
    public function show($id)
    {
        $data = ModelMobil::where('id_mobil', $id)->get();
        return view('mobil_detail', compact('data'));
    }
}
