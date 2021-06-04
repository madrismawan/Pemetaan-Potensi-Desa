<?php

namespace App\Http\Controllers;

use App\Desa;
use App\User;
use App\JenisPotensi;
use App\TingkatSekolah;
use App\JenisSekolah;
use Illuminate\Http\Request;

class PemetaanController extends Controller
{
    public function dataIndex()
    {
        return view('pemetaan.data-pemetaan');
    }

    public function dataJenis()
    {
        $jenispotensi = JenisPotensi::all();

        return view('pemetaan.jenis-potensi', compact('jenispotensi'));
    }

    public function dataAdd()
    {
        $desa = Desa::first();
        $jenissekolah = JenisSekolah::all();
        $tingkatsekolah = TingkatSekolah::all();
        return view('pemetaan.add-potensi', compact('desa','tingkatsekolah','jenissekolah'));
    }


    public function editView()
    {
        return view('pemetaan.edit-potensi');
    }



}
