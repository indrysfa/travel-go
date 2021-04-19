@extends('index')

@section('konten')
    <form action="{{route('create')}}" method="post" style="margin-left:20rem;" enctype="multipart/form-data">

        @csrf
        

        <div class="form-goup">
            <label for="nama">Nama</label>
            <input class="form-control" type="text" name="nama" id="nama" value="{{old('nama')}}" >
        </div>

        <div class="form-goup">
            <label for="jumlah">Jumlah</label>
            <input class="form-control" type="text" name="jumlah" id="jumlah" value="{{old('jumlah)}}">
        </div>

        <div class="form-goup">
            <label for="kode_promo">Kode Promo</label>
            <select name="kode_promo_id" id="kode_promo_id"class="form-control">
                @foreach ($kode_promo_id as $kodepromo) 
                    <option name="kode_promo_id" value="{{$kodepromo->id}}" {{old("kode_promo_id") == "$kodepromo->kode_promo" ? selected : ""}}">
                        {{$kodepromo->kode_promo}}
                    </option>
                @endforeach
            </select>
        </div>





        

        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
@endsection