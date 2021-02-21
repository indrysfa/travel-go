@extends('backend.layouts.app')
@section('title', 'Fasilitas - Sewa')

@section('content')
    
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <br>
            <h1 class="text-center"> EDIT DATA FASILITAS </h1>
            <hr>
            <form action="{{ route('backend.kategori-fasilitas.update', $backendKategoriFasilitas->id) }} " method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nm_fasilitas">Nama Fasilitas</label>
                    <input type="text" class="form-control @error('nm_fasilitas') is-invalid @enderror" id="nm_fasilitas" name="nm_fasilitas" 
                    value="{{ old('nm_fasilitas', $backendKategoriFasilitas->nm_fasilitas) }}">
                    @error('nm_fasilitas')
                        <div class="text-danger">  {{ $message }} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-2">UPDATE</button>
            </form>
        </div>
    </div>
</div>

@endsection
