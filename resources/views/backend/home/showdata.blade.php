@extends('backend.layouts.app')
@section('title', 'Admin - Data zProperty')
@section('subtitle', 'Data Property')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="col-lg-12">
                    <div class="card-tools pb-3">
                        <!-- Button trigger modal -->
                        <a href="{{ route('bform.show') }}">
                            <button type="submit" class="btn btn-primary">Add New Property</button>
                        </a>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#add_tipeproperty">Add
                            New Tipe Property</button>
                    </div>
                    <div class="card">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Files</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container">
                                    <div class="card-body p-0">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Join Date</th>
                                                    <th>Nama Property</th>
                                                    <th>Kota</th>
                                                    {{-- <th>Nama Building</th>
                                                    --}}
                                                    <th>Harga</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    @foreach ($data as $d)
                                                <tr>
                                                    <td>{{ $d->tgl_join }}</td>
                                                    <td>{{ $d->nama }}</td>
                                                    <td>{{ $d->kota }}</td>
                                                    {{-- <td>
                                                        {{ $d->m_building->nama_building }}
                                                    </td>
                                                    --}}
                                                    <td>{{ $d->harga }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="{{ route('detail.property', $d->id) }}"
                                                                class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                            <a href="{{ route('edit.property', $d->id) }}"
                                                                class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                            <form action="{{ route('delete.property', $d->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" class="btn btn-danger"><i
                                                                        class="fas fa-trash"></i></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->

                <!-- Modal -->
                <div class="modal fade" id="add_tipeproperty" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Tipe Property</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('badd.tipe') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="tipe_property">Tipe Property</label>
                                        <input type="text" class="form-control" id="tipe_property" name="tipe_property" value="{{ old('tipe_property') }}"
                                            placeholder="Enter Your Name">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Property</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->

        <script>
            $('#modal_property').on('shown.bs.modal', function() {
                $('#myInput').trigger('focus')
            })

        </script>
    @endsection
