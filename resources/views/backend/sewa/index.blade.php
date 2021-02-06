@extends('backend.layouts.app')
@section('title', 'Admin - Sewa')

@section('content')
    
<div class="container container-backend-sewa">
    <div class="row">
        <div class="col-12">
            <div class="py-4">
                <h1>Tabel Data Property</h1>
                <a href=" {{ route('backend.sewa-data-property.create') }} " class="btn btn-primary"> Tambah Data Property </a>
            </div>

            @if (session() -> has('pesan'))
                <div class="alert alert-success">
                    {{ session()->get('pesan') }}
                </div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Property</th>
                        <th scope="col">Tipe Property</th>
                        <th scope="col">Kasur</Th>
                        <th scope="col">Kamar Mandi</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Total Unit</th>
                        <th scope="col"><span>IDR</span> Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($backendSewaDataProperty as $bsdp)
                        <tr>

                        </tr>
                        <th>{{ $loop->iteration }}</th>
                        {{-- Method 1 (works!!!) --}}
                        <td><a href="{{ route('backend.sewa-data-property.show', ['backendSewaDataProperty' => $bsdp->id]) }}"> {{ $bsdp->nm_building_id }} </a>
                        </td>


                        <td>
                            <div class="row">
                                <button class="btn btn-warning"><a style="color: black" href="{{route('backend.sewa-data-property.edit', $bsdp->id)}}">Edit</a></button>
                                <form action=" {{route('backend.sewa-data-property.destroy', $bsdp->id)}} " method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                                    </form>
                            </div>
                        </td>
                    @empty
                        <td colspan="8" class="text-center">Data Kosong</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <br><br>
    
    <div class="row">
        <div class="col-12">
            <div class="py-4">
                <h1>Tabel Filter Kategori Fasilitas</h1>
                <a href=" {{ route('backend.sewa-data-property.create') }} " class="btn btn-primary"> Tambah Filter Fasilitas </a>
            </div>

            @if (session() -> has('pesan'))
                <div class="alert alert-success">
                    {{ session()->get('pesan') }}
                </div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Property</th>
                        <th scope="col">Tipe Property</th>
                        <th scope="col">Kamar Tidur</Th>
                        <th scope="col">Kamar Mandi</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Total Unit</th>
                        <th scope="col"><span>IDR</span> Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($backendKategoriFasilitas as $bkf)
                        <tr>

                        </tr>
                        <th>{{ $loop->iteration }}</th>
                        {{-- Method 1 (works!!!) --}}
                        <td><a href="{{ route('backend.kategori-fasilitas.show', ['backendSewaDataProperty' => $bkf->id]) }}"> {{ $bkf->nm_building_id }} </a>
                        </td>


                        <td>
                            <div class="row">
                                <button class="btn btn-warning"><a style="color: black" href="{{route('backend.kategori-fasilitas.edit', $bkf->id)}}">Edit</a></button>
                                <form action=" {{route('backend.kategori-fasilitas.destroy', $bkf->id)}} " method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                                    </form>
                            </div>
                        </td>
                    @empty
                        <td colspan="8" class="text-center">Data Kosong</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <br><br>

    <div class="row">
        <div class="col-12">
            <div class="py-4">
                <h1>Tabel Filter Categories Building/Tower</h1>
                <a href=" {{ route('backend.kategori-building.create') }} " class="btn btn-primary"> Tambah Building / Tower </a>
            </div>

            @if (session() -> has('pesan'))
                <div class="alert alert-success">
                    {{ session()->get('pesan') }}
                </div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Property</th>
                        <th scope="col">Tipe Property</th>
                        <th scope="col">Kamar Tidur</Th>
                        <th scope="col">Kamar Mandi</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Total Unit</th>
                        <th scope="col"><span>IDR</span> Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($backendKategoriBuilding as $bkb)
                        <tr>

                        </tr>
                        <th>{{ $loop->iteration }}</th>
                        {{-- Method 1 (works!!!) --}}
                        <td><a href="{{ route('backend.kategori-building.show', ['backendSewaDataProperty' => $bkb->id]) }}"> {{ $bkb->nm_building_id }} </a>
                        </td>


                        <td>
                            <div class="row">
                                <button class="btn btn-warning"><a style="color: black" href="{{route('backend.kategori-building.edit', $bkb->id)}}">Edit</a></button>
                                <form action=" {{route('backend.kategori-building.destroy', $bkb->id)}} " method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                                    </form>
                            </div>
                        </td>
                    @empty
                        <td colspan="8" class="text-center">Data Kosong</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection