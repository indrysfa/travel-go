@extends('backend.layouts.app')
@section('title', 'Fasilitas - Sewa')

@section('content')
    
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <br>
            <h1 class="text-center"> DATA FASILITAS </h1>
            <hr>
            <form action="{{ route('backend.kategori-fasilitas.store') }} " method="POST">
                @csrf
                <div class="form-group">
                    <label for="nm_fasilitas_id">Nama Fasilitas</label>
                    <input type="text" class="form-control @error('nm_fasilitas_id') is-invalid @enderror" id="nm_fasilitas_id" name="nm_fasilitas_id" 
                    value="{{ old('nm_fasilitas_id') }}">
                    @error('nm_fasilitas_id')
                        <div class="text-danger">  {{ $message }} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-2">SIMPAN</button>
            </form>
        </div>
    </div>
</div>

@endsection
