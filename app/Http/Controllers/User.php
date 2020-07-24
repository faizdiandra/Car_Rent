<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;
class User extends Controller
{
    public function index(){
        $data['datas']=ModelUser::all();
        return view("User",$data);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_user' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
            'password' => 'required',
            // 'fotoktp' => 'required',
        ]);

        $data = new ModelUser();
        $data->nama_user = $request->nama_user;
        $data->email = $request->email;
        $data->nohp = $request->nohp;
        $data->alamat = $request->alamat;
        $data->password = $request->password;
        $data->fotoktp = $request->fotoktp;
        $data->save();

        return redirect()->action('pagecontroller@home')->with('alert_message', 'Berhasil menambah data!');
    }
    public function create()
    {
        return view('user_create');
    }
    public function edit($id)
    {
        $data = ModelUser::where('id_user', $id)->get();
        return view('user_edit', compact('data'));
    }

    public function update(Request $request)
    {
        ModelUser::where('id_user', $request->id)->update([
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'password' => $request->password,
            'fotoktp' => $request->fotoktp,   
        ]);
        if($request->hasFile('fotoktp')){
            $request->file('fotoktp')->move('images/', $request->file('fotoktp')->getClientOriginalName());
            $data->fotoktp = $request->file('fotoktp')->getClientOriginalName();
            $data->save();
        }
            
        return redirect()->action('User@index')->with('alert_message', 'Berhasil mengubah data!');
    }
    public function hapus($id)
    {
        ModelUser::where('id_user', $id)->delete();
        return redirect()->action('User@index')->with('alert_message', 'Berhasil');
    }
    public function show($id)
    {
        $data = ModelUser::where('id_user', $id)->get();
        return view('user_detail', compact('data'));
    }
}

