@extends('backend.layouts.app')
@section('title', 'Admin - Sewa')

@section('content')
    
<div class="container mt-3">
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
                        <th>#</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <Th>Jenis Kelamin</Th>
                        <th>Bagian</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($guru as $guruz)
                        <tr>

                        </tr>
                        <th>{{ $loop->iteration }}</th>
                        {{-- Method 1 (works!!!) --}}
                        <td><a href="{{ route('gurus.show', ['guru' => $guruz->id]) }}"> {{ $guruz->nik }} </a>
                        </td>

                        <td>{{ $guruz->nama }}</td>
                        <td>{{ $guruz->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-Laki' }}</td>
                        <td>{{ $guruz->bagian }}</td>
                        <td>{{ $guruz->alamat == '' ? 'N/A' : $guruz->alamat }}</td>
                        <td>
                            <div class="row">
                                <button class="btn btn-warning"><a style="color: black" href="{{route('gurus.edit', $guruz->id)}}">Edit</a></button>
                                <form action=" {{route('gurus.destroy', $guruz->id)}} " method="POST">
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
                <h1>Tabel Data Guru</h1>
                <a href=" {{ route('gurus.create') }} " class="btn btn-primary"> Tambah Guru </a>
            </div>

            @if (session() -> has('pesan'))
                <div class="alert alert-success">
                    {{ session()->get('pesan') }}
                </div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <Th>Jenis Kelamin</Th>
                        <th>Bagian</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($guru as $guruz)
                        <tr>

                        </tr>
                        <th>{{ $loop->iteration }}</th>
                        {{-- Method 1 (works!!!) --}}
                        <td><a href="{{ route('gurus.show', ['guru' => $guruz->id]) }}"> {{ $guruz->nik }} </a>
                        </td>

                        <td>{{ $guruz->nama }}</td>
                        <td>{{ $guruz->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-Laki' }}</td>
                        <td>{{ $guruz->bagian }}</td>
                        <td>{{ $guruz->alamat == '' ? 'N/A' : $guruz->alamat }}</td>
                        <td>
                            <div class="row">
                                <button class="btn btn-warning"><a style="color: black" href="{{route('gurus.edit', $guruz->id)}}">Edit</a></button>
                                <form action=" {{route('gurus.destroy', $guruz->id)}} " method="POST">
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