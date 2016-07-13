<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    protected $table = 'tbl_provinsi';

    public function kota() {
    	return $this->hasMany('App\kota', 'province_id', 'id'); //return kota
    }
}
