@extends('backend.layouts.app')
@section('title', 'Admin Data Property- Sewa')

@section('content')

    <div class="container container-backend-sewa">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h1>Tabel Data Property</h1>
                    <a href=" {{ route('backend.sewa-data-property.create') }} " class="btn btn-primary"> Tambah Data
                        Property </a>
                </div>

                @if (session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                @endif

                <table class="table table-striped mx-auto">
                    <thead>
                        <tr>
                            {{-- ada 9 col --}}
                            <th scope="col">#</th>
                            <th scope="col">Nama Property</th>
                            <th scope="col">Tipe Property</th>
                            <th scope="col">Kasur</Th>
                            <th scope="col">Kamar Mandi</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Total Unit</th>
                            <th scope="col"> Harga</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($backendSewaDataProperty as $bsdp)
                            <tr>

                            </tr>
                            <th>{{ $loop->iteration }}</th>
                            {{-- Method 1 (works!!!) --}}
                            <td><a
                                    href="{{ route('backend.sewa-data-property.show', ['backendSewaDataProperty' => $bsdp->id]) }}">
                                    {{ $bsdp->nm_building_id }} </a>
                            </td>
                            <td>{{ $bsdp->tipe_property_id }}</td>
                            <td>{{ $bsdp->kasur }}</td>
                            <td>{{ $bsdp->kamar_mandi }}</td>
                            <td>{{ $bsdp->kota }}</td>
                            <td>{{ $bsdp->jml_unit }}</td>
                            <td>{{ $bsdp->harga }}</td>
                            <td>
                                <div class="row">
                                    <button class="btn btn-warning"><a style="color: black"
                                            href="{{ route('backend.sewa-data-property.edit', $bsdp->id) }}">Edit</a></button>
                                    <form action=" {{ route('backend.sewa-data-property.destroy', $bsdp->id) }} "
                                        method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        @empty
                            <td colspan="12" class="text-center">Data Kosong</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
