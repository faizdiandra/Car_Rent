<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;
use Session;
class login extends Controller
{
    public function cek(Request $req)
    {
        $this->validate($req,[
            'nama_user'=>'required',
            'password'=>'required'
        ]);
        $proses=ModelUser::where('nama_user', $req->nama_user)->where('password', $req->password)->first();
        if($proses){
            Session::put('id_user', $proses->id_user);
            Session::put('nama_user', $proses->nama_user);
            Session::put('password', $proses->password);
            Session::put('login_status', true);
            return redirect('/');
        }
        else{
            Session::flash('alert_pesan', 'Username dan Password tidak cocok');
            return redirect('login');
        }
    }
    public function logout()
    {
        Session::flush();
        return redirect('login');
    }
}
