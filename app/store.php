<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    protected $table = 'tbl_store';

    public function owner() {
    	return $this->belongsTo('App\owner', 'id_owner', 'id_owner');
    }
}
