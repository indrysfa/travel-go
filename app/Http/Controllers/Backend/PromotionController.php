<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Promotion;
use App\KodePromo;
use Illuminate\Support\Facades\Storage;



use App\Http\Controllers\Controller;





class PromotionController extends Controller
{
    public function data()
    {
        return view('backend.promotion.data');
    }

    public function dataprpmotion(){
        $data_promotion = Promotion::all();
        return view('showdata', compact('data'));
    }

    public function create(){
        $kode_promo = KodePromo::all();
        return view('create', compact('kode_promo'));
    }
    public function promotion(Request $request){

        $this->validate($request, [
            'image' => 'required|image|mimes:png,jpg,jpeg',
        ]);


        $promotions = promotion::create([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'kode_kupon' => $request->kode_kupon,
            'image'=> $image->hashName(),
        ]);

        if($promotions){
            return redirect()->route('data');
        }
    }

    
    public function showdata(){
        return view('showdata');
    }

    public function inputkode(Request $request){

        $promotion=new promotion();
        $promotion->nama= $request->nama;
        $promotion->jumlah = $request->jumlah;
        $promotion->kode_promo = $request->kode_promo;
      


        $promotion->save();

        if($promotion){
            return redirect()->route('data');
        }
    }

    Public function delete(promotion $promotion){
        $promotion->find($promotion->id)->all();

        $promotion->delete();

        if($promotion){
            return redirect()->route('data');
        }
    }

    
    public function edit( Promotion $updatekode){


        $kode_promotion=kodepromotion::all();
        return view('edit',compact('update','kode_promotion'));

    }

    public function update(Request $request, GS $updatebarang){

        
        $kode_promotion = promotion::findOrFail($updatekode->id);

        if($request->file('image') == ""){
            
            $updatekode->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'kode_promo' => $request->kode_promo,
            ]);

        } else{
            Storage::disk('local')->delete('public/assets/eforlad/images'.$updatekode->image);

            $image = $request->file('image');
            $image->storeAs('public/assets/eforlad/images, $image->hashName());

            $updatekode->update([
                'nama' => $request->nama,
                'jumlah' => $request->jumlah,
                'kode_promo' => $request->kode_promo
                'image' => $image->hashName(),
            ]);


            if($updatebarang){
                return redirect()->route('data');
            }
        }
   

}
