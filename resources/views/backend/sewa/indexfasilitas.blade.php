@extends('backend.layouts.app')
@section('title', 'Admin - Sewa Fasilitas')

@section('content')

    <div class="container container-backend-sewa">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h1>Tabel Filter Kategori Fasilitas</h1>
                    <a href=" {{ route('backend.kategori-fasilitas.create') }} " class="btn btn-primary"> Tambah Filter
                        Fasilitas </a>
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
                            <th scope="col">Nama Fasilitas</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($backendKategoriFasilitas as $bkf)
                            <tr>

                            </tr>
                            <th>{{ $loop->iteration }}</th>
                            {{-- Method 1 (works!!!) --}}
                            <td>
                                <a
                                    href="{{ route('backend.kategori-fasilitas.show', $bkf->id) }}">
                                    {{ $bkf->nm_fasilitas }} </a>
                            </td>

                            {{-- td foto --}}

                            <td>
                                <div class="row">
                                    <button class="btn btn-warning"><a style="color: black"
                                            href="{{ route('backend.kategori-fasilitas.edit', $bkf->id) }}">Edit</a></button>
                                    <form action=" {{ route('backend.kategori-fasilitas.destroy', $bkf->id) }} "
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
