@extends('backend.layouts.app')
@section('title', 'Admin - Detail Data Property')
@section('subtitle', 'Detail Data Property')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form role="form">
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="tgl_join">Date Join</label>
                                <div class="col-sm-10">
                                    {{ $property->tgl_join }}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="checkin">Checkin</label>
                                <div class="col-sm-10">
                                    {{ $property->checkin }}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="checkout">Checkout</label>
                                <div class="col-sm-10">
                                    {{ $property->checkout }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Property</label>
                        <div class="col-sm-10">
                            {{ $property->nama }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <div class="col-sm-10">
                            {{ $property->alamat }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="kota">Kota</label>
                            <div class="col-sm-10">
                                {{ $property->kota }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="tipe_property">Tipe Property</label>
                                <div class="col-sm-10">
                                    {{ $property->tipe_property }}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="tower">Tower</label>
                                <div class="col-sm-10">
                                    {{ $property->tower }}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="lantai">Lantai</label>
                                <div class="col-sm-10">
                                    {{ $property->lantai }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nm_building">Building</label>
                        <div class="col-sm-10">
                            {{ $property->nm_building }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nm_fasilitas">Fasilitas</label>
                        <div class="col-sm-10">
                            {{ $property->nm_fasilitas }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="ukuran">Ukuran</label>
                                <div class="col-sm-10">
                                    {{ $property->ukuran }}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="kamar_mandi">Kamar Mandi</label>
                                <div class="col-sm-10">
                                    {{ $property->kamar_mandi }}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="tipe_kamar">Tipe Kamar</label>
                                <div class="col-sm-10">
                                    {{ $property->tipe_kamar }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="kasur">Kasur</label>
                                <div class="col-sm-10">
                                    {{ $property->kasur }}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="jml_unit">Jumlah Unit</label>
                                <div class="col-sm-10">
                                    {{ $property->jml_unit }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">

                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="biaya_kebersihan">Biaya Kebersihan</label>
                                <div class="col-sm-10">
                                    {{ $property->biaya_kebersihan }}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="tambah_orang">Tambahan Orang</label>
                                <div class="col-sm-10">
                                    {{ $property->tambah_orang }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="harga">Harga</label>
                                <div class="col-sm-10">
                                    {{ $property->harga }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gambar1">Cover gambar1</label>
                                <div class="col-sm-10">
                                    <img style="width: 200px" class="img-fluid"
                                        src="{{ Storage::url('public/image/' . $property->gambar1) }}" alt="error">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mx-auto my-auto">
                            <div class="form-group">
                                <label for="gambar2">Gambar 2</label>
                                <img style="width: 200px" class="img-fluid"
                                    src="{{ Storage::url('public/image/' . $property->gambar2) }}" alt="error">
                            </div>
                            <div class="form-group">
                                <label for="gambar3">Gambar 3</label>
                                <img style="width: 200px" class="img-fluid"
                                    src="{{ Storage::url('public/image/' . $property->gambar3) }}" alt="error">
                            </div>
                            <div class="form-group">
                                <label for="gambar4">Gambar 4</label>
                                <img style="width: 200px" class="img-fluid"
                                    src="{{ Storage::url('public/image/' . $property->gambar4) }}" alt="error">
                            </div>
                        </div>
                        <div class="row mx-auto my-auto">
                            <div class="form-group">
                                <label for="gambar5">Gambar 5</label>
                                <img style="width: 200px" class="img-fluid"
                                    src="{{ Storage::url('public/image/' . $property->gambar5) }}" alt="error">
                            </div>
                            <div class="form-group">
                                <label for="gambar6">Gambar 6</label>
                                <img style="width: 200px" class="img-fluid"
                                    src="{{ Storage::url('public/image/' . $property->gambar6) }}" alt="error">
                            </div>
                            <div class="form-group">
                                <label for="gambar7">Gambar 7</label>
                                <img style="width: 200px" class="img-fluid"
                                    src="{{ Storage::url('public/image/' . $property->gambar7) }}" alt="error">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <a href="{{ route('bhome.show') }}" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <!-- /.row -->
@endsection
