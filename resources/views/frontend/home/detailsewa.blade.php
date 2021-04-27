@extends('frontend.layouts.app')
@section('title', 'Travel-Go - Detail')
@section('subtitle', 'Detail Sewa')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home.index') }}"><i class="fa fa-home"></i> Home</a>
                        <a href="{{ route('sewa.index', $property->id) }}">Property Sewa </a>
                        <span>@yield('subtitle')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__slider">
                            <img class="img-fluid" src="{{ Storage::url('public/image/' . $property->gambar1) }}" alt="">
                        </div>

                    </div>
                </div>

                <form action="{{ route('badd.booking') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="nama" value="{{Auth::user()->name}}">
                    <input type="hidden" name="email" value="{{Auth::user()->email}}">
                    <input type="hidden" name="no_telp" value="{{Auth::user()->no_telp}}">
                    <input type="hidden" name="no_ktp" value="{{Auth::user()->no_ktp}}">
                    <input type="hidden" name="harga" value="1600000">
                    <input type="hidden" name="status" value="0">
                    <input type="hidden" name="id_property" value="1">
                    <div class="col-lg-6">
                        <div class="product__details__text">
                            <h3>{{ $property->nama }}</span></h3>
                            <div class="product__details__price">
                                {{ 'Rp. ' . number_format($property->harga, 0, '', '.') }}
                            </div>
                            <p>{{ $property->alamat }}</p>
                            <div class="product__details__button">
                                <div class="date">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span>Checkin:</span>
                                            <div class="pro-date">
                                                <input class="form-control w-55 h-30" type="date" name="checkin_date">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <span>Checkout:</span>
                                            <div class="pro-date">
                                                <input class="form-control w-55 h-30" type="date" name="checkout_date">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="quantity">
                                    <span>Tamu:</span>
                                    <div class="pro-qty">
                                        <input type="text" value="0" id="tamu" name="tamu">
                                    </div>
                                </div>
                                <div class="promotion" id="kode_promotion" style="display: none;">
                                    <span>Promotion:</span>
                                    <div class="row">
                                        <input type="text" value="" name="promotion">
                                    </div>
                                </div>
                                <br>
                                <div class="quantity">
                                    {{-- <button type="button" class="cart-btn" data-toggle="modal" data-target="#book_now">
                                        <span class="icon_bag_alt"></span> Book Now
                                    </button> --}}
                                    <button type="submit" class="cart-btn" data-toggle="modal">
                                        <span class="icon_bag_alt"></span> Book Now
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>

                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <!-- Instagram Begin - Gambar Detail -->
                        <div class="instagram mb-5">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                                        <div class="instagram__item set-bg"
                                            data-setbg="{{ Storage::url('public/image/' . $property->gambar2) }}">
                                            <div class="instagram__text">
                                                <img src="{{ Storage::url('public/image/' . $property->gambar2) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                                        <div class="instagram__item set-bg"
                                            data-setbg="{{ Storage::url('public/image/' . $property->gambar3) }}">
                                            <div class="instagram__text">
                                                <img src="{{ Storage::url('public/image/' . $property->gambar3) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                                        <div class="instagram__item set-bg"
                                            data-setbg="{{ Storage::url('public/image/' . $property->gambar4) }}">
                                            <div class="instagram__text">
                                                <img src="{{ Storage::url('public/image/' . $property->gambar4) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                                        <div class="instagram__item set-bg"
                                            data-setbg="{{ Storage::url('public/image/' . $property->gambar5) }}">
                                            <div class="instagram__text">
                                                <img src="{{ Storage::url('public/image/' . $property->gambar5) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                                        <div class="instagram__item set-bg"
                                            data-setbg="{{ Storage::url('public/image/' . $property->gambar6) }}">
                                            <div class="instagram__text">
                                                <img src="{{ Storage::url('public/image/' . $property->gambar6) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                                        <div class="instagram__item set-bg"
                                            data-setbg="{{ Storage::url('public/image/' . $property->gambar7) }}">
                                            <div class="instagram__text">
                                                <img src="{{ Storage::url('public/image/' . $property->gambar7) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Instagram End - Gambar Detail -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Specification</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <h6>{{ $property->nama }} - {{ $property->kota }}</h6>
                                <p>Tipe Properti
                                    {{ $property->m_property->tipe_property }}
                                    Gedung
                                    {{ $property->m_building->nm_building }}
                                    Tower
                                    {{ $property->tower }}
                                    Lantai
                                    {{ $property->lantai }}
                                    Check-in
                                    {{ date('h:i A', strtotime($property->checkin)) }} -
                                    Check-out
                                    {{ date('h:i A', strtotime($property->checkout)) }}
                                    Biaya Kebersihan
                                    Unit dan linen hanya akan dibersihkan saat check-out. Permintaan khusus selama masa
                                    tinggal Anda tersedia dengan biaya tambahan.
                                    Orang Tambahan
                                    Tambahan orang di luar hunian maksimal akan dikenakan biaya
                                    {{ number_format($property->tambah_orang, 0, '', '.') }} / orang. Harap
                                    dicatat bahwa tempat tidur tambahan tidak akan tersedia dalam skenario ini.
                                    Lainnya
                                    Biaya parkir merupakan tanggung jawab tamu, prediksi biaya mulai dari 5.000 / jam.</p>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <h6>Kamar</h6>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <span>Ukuran: </span>
                                        <p>{{ $property->ukuran }}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Kamar Mandi: </span>
                                        <p>{{ $property->kamar_mandi }}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Tipe Kamar: </span>
                                        <p>{{ $property->tipe_kamar }}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Kasur: </span>
                                        <p>{{ $property->kasur }}</p>
                                    </div>
                                </div>
                                <hr>
                                <h6>Properti</h6>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <span>Tipe Properti: </span>
                                        <p>{{ $property->tipe_property_id }}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Gedung: </span>
                                        <p>{{ $property->nm_building_id }}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Tower: </span>
                                        <p>{{ $property->tower }}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Lantai: </span>
                                        <p>{{ $property->lantai }}</p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <span>Check-in: </span>
                                        <p>{{ date('h:i A', strtotime($property->checkin)) }}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Check-out: </span>
                                        <p>{{ date('h:i A', strtotime($property->checkout)) }}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Biaya Kebersihan: </span>
                                        <p>Rp. {{ number_format($property->biaya_kebersihan, 0, '', '.') }},-</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Orang Tambahan: </span>
                                        <p>Tambahan orang di luar hunian maksimal akan dikenakan biaya
                                            Rp. {{ number_format($property->tambah_orang, 0, '', '.') }},- / orang. Harap
                                            dicatat bahwa tempat tidur tambahan tidak akan tersedia dalam skenario ini.</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Lainnya: </span>
                                        <p>Biaya parkir merupakan tanggung jawab tamu, prediksi biaya mulai dari Rp. 5.000,-
                                            /
                                            jam.</p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <span>Fasilitas Gedung: </span>
                                        <p>- {{ $property->m_fasilitas->nm_fasilitas }}</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>RELATED PRODUCTS</h5>
                    </div>
                </div>
                <div class="row loc-carousel">
                    @foreach ($dataProperty as $p)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="{{ Storage::url('public/image/' . $p->gambar1) }}" alt="package-place">
                                <div class="single-package-item-txt">
                                    <h3>Jakarta <span
                                            class="pull-right">{{ 'Rp. ' . number_format($p->harga, 0, '', '.') }}</span>
                                    </h3>
                                    <div class="packages-para">
                                        <h4>Exclusive {{ $p->tipe_kamar }} {{ $p->m_property->tipe_property }} at
                                            {{ $p->m_building->nm_building }} By
                                            Travel-Go - Jakarta
                                        </h4>
                                    </div>
                                    <!--/.packages-para-->

                                    <div class="about-btn">
                                        <a href="" class="cart-btn"><span class="icon_bag_alt"></span> Book</a>
                                    </div>
                                    <!--/.about-btn-->
                                </div>
                                <!--/.single-package-item-txt-->
                            </div>
                            <!--/.single-package-item-->

                        </div>
                    @endforeach
                    <!--/.col-->
                </div>
                <!--/.row-->
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Modal Booking cancel-->
    {{-- <div class="modal fade" id="book_now" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="nama" class="col-sm-4 col-form-label">Nama Tempat</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="nama"
                                    value="{{ old('nama', $property->nama) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="email"
                                    value="{{ old('email', $property->email) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_telp" class="col-sm-4 col-form-label">No Telepon</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="no_telp"
                                    value="{{ old('no_telp', $property->no_telp) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_ktp" class="col-sm-4 col-form-label">No KTP</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="no_ktp"
                                    value="{{ old('no_ktp', $property->no_ktp) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="checkin_date" class="col-sm-4 col-form-label">Checkin</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="checkin_date"
                                    value="{{ old('checkin_date', $property->checkin_date) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="checkout_date" class="col-sm-4 col-form-label">Checkout</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="checkout_date"
                                    value="{{ old('checkout_date', $property->checkout_date) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="properti" class="col-sm-4 col-form-label">Property</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="properti"
                                    value="{{ old('properti', $property->properti) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="promotion" class="col-sm-4 col-form-label">Promotion</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="promotion"
                                    value="{{ old('promotion', $property->promotion) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tamu" class="col-sm-4 col-form-label">Tamu</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="tamu"
                                    value="{{ old('tamu', $property->tamu) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="harga"
                                    value="{{ old('harga', number_format($property->harga, 0, '', '.')) }}">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="cart-btn btn-danger"><span class="icon_bag_alt"></span> Process</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div> --}}

@endsection

@section('js')
    <script>
        var qty = document.getElementById('tamu');
        var promo = document.getElementById('kode_promotion');

        qty.addEventListener('keypress', function() {
            promo.style.display = 'block'
        })

    </script>
@endsection
