<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\provinsi;
use App\kota;
use App\store;
use Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $provinsi = provinsi::orderBy('name', 'asc')->pluck('name', 'id');
        return view('front.home', compact('provinsi'));

    }


    public function getKota() {
        $kota = kota::where('province_id', Request::get('provinsi'))->orderBy('name', 'asc')->get();
        ?>
        <select name="kota" class="form-control">
        <?php
            foreach($kota as $kotas) {
                echo "<option value=$kotas->id".">$kotas->name</option>";
            }
        ?>
        </select>
        <?php
    }

    public function findStore() {
        $kota = kota::find(Request::get('kota'));
        $slug = strtolower(str_replace(' ', '-', $kota->name));
        return redirect('store/'.$slug);
    }

    public function getStore($kota) {
        $slug = strtoupper(str_replace('-', ' ', $kota));
        $id_kota = kota::where('name', $slug)->first()->id;
        $kota = kota::find($id_kota);

        $stores = store::where('location', $id_kota)->get();
        return view('front.list-store', compact('stores', 'kota'));
    }
}