@extends('backend.layouts.app')
@section('title', 'Create Data Property - Sewa')

@section('content')
    
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <br>
            <h1 class="text-center"> DATA SEWA DATA PROPERTY </h1>
            <hr>
            <form action="{{ route('backend.kategori-fasilitas.store') }} " method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Property</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" 
                    value="{{ old('nama') }}">
                    @error('nama')
                        <div class="text-danger">  {{ $message }} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tipe_property_id">Tipe Property</label>
                    <input type="text" class="form-control @error('tipe_property_id') is-invalid @enderror" name="tipe_property_id" id="tipe_property_id"
                    value="{{ old('tipe_property_id') }} ">
                    @error('tipe_property_id')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kasur">Kasur</label>
                    <input type="text" class="form-control @error('kasur') is-invalid @enderror" name="kasur" id="kasur"
                    value="{{ old('kasur') }} ">
                    @error('kasur')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kamar_mandi">Kamar Mandi</label>
                    <input type="text" class="form-control @error('kamar_mandi') is-invalid @enderror" name="kamar_mandi" id="kamar_mandi"
                    value="{{ old('kamar_mandi') }} ">
                    @error('kamar_mandi')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kota">Kota</label>
                    <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" id="kota"
                    value="{{ old('kota') }} ">
                    @error('kota')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jml_unit">Jumlah Unit</label>
                    <input type="text" class="form-control" id="jml_unit" name="jml_unit" value="{{ old('jml_unit') }}">
                    @error('jml_unit')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="{{ old('harga') }}">
                    @error('harga')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mb-2">SIMPAN</button>
            </form>
        </div>
    </div>
</div>

@endsection
