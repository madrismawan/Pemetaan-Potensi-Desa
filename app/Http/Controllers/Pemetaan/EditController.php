<?php

namespace App\Http\Controllers\Pemetaan;
use App\JenisPotensi;
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
        $path ='/icon/'.time().'-'.$request->icon->getClientOriginalName();
        $imageName = time().'-'.$request->icon->getClientOriginalName();

        $request->icon->move(public_path('icon/'),$imageName);
        $jenispotensi = JenisPotensi::find($id);
        $jenispotensi->icon = $path;
        $jenispotensi->save();

        return redirect()->back()->with(['success' => 'Icon berhasil diubah']);

    }

}
