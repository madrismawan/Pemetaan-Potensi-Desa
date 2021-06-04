<?php

namespace App\Http\Controllers\Pemetaan;

use App\PotensiUmkm;
use App\PotensiSekolah;
use App\PotensiUmkm;
use App\PotensiUmkm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AddController extends Controller
{
    public function umkmStore(Request $request)
    {

        $path ='/image-potensi/umkm'.time().'-'.$request->image_umkm->getClientOriginalName();
        $imageName = time().'-'.$request->image_umkm->getClientOriginalName();

        $request->image_umkm->move(public_path('image-potensi/umkm'),$imageName);

        $admin = PotensiUmkm::create([
            'potensi_id' => 3,
            'nama' =>$request->nama_umkm,
            'jenis' =>$request->jenis_umkm,
            'desc' =>$request->deskripsi_umkm,
            'image'=>$imageName,
            'alamat'=>$request->alamat_umkm,
            'lat' => $request->lat,
            'lng' => $request->lng,
        ]);

        return redirect()->back()->with(['success' => 'Data Berhasil Disimpan']);

    }

}
