@extends('index')

@section('konten')
    <form action="{{route('updatekode', $updatekode->id)}}" method="post" style="margin-left:20rem;" enctype="multipart/form-data" >

        @csrf
        @method('PUT')

        <div class="form-goup">
        <label for="nama">Nama</label>
        <input class="form-control" type="text" name="nama" id="nama" value="{{old('nama', $updatekode->nama)}}" >
        </div>

        <div class="form-goup">
        <label for="jumlah">jumlah</label>
        <input class="form-control" type="text" name="jumlah" id="jumlah" value="{{old('jumlah', $updatekode->jumlah)}}">
        </div>

        <div class="form-goup">
            <label for="kode_promo">Kode Promo</label>
            <select name="kode_promo_id" id="kode_promo_id"class="form-control">
                @foreach ($kode_promo as $kodepromo) 
                    <option name="kode_promo_id" value="{{$kodepromo->id}}" {{ (old("kode_promo_id") ?? $updatebarang->kode_promo_id == $kodepromo->id) ? 'selected' : ""}}>
                        {{$satuan->kode_promo}}
                    </option>
                @endforeach
            </select>
        
        </div>


        <div class="form-goup">
            <label for="image">Gambar</label>
            <img src="{{Storage::url('public/assets/eforlad/images'. $updatekode->image)}}" width="50px" alt="">
            <input type="file"  id="image" name="image">
            </div>
        

        

        <button type="submit" class="btn btn-primary">Edit</button>
        </div>
        
    </form>
@endsection