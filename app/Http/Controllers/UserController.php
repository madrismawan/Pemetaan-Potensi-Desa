<?php

namespace App\Http\Controllers;

use App\Desa;
use App\PotensiSekolah;
use App\PotensiUmkm;
use App\PotensiIbadah;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $desa = Desa::first();
        $potensisekolah = PotensiSekolah::count();
        $potensiibadah = PotensiIbadah::count();
        $potensiumkm = PotensiUmkm::count();

        return view('user.dashboard',compact('desa','potensisekolah','potensiibadah','potensiumkm'));
    }

    public function edit()
    {
        return view('user.edit-profile');
    }



}
