<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelMobil;
class Rental extends Controller
{
    public function index(){
        $data['datas']=ModelMobil::all();
        return view("Rental",$data);
    }
}
