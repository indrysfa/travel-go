{{-- @extends('master')

@section('content')
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <h1 class="h2 mr-auto">Sewa Data Property {{$backendSewaDataProperty->nama}}</h1>
                    <a href=" {{route('backend.sewa-data-property.edit', $backendSewaDataProperty->id)}} " class="btn btn-warning"> GANTI </a>

                    <form action=" {{route('backend.sewa-data-property.destroy', $backendSewaDataProperty->id)}} " method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                    </form>
                </div>
                <hr>
                @if (session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
                <ul>
                    <li>{{ $bsdp->nama }} </li>
                    <li>{{ $bsdp->tipe_property_id }}</li>
                    <li>{{ $bsdp->kasur }}</li>
                    <li>{{ $bsdp->kamar_mandi }}</li>
                    <li>{{ $bsdp->kota }}</li>
                    <li>{{ $bsdp->jml_unit }}</li>
                    <li>{{ $bsdp->harga }}</li>
                </ul>
            </div>
        </div>
    </div>

@endsection --}}