<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPeminjaman extends Model
{
    protected $table = "peminjaman";
    //default primarykey adalah id
    protected $primarykey = "id_peminjaman";
    //untuk mematikan pengotomatisan insert kolom update at
    public $timestamps=false;
}
