@extends('backend.layouts.app')
@section('title', 'Building - Sewa')

@section('content')
    
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <br>
            <h1 class="text-center"> EDIT DATA BUILDING </h1>
            <hr>
            <form action="{{ route('backend.kategori-building.update', $backendKategoriBuilding->id) }} " method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nm_building">Nama Building</label>
                    <input type="text" class="form-control @error('nm_building') is-invalid @enderror" id="nm_building" name="nm_building" 
                    value="{{ old('nm_building', $backendKategoriBuilding->nm_building) }}">
                    @error('nm_building')
                        <div class="text-danger">  {{ $message }} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-2">UPDATE</button>
            </form>
        </div>
    </div>
</div>

@endsection
