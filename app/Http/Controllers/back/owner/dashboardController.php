<?php

namespace App\Http\Controllers\back\owner;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    public function index() {
    	return view('back.owner.index');
    }
}
