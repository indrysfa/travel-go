<?php

namespace App\Http\Controllers\Backend;

use App\building;
use App\fasilitas;
use App\Http\Controllers\Controller;
use App\Property;
use App\TipeProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $building = building::all();
        $fasilitas = fasilitas::all();
        return view('backend.home.showform', compact('data', 'building', 'fasilitas'));
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
        $image1->storeAs('public/image', $image1->hashName());
        $image2->storeAs('public/image', $image2->hashName());
        $image3->storeAs('public/image', $image3->hashName());
        $image4->storeAs('public/image', $image4->hashName());
        $image5->storeAs('public/image', $image5->hashName());
        $image6->storeAs('public/image', $image6->hashName());
        $image7->storeAs('public/image', $image7->hashName());

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
            'nm_building_id' => $request->nm_building_id,
            'nm_fasilitas_id' => $request->nm_fasilitas_id,
            'gambar1' => $image1->hashName(),
            'gambar2' => $image2->hashName(),
            'gambar3' => $image3->hashName(),
            'gambar4' => $image4->hashName(),
            'gambar5' => $image5->hashName(),
            'gambar6' => $image6->hashName(),
            'gambar7' => $image7->hashName(),


        ]);
        if ($data) {
            return redirect()->route('bhome.show');
        }
    }

    public function detailProperty(Property $property)
    {
        return view('backend.home.detail', compact('property'));
    }

    public function editproperty(Property $property)
    {
        $data = TipeProperty::all();
        $building = building::all();
        $fasilitas = fasilitas::all();
        return view('backend.home.edit', compact('property', 'data', 'building', 'fasilitas'));
    }

    public function updateProperty(Request $request, Property $data)
    {
        $data = Property::findOrFail($data->id);

        if ($request->file('gambar1')) {
            Storage::disk('local')->delete('public/image/' . $data->gambar1);

            $image1 = $request->file('gambar1');
            $image1->storeAs('public/image', $image1->hashName());

            $data->update([
                'tgl_join'          => $request->tgl_join,
                'nama'              => $request->nama,
                'alamat'            => $request->alamat,
                'kota'              => $request->kota,
                'harga'             => $request->harga,
                'checkin'           => $request->checkin,
                'checkout'          => $request->checkout,
                'ukuran'            => $request->ukuran,
                'kamar_mandi'       => $request->kamar_mandi,
                'tipe_kamar'        => $request->tipe_kamar,
                'kasur'             => $request->kasur,
                'tower'             => $request->tower,
                'lantai'            => $request->lantai,
                'biaya_kebersihan'  => $request->biaya_kebersihan,
                'jml_unit'          => $request->jml_unit,
                'tambah_orang'      => $request->tambah_orang,

                'tipe_property_id'  => $request->tipe_property_id,
                'nm_building_id'    => $request->nm_building_id,
                'nm_fasilitas_id'   => $request->nm_fasilitas_id,
                'gambar1' => $image1->hashName(),

            ]);
        } else if($request->file('gambar2')  && $request->file('gambar3')  && $request->file('gambar4')  && $request->file('gambar5')  &&  $request->file('gambar6')  && $request->file('gambar7')){
            Storage::disk('local')->delete('public/image/' . $data->gambar2);
            Storage::disk('local')->delete('public/image/' . $data->gambar3);
            Storage::disk('local')->delete('public/image/' . $data->gambar4);
            Storage::disk('local')->delete('public/image/' . $data->gambar5);
            Storage::disk('local')->delete('public/image/' . $data->gambar6);
            Storage::disk('local')->delete('public/image/' . $data->gambar7);
            $image2 = $request->file('gambar2');
            $image3 = $request->file('gambar3');
            $image4 = $request->file('gambar4');
            $image5 = $request->file('gambar5');
            $image6 = $request->file('gambar6');
            $image7 = $request->file('gambar7');
            $image2->storeAs('public/image', $image2->hashName());
            $image3->storeAs('public/image', $image3->hashName());
            $image4->storeAs('public/image', $image4->hashName());
            $image5->storeAs('public/image', $image5->hashName());
            $image6->storeAs('public/image', $image6->hashName());
            $image7->storeAs('public/image', $image7->hashName());
            $data->update([
                'tgl_join'          => $request->tgl_join,
                'nama'              => $request->nama,
                'alamat'            => $request->alamat,
                'kota'              => $request->kota,
                'harga'             => $request->harga,
                'checkin'           => $request->checkin,
                'checkout'          => $request->checkout,
                'ukuran'            => $request->ukuran,
                'kamar_mandi'       => $request->kamar_mandi,
                'tipe_kamar'        => $request->tipe_kamar,
                'kasur'             => $request->kasur,
                'tower'             => $request->tower,
                'lantai'            => $request->lantai,
                'biaya_kebersihan'  => $request->biaya_kebersihan,
                'jml_unit'          => $request->jml_unit,
                'tambah_orang'      => $request->tambah_orang,

                'tipe_property_id'  => $request->tipe_property_id,
                'nm_building_id'    => $request->nm_building_id,
                'nm_fasilitas_id'   => $request->nm_fasilitas_id,

                'gambar2' => $image2->hashName(),
                'gambar3' => $image3->hashName(),
                'gambar4' => $image4->hashName(),
                'gambar5' => $image5->hashName(),
                'gambar6' => $image6->hashName(),
                'gambar7' => $image7->hashName(),
            ]);
        }  
        else if ($request->file('gambar2')  || $request->file('gambar3')  || $request->file('gambar4')  || $request->file('gambar5')  ||  $request->file('gambar6')  || $request->file('gambar7')) {

            if ($request->file('gambar2')) {
                Storage::disk('local')->delete('public/image/' . $data->gambar2);
                $image2 = $request->file('gambar2');
                $image2->storeAs('public/image', $image2->hashName());
                $data->update([
                    'gambar2' => $image2->hashName(),
                ]);
            } elseif ($request->file('gambar3')) {
                Storage::disk('local')->delete('public/image/' . $data->gambar3);
                $image3 = $request->file('gambar3');
                $image3->storeAs('public/image', $image3->hashName());
                $data->update([
                    'gambar3' => $image3->hashName(),
                ]);
            } elseif ($request->file('gambar4')) {
                Storage::disk('local')->delete('public/image/' . $data->gambar4);
                $image4 = $request->file('gambar4');
                $image4->storeAs('public/image', $image4->hashName());
                $data->update([
                    'gambar4' => $image4->hashName(),
                ]);
            } elseif ($request->file('gambar5')) {
                Storage::disk('local')->delete('public/image/' . $data->gambar5);
                $image5 = $request->file('gambar5');
                $image5->storeAs('public/image', $image5->hashName());
                $data->update([
                    'gambar5' => $image5->hashName(),
                ]);
            } elseif ($request->file('gambar6')) {
                Storage::disk('local')->delete('public/image/' . $data->gambar6);
                $image6 = $request->file('gambar6');
                $image6->storeAs('public/image', $image6->hashName());
                $data->update([
                    'gambar6' => $image6->hashName(),
                ]);
            } elseif ($request->file('gambar7')) {
                Storage::disk('local')->delete('public/image/' . $data->gambar7);
                $image7 = $request->file('gambar7');
                $image7->storeAs('public/image', $image7->hashName());
                $data->update([
                    'gambar7' => $image7->hashName(),
                ]);
            } 
            $data->update([
                'tgl_join'          => $request->tgl_join,
                'nama'              => $request->nama,
                'alamat'            => $request->alamat,
                'kota'              => $request->kota,
                'harga'             => $request->harga,
                'checkin'           => $request->checkin,
                'checkout'          => $request->checkout,
                'ukuran'            => $request->ukuran,
                'kamar_mandi'       => $request->kamar_mandi,
                'tipe_kamar'        => $request->tipe_kamar,
                'kasur'             => $request->kasur,
                'tower'             => $request->tower,
                'lantai'            => $request->lantai,
                'biaya_kebersihan'  => $request->biaya_kebersihan,
                'jml_unit'          => $request->jml_unit,
                'tambah_orang'      => $request->tambah_orang,

                'tipe_property_id'  => $request->tipe_property_id,
                'nm_building_id'    => $request->nm_building_id,
                'nm_fasilitas_id'   => $request->nm_fasilitas_id,
            ]);
        } else {
            $data->update([
                'tgl_join'          => $request->tgl_join,
                'nama'              => $request->nama,
                'alamat'            => $request->alamat,
                'kota'              => $request->kota,
                'harga'             => $request->harga,
                'checkin'           => $request->checkin,
                'checkout'          => $request->checkout,
                'ukuran'            => $request->ukuran,
                'kamar_mandi'       => $request->kamar_mandi,
                'tipe_kamar'        => $request->tipe_kamar,
                'kasur'             => $request->kasur,
                'tower'             => $request->tower,
                'lantai'            => $request->lantai,
                'biaya_kebersihan'  => $request->biaya_kebersihan,
                'jml_unit'          => $request->jml_unit,
                'tambah_orang'      => $request->tambah_orang,

                'tipe_property_id'  => $request->tipe_property_id,
                'nm_building_id'    => $request->nm_building_id,
                'nm_fasilitas_id'   => $request->nm_fasilitas_id,
            ]);
        }

        if ($data) {
            return redirect()->route('bhome.show');
        }
    }
}
