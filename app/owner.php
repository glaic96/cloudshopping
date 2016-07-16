<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class owner extends Authenticatable
{
    protected $table = 'tbl_owner';
    protected $primaryKey = 'id_owner';

    public function store() {
    	return $this->hasOne('App\store', 'id_owner', 'id_owner');
    }

    protected $guard = 'owner';
}
