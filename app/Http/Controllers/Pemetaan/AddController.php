<?php

namespace App\Http\Controllers\Pemetaan;

use App\PotensiUmkm;
use App\PotensiSekolah;
use App\PotensiIbadah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AddController extends Controller
{
    public function umkmStore(Request $request)
    {

        $path ='image-potensi/umkm/'.time().'-'.$request->image_umkm->getClientOriginalName();
        $imageName = time().'-'.$request->image_umkm->getClientOriginalName();

        $request->image_umkm->move(public_path('image-potensi/umkm'),$imageName);

        $admin = PotensiUmkm::create([
            'potensi_id' => 3,
            'nama' =>$request->nama_umkm,
            'jenis' =>$request->jenis_umkm,
            'desc' =>$request->deskripsi_umkm,
            'image'=>$path,
            'alamat'=>$request->alamat_umkm,
            'lat' => $request->lat,
            'lng' => $request->lng,
        ]);

        return redirect()->back()->with(['success' => 'Data Berhasil Disimpan']);

    }

    public function sekolahStore(Request $request)
    {


        $path ='image-potensi/sekolah/'.time().'-'.$request->image_sekolah->getClientOriginalName();
        $imageName = time().'-'.$request->image_sekolah->getClientOriginalName();

        $request->image_sekolah->move(public_path('image-potensi/sekolah'),$imageName);

        $admin = PotensiSekolah::create([
            'potensi_id' => 1,
            'tingkat_id' =>$request->tingkat_sekolah,
            'jenis_sekolah_id' =>$request->jenis_sekolah,
            'namasekolah' =>$request->nama_sekolah,
            'image'=>$path,
            'desc'=>$request->deskripsi_sekolah,
            'alamat'=>$request->alamat_sekolah,
            'lat' => $request->lat,
            'lng' => $request->lng,
        ]);

        return redirect()->back()->with(['success' => 'Data Berhasil Disimpan']);

    }

    public function ibadahStore(Request $request)
    {

        $path ='image-potensi/ibadah/'.time().'-'.$request->image_ibadah->getClientOriginalName();
        $imageName = time().'-'.$request->image_ibadah->getClientOriginalName();

        $request->image_ibadah->move(public_path('image-potensi/ibadah'),$imageName);

        $admin = PotensiIbadah::create([
            'potensi_id' => 2,
            'agama_id' =>$request->agama,
            'nama_tempatibadah' =>$request->nama_ibadah,
            'alamat' =>$request->alamat_ibadah,
            'image'=>$path,
            'desc'=>$request->deskripsi_ibadah,
            'lat' => $request->lat,
            'lng' => $request->lng,
        ]);

        return redirect()->back()->with(['success' => 'Data Berhasil Disimpan']);

    }


}
