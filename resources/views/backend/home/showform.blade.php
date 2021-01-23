@extends('backend.layouts.app')
@section('title', 'Admin - Input Data Property')
@section('subtitle', 'Input Data Property')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form role="form" action="{{route('badd.property')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="tgl_join">Date Join</label>
                        <input type="date" class="form-control" id="tgl_join" name="tgl_join" value="{{ old('tgl_join') }}"
                            placeholder="Enter Your Date">
                    </div>
                    <div class="form-group">
                        <label for="nm_property">Nama Property</label>
                        <input type="text" class="form-control" id="nm_property" name="nm_property" value="{{ old('nm_property') }}"
                            placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}"
                            placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota" value="{{ old('kota') }}"
                            placeholder="Enter Your City">
                    </div>
                    <div class="form-group">
                        <label for="building">Building</label>
                        <input type="text" class="form-control" id="building" name="building" value="{{ old('building') }}"
                            placeholder="Enter Your City">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="{{ old('harga') }}"
                            placeholder="Enter Your Price">
                    </div>
                    <div class="form-group">
                        <label for="checkin">Checkin</label>
                        <input type="date" class="form-control" id="checkin" name="checkin" value="{{ old('checkin') }}">
                        <label for="checkout">Checkout</label>
                        <input type="date" class="form-control" id="checkout" name="checkout" value="{{ old('checkout') }}">
                    </div>
                    <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <input type="text" class="form-control" id="ukuran" name="ukuran" value="{{ old('ukuran') }}"
                            placeholder="Enter Your Size">
                    </div>
                    <div class="form-group">
                        <label for="kamar_mandi">Kamar Mandi</label>
                        <input type="text" class="form-control" id="kamar_mandi" name="kamar_mandi" value="{{ old('kamar_mandi') }}"
                            placeholder="Enter Your Size">
                    </div>
                    <div class="form-group">
                        <label for="tipe_kamar">Tipe Kamar</label>
                        <input type="text" class="form-control" id="tipe_kamar" name="tipe_kamar" value="{{ old('tipe_kamar') }}"
                            placeholder="Enter Your Size">
                    </div>
                    <div class="form-group">
                        <label for="kasur">Kasur</label>
                        <input type="text" class="form-control" id="kasur" name="kasur" value="{{ old('kasur') }}"
                            placeholder="Enter Your Size">
                    </div>
                    <div class="form-group">
                        <label for="tower">Tower</label>
                        <input type="text" class="form-control" id="tower" name="tower" value="{{ old('tower') }}"
                            placeholder="Enter Your Size">
                    </div>
                    <div class="form-group">
                        <label for="number">Lantai</label>
                        <input type="text" class="form-control" id="lamtai" name="lamtai" value="{{ old('lamtai') }}"
                            placeholder="Enter Your Size">
                    </div>
                    <div class="form-group">
                        <label for="biaya_kebersihan">Biaya Kebersihan</label>
                        <input type="number" class="form-control" id="biaya_kebersihan" name="biaya_kebersihan" value="{{ old('biaya_kebersihan') }}"
                            placeholder="Enter Your Size">
                    </div>
                    <div class="form-group">
                        <label for="tambah_orang">Tambahan Orang</label>
                        <input type="number" class="form-control" id="tambah_orang" name="tambah_orang" value="{{ old('tambah_orang') }}"
                            placeholder="Enter Your Size">
                    </div>
                    <div class="form-group">
                        <label for="tipe_property">Tipe Property</label>
                        <select name="tipe_property_id" id="tipe_property_id" class="form-control">
                            @foreach ($data as $d)
                            <option value="{{ $d->id }}" {{ old('tipe_property_id') == "$d->tipe_property" ? selected : '' }}>
                                {{$d->tipe_property}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="submit" class="btn btn-danger"><a 
                            href="">Cancel</a></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.row -->
@endsection
