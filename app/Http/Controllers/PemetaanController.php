<?php

namespace App\Http\Controllers;

use App\Desa;
use App\User;
use App\Agama;
use App\PotensiIbadah;
use App\PotensiSekolah;
use App\PotensiUmkm;
use App\JenisPotensi;
use App\TingkatSekolah;
use App\JenisSekolah;
use Illuminate\Http\Request;

class PemetaanController extends Controller
{
    public function dataIndex()
    {

        $desa = Desa::first();
        $potensisekolah = PotensiSekolah::all();
        $potensiumkm = PotensiUmkm::all();
        $potensiibadah = PotensiIbadah::all();
        $tingaksekolah = TingkatSekolah::all();
        $jenissekolah = JenisSekolah::all();
        return view('pemetaan.data-pemetaan', compact('desa', 'potensisekolah','potensiumkm','potensiibadah','jenissekolah','tingaksekolah'));
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
        $agama = Agama::all();
        return view('pemetaan.add-potensi', compact('desa','tingkatsekolah','jenissekolah','agama'));
    }


    public function editView()
    {
        $potensisekolah = PotensiSekolah::all();
        $potensiumkm = PotensiUmkm::all();
        $potensiibadah = PotensiIbadah::all();

        return view('pemetaan.edit-potensi', compact('potensisekolah','potensiumkm','potensiibadah'));
    }

    public function dataMarker()
    {
        $potensisekolah = PotensiSekolah::join('tb_jenispotensi','tb_sekolah.potensi_id','tb_jenispotensi.id')
            ->select('tb_jenispotensi.icon', 'tb_jenispotensi.namapotensi', 'tb_sekolah.*')->get();

        $potensiumkm = PotensiUmkm::join('tb_jenispotensi','tb_umkm.potensi_id','tb_jenispotensi.id')
            ->select('tb_jenispotensi.icon', 'tb_jenispotensi.namapotensi', 'tb_umkm.*')->get();

        $potensiibadah = PotensiIbadah::join('tb_jenispotensi','tb_tempatibadah.potensi_id','tb_jenispotensi.id')
            ->select('tb_jenispotensi.icon', 'tb_jenispotensi.namapotensi', 'tb_tempatibadah.*')->get();

        $jenispotensi = JenisPotensi::all();

        return response()->json(['sekolah' => $potensisekolah,'umkm' => $potensiumkm,'ibadah' => $potensiibadah ]);
        // return view('pemetaan.edit-potensi', compact('potensisekolah','potensiumkm','potensiibadah'));
    }



}
