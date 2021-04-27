<?php

namespace App\Http\Controllers\Frontend;

use App\Booking;
use App\building;
use App\fasilitas;
use App\Http\Controllers\Controller;
use App\Property;
use App\TipeProperty;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Property $property)
    {
        $dataProperty = Property::latest()->paginate(3);
        return view('frontend.home.index', compact('property','dataProperty'));
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

    public function create(Request $request)
    {
        $data = Booking::create([
            'id_property'   => $request->id_property, // auto input ambil dari id properties tampil view nama hotel / apartemen ?
            'nama'          => $request->nama, // auto login user
            'email'         => $request->email, // auto email user login
            'no_telp'       => $request->no_telp, // auto no telp user login
            'no_ktp'        => $request->no_ktp, // auto no ktp user login
            'checkin_date'  => $request->checkin_date,
            'checkout_date' => $request->checkout_date,
            'promotion'     => $request->promotion,
            'tamu'          => $request->tamu,
            'harga'         => $request->harga, // auto ambil harga dari & buat rumus harga - harga promo
            'status'        => 0 // 0 = booked 1 = konfirmasi kehadiran
        ]);

        if ($data) {
            return redirect()->route('frontend.sewa.index');
        }
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
