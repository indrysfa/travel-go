@extends('backend.layouts.app')
@section('title', 'Admin Building - Sewa')

@section('content')

    <div class="container container-backend-sewa">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h1>Tabel Filter Kategori building</h1>
                    <a href=" {{ route('backend.kategori-building.create') }} " class="btn btn-primary"> Tambah Filter
                        building </a>
                </div>

                @if (session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- ada 3 col --}}
                            <th scope="col">#</th>
                            <th scope="col">Nama Building</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($backendKategoriBuilding as $bkb)
                            <tr>

                            </tr>
                            <th>{{ $loop->iteration }}</th>
                            {{-- Method 1 (works!!!) --}}
                            <td>
                                <a
                                    href="{{ route('backend.kategori-building.show', $bkb->id) }}">
                                    {{ $bkb->nm_building }} </a>
                            </td>

                            {{-- td foto --}}

                            <td>
                                <div class="row">
                                    <button class="btn btn-warning"><a style="color: black"
                                            href="{{ route('backend.kategori-building.edit', $bkb->id) }}">Edit</a></button>
                                    <form action=" {{ route('backend.kategori-building.destroy', $bkb->id) }} "
                                        method="POST">
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
