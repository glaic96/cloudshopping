<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
    protected $table = 'tbl_kota';
    
    public function provinsi() {
    	return $this->belongsTo('App\provinsi', 'province_id', 'id');
    }
}
