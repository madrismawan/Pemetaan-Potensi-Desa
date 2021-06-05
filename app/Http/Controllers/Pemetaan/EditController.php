<?php

namespace App\Http\Controllers\Pemetaan;
use App\JenisPotensi;
use App\PotensiUmkm;
use App\PotensiSekolah;
use App\Desa;
use App\PotensiIbadah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index()
    {
        $desa = Desa::first();
        return view('pemetaan.add-potensi', compact('desa'));
    }


    public function editIcon(Request $request, $id)
    {
        $path ='icon/'.time().'-'.$request->icon->getClientOriginalName();
        $imageName = time().'-'.$request->icon->getClientOriginalName();

        $request->icon->move(public_path('icon/'),$imageName);
        $jenispotensi = JenisPotensi::find($id);
        $jenispotensi->icon = $path;
        $jenispotensi->save();

        return redirect()->back()->with(['success' => 'Icon berhasil diubah']);

    }

      /// SECTION DETAIL DATA ////
      public function detailUmkm(Request $request,$id)
      {
          $umkm = PotensiUmkm::find($id);
          $desa = Desa::first();
          return view('pemetaan.umkm.edit', compact('desa','umkm'));

      }

      public function updateUmkm(Request $request,$id)
      {
          // dd($request->all());

          $desa = Desa::first();
          $umkm = PotensiUmkm::find($id);
          $umkm->nama = $request->nama;
          $umkm->desc = $request->deskripsi;
          $umkm->alamat = $request->alamat;
          $umkm->lat = $request->lat;
          $umkm->lng = $request->lng;
          $umkm->save();

          return redirect()->back()->with(['success' => 'Icon berhasil diubah']);

      }

    /// SECTION DETAIL DATA ////
    public function detailSekolah(Request $request,$id)
    {
        $sekolah = PotensiSekolah::find($id);
        $desa = Desa::first();
        return view('pemetaan.sekolah.edit', compact('desa','sekolah'));

    }

    public function updateSekolah(Request $request,$id)
    {
        // dd($request->all());

        $desa = Desa::first();
        $sekolah = PotensiSekolah::find($id);
        $sekolah->namasekolah = $request->nama;
        $sekolah->desc = $request->deskripsi;
        $sekolah->alamat = $request->alamat;
        $sekolah->lat = $request->lat;
        $sekolah->lng = $request->lng;
        $sekolah->save();

        return redirect()->back()->with(['success' => 'Icon berhasil diubah']);

    }







    /// SECTION DELETE DATA ////
    public function deleteUmkm($id)
    {
        $umkm = PotensiUmkm::find($id);
        $umkm->delete();

        return redirect()->back()->with(['success' => 'Data Berhasil di Hapus']);

    }

    public function deleteIbadah($id)
    {
        $ibadah = PotensiIbadah::find($id);
        $ibadah->delete();

        return redirect()->back()->with(['success' => 'Data Berhasil di Hapus']);

    }

    public function deleteSekolah($id)
    {
        $sekolah = PotensiSekolah::find($id);
        $sekolah->delete();

        return redirect()->back()->with(['success' => 'Data Berhasil di Hapus']);

    }









}
