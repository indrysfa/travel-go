<?php

namespace App\Http\Controllers\Frontend;

use App\building;
use App\fasilitas;
use App\Http\Controllers\Controller;
use App\Property;
use App\TipeProperty;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $property = Property::all();
        return view('frontend.home.index', compact('property'));
    }

    public function frontendSearch(Request $request)
    {
        $keyword = $request->get('keyword');

        $frontendSewaDataProperty = Property::all();
        $frontendKategoriFasilitas = fasilitas::all();
        $frontendKategoriBuilding = building::all();

        if ($keyword) {
            $frontendSewaDataProperty = Property::where("alamat", "LIKE", "%$keyword%")->get();
        }

        return view('frontend.sewa.caridata', compact('frontendSewaDataProperty','frontendKategoriFasilitas', 'frontendKategoriBuilding'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    public function store(Property $property)
    {
        // $data = TipeProperty::all();
        // $building = building::all();
        // $fasilitas = fasilitas::all();
        // return view('frontend.home.detailsewa', compact('data', 'building', 'fasilitas'));

        return view('frontend.home.detailsewa', compact('property'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        $dataProperty = Property::latest()->paginate(3);
        return view('frontend.home.detailsewa', compact('property', 'dataProperty'));
    }

    public function registration()
    {
        return view('auth.register');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
