<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Property;
use App\TipeProperty;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('backend.home.index');
    }

    public function show()
    {
        $data = Property::all();
        return view('backend.home.showdata', compact('data'));
    }

    public function showForm()
    {
        $data = TipeProperty::all();
        return view('backend.home.showform', compact('data'));
    }

    public function showTipe()
    {
        $data = Property::all();
        return view('backend.home.showtipe', compact('data'));
    }

    public function addTipeProperty(Request $request)
    {
        $data = TipeProperty::create([
            'tipe_property' => $request->tipe_property
        ]);

        if ($data) {
            return redirect()->route('bhome.show');
        }
    }

    public function addProperty(Request $request)
    {
        $this->validate($request, [
            'gambar1' => 'required|image|mimes:png,jpg,jpeg',
            'gambar2' => 'required|image|mimes:png,jpg,jpeg',
            'gambar3' => 'required|image|mimes:png,jpg,jpeg',
            'gambar4' => 'required|image|mimes:png,jpg,jpeg',
            'gambar5' => 'required|image|mimes:png,jpg,jpeg',
            'gambar6' => 'required|image|mimes:png,jpg,jpeg',
            'gambar7' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $image1 = $request->file('gambar1');
        $image2 = $request->file('gambar2');
        $image3 = $request->file('gambar3');
        $image4 = $request->file('gambar4');
        $image5 = $request->file('gambar5');
        $image6 = $request->file('gambar6');
        $image7 = $request->file('gambar7');
        $image->storeAs('public/image', $image1->hashName());

        $data = Property::create([
            'tgl_join' => $request->tgl_join,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'harga' => $request->harga,
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
            'ukuran' => $request->ukuran,
            'kamar_mandi' => $request->kamar_mandi,
            'tipe_kamar' => $request->tipe_kamar,
            'kasur' => $request->kasur,
            'tower' => $request->tower,
            'lantai' => $request->lantai,
            'biaya_kebersihan' => $request->biaya_kebersihan,
            'jml_unit' => $request->jml_unit,
            'tambah_orang' => $request->tambah_orang,
            
            'tipe_property_id' => $request->tipe_property_id,
            // 'nm_building_id' => $request->nm_building_id,
            // 'nm_fasilitas_id' => $request->nm_fasilitas_id,
            'gambar1' => $image->hashName(),
            'gambar2' => $image->hashName(),
            'gambar3' => $image->hashName(),
            'gambar4' => $image->hashName(),
            'gambar5' => $image->hashName(),
            'gambar6' => $image->hashName(),
            'gambar7' => $image->hashName(),

        if ($data) {
            return redirect()->route('bhome.show');
        }
    }
}
