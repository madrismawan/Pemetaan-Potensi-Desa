<?php

namespace App\Http\Controllers\Pemetaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index()
    {
        $desa = Desa::first();
        return view('pemetaan.add-potensi', compact('desa'));
    }
}
