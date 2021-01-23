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
        // $this->validate($request, [
        //     'image' => 'required|image|mimes:png,jpg,jpeg',
        // ]);

        // $image = $request->file('image');
        // $image->storeAs('public/image', $image->hashName());

        $data = Property::create([
            'tgl_join' => $request->tgl_join,
            'nm_property_id' => $request->nm_property_id,
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
            'tambah_orang' => $request->tambah_orang,
            
            'tipe_property_id' => $request->tipe_property_id,
            // 'image' => $image->hashName()
        ]);

        if ($data) {
            return redirect()->route('bhome.show');
        }
    }
}
