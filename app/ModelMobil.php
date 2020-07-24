<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMobil extends Model
{
    protected $table = "mobil";
    //default primarykey adalah id
    protected $primarykey = "id_mobil";
    //untuk mematikan pengotomatisan insert kolom update at
    public $timestamps=false;
}
