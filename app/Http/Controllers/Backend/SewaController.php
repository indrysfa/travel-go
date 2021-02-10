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
        $backendSewaDataProperty = Property::all();
        $backendKategoriFasilitas = Property::all();
        $backendKategoriBuilding = Property::all();
        return view('backend.sewa.index', compact('backendSewaDataProperty', 'backendKategoriFasilitas', 'backendKategoriBuilding'));
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
        //
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
            'nm_fasilitas_id' => 'required',
        ]);

        Property::create($validateData);
        $request->session()->flash('pesan', "Data {$validateData['backendKategoriFasilitas']} berhasil di simpan! ");
        return redirect()->route('/sewa'); 
    }

    public function storeKategoriBuilding(Request $request)
    {
        //
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

    public function showKategoriFasilitas($id)
    {
        //
    }

    public function showKategoriBuilding($id)
    {
        //
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

    public function editKategoriFasilitas($id)
    {
        //
    }

    public function editKategoriBuilding($id)
    {
        //
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

    public function updateKategoriFasilitas(Request $request, $id)
    {
        //
    }

    public function updateKategoriBuilding(Request $request, $id)
    {
        //
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

    public function destroyKategoriFasilitas($id)
    {
        //
    }

    public function destroyKategoriBuilding($id)
    {
        //
    }

}
