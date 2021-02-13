<?php

namespace App\Http\Controllers\Backend;

// use App\TipeProperty;
use App\fasilitas;
use App\building;
use App\Property;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.sewa.index');
    }

    public function indexBackendSewaDataProperty()
    {
        $backendSewaDataProperty = Property::all();
        return view('backend.sewa.index-sewa-data-property', compact('backendSewaDataProperty'));
    }

    public function indexBackendKategoriFasilitas()
    {
        $backendKategoriFasilitas = fasilitas::all();
        return view('backend.sewa.indexfasilitas', compact('backendKategoriFasilitas'));
    }

    public function indexBackendKategoriBuilding()
    {
        $backendKategoriBuilding = building::all();
        return view('backend.sewa.indexbuilding', compact('backendKategoriBuilding'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSewaDataProperty()
    {
        //
    }

    public function createKategoriFasilitas()
    {
        return view('backend.sewa.createfasilitas');
    }

    public function createKategoriBuilding()
    {
        return view('backend.sewa.createbuilding');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSewaDataProperty(Request $request)
    {
        //
    }

    public function storeKategoriFasilitas(Request $request)
    {
        $validateData = $request->validate([
            'nm_fasilitas' => 'required',
        ]);
        // dd($validateData);
        $data = fasilitas::create($validateData);
        // dd ($data);
        $request->session()->flash('pesan', "Data {$validateData['nm_fasilitas']} berhasil di simpan! ");
        return redirect()->route('backend.kategori-fasilitas.index');
    }

    public function storeKategoriBuilding(Request $request)
    {
        $validateData = $request->validate([
            'nm_building' => 'required',
        ]);
        // dd($validateData);
        $data = building::create($validateData);
        // dd ($data);
        $request->session()->flash('pesan', "Data {$validateData['nm_building']} berhasil di simpan! ");
        return redirect()->route('backend.kategori-building.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showSewaDataProperty($id)
    {
        //
    }

    public function showKategoriFasilitas(fasilitas $backendKategoriFasilitas)
    {
        return view('backend.sewa.showfasilitas', compact('backendKategoriFasilitas'));
    }

    public function showKategoriBuilding(building $backendKategoriBuilding)
    {
        return view('backend.sewa.showbuilding', compact('backendKategoriBuilding'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editSewaDataProperty($id)
    {
        //
    }

    public function editKategoriFasilitas(fasilitas $backendKategoriFasilitas)
    {
        return view('backend.sewa.editfasilitas', compact('backendKategoriFasilitas'));
    }

    public function editKategoriBuilding(building $backendKategoriBuilding)
    {
        return view('backend.sewa.editbuilding', compact('backendKategoriBuilding'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSewaDataProperty(Request $request, $id)
    {
        //
    }

    public function updateKategoriFasilitas(Request $request, fasilitas $backendKategoriFasilitas)
    {
        $validateData = $request->validate([
            'nm_fasilitas' => 'required',
        ]);
        $backendKategoriFasilitas->update($validateData);
        return redirect()->route('backend.kategori-fasilitas.index')->with('pesan', "Update Data {$backendKategoriFasilitas->nm_fasilitas} BERHASIL");
    }

    public function updateKategoriBuilding(Request $request,building $backendKategoriBuilding)
    {
        $validateData = $request->validate([
            'nm_building' => 'required',
        ]);
        $backendKategoriBuilding->update($validateData);
        return redirect()->route('backend.kategori-building.index')->with('pesan', "Update Data {$backendKategoriBuilding->nm_building} BERHASIL");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroySewaDataProperty($id)
    {
        //
    }

    public function destroyKategoriFasilitas(fasilitas $backendKategoriFasilitas)
    {
        $backendKategoriFasilitas->delete();
        return redirect()->route('backend.kategori-fasilitas.index')->with('pesan', "Hapus Data $backendKategoriFasilitas->nm_fasilitas BERHASIL");
    }

    public function destroyKategoriBuilding(building $backendKategoriBuilding)
    {
        $backendKategoriBuilding->delete();
        return redirect()->route('backend.kategori-building.index')->with('pesan', "Hapus Data $backendKategoriBuilding->nm_building BERHASIL");
    }
}
