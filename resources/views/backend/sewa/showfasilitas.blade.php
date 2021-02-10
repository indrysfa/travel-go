@extends('backend.layouts.app')
@section('title', 'Fasilitas - Sewa')

@section('content')
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <h1 class="h2 mr-auto"> Nama Fasilitas {{$backendKategoriFasilitas->nm_fasilitas_id}}</h1>
                    <a href=" {{route('backend.kategori-fasilitas.edit', $backendKategoriFasilitas->id)}} " class="btn btn-warning"> GANTI </a>

                    <form action=" {{route('backend.kategori-fasilitas.destroy', $backendKategoriFasilitas->id)}} " method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger ml-3">HAPUS</button>
                    </form>
                </div>
                <hr>
                @if (session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
                <ul>
                    <li> Nama Fasilitas : {{ $backendKategoriFasilitas->nm_fasilitas_id}} </li>
                </ul>
            </div>
        </div>
    </div>

@endsection