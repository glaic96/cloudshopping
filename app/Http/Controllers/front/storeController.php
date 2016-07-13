<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\store;

class storeController extends Controller
{
    public function index($slug) {
    	$store = store::where('slug', $slug)->first();
    	if(is_null($store)) {
    		abort(404, 'something went wrong...');
    	}
    	return view('front.store.index');
    }


}
 