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

                <div class="col-lg-6">
                    <div class="product__details__text">
<<<<<<< HEAD
                        <h3></span></h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>( 138 reviews )</span>
=======
                        <h3>{{ $property->nama }}</span></h3>
                        <div class="product__details__price">{{ 'Rp. ' . number_format($property->harga, 0, '', '.') }}
>>>>>>> 9171a87a3ab15223f436ecaa27287be7f0b1dc25
                        </div>
                        <p>{{ $property->alamat }}</p>
                        <div class="product__details__button">
                            <div class="date">
                                <div class="row">
                                <span>Checkin:</span>
                                <div class="pro-qty">
                                    <input class="form-control w-55 h-20" type="date" name="checkin">
                                </div>
                                <span>Checkout:</span>
                                <div class="pro-qty">
                                    <input class="form-control w-55 h-20" type="date" name="checkout">
                                </div>
                            </div>
                                
                            </div>
                            <div class="quantity">
                                <span>Tamu:</span>
                                <div class="pro-qty">
                                    <input type="text" value="1">{{ $property->tambah_orang }}
                                </div>
                            </div>
                            <ul>
                                <li><a href="#"><span class="icon_adjust-horiz"></span></a></li>
                            </ul>
                            <div class="quantity">
                                <a href="#" class="cart-btn"><span class="icon_bag_alt"></span> Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="product__details__tab">
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
                                    14.00 - 24.00
                                    Check-out
                                    12.00
                                    Biaya Kebersihan
                                    Unit dan linen hanya akan dibersihkan saat check-out. Permintaan khusus selama masa
                                    tinggal Anda tersedia dengan biaya tambahan.
                                    Orang Tambahan
                                    Tambahan orang di luar hunian maksimal akan dikenakan biaya
                                    5{{ $property->tambah_orang }} / orang. Harap
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
                                        <p>13.00</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Check-out: </span>
                                        <p>12.00</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Biaya Kebersihan: </span>
                                        <p>{{ number_format($property->biaya_kebersihan, 0, '', '.') }}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Orang Tambahan: </span>
                                        <p>Tambahan orang di luar hunian maksimal akan dikenakan biaya
                                            {{ $property->tambah_orang }} / orang. Harap
                                            dicatat bahwa tempat tidur tambahan tidak akan tersedia dalam skenario ini.</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Lainnya: </span>
                                        <p>Biaya parkir merupakan tanggung jawab tamu, prediksi biaya mulai dari 5.000 /
                                            jam.</p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <span>Fasilitas Gedung: </span>

                                        {{ $property->m_fasilitas->nm_fasilitas }}
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span> Danang</span>
                                </div>
                                <p>Apartemen nya bagus worthed dengan harga yang saya bayarkan cuma saya yang tidak di
                                    sediakan tisu di dalam apartemen tersebut..</p>
                                <hr>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span> Lisa</span>
                                </div>
                                <p>Apartemen nya bagus worthed dengan harga yang saya bayarkan cuma saya yang tidak di
                                    sediakan tisu di dalam apartemen tersebut..</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Begin -->
            <div class="instagram mb-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                            <div class="instagram__item set-bg" data-setbg="img/instagram/insta-1.jpg">
                                <div class="instagram__text">
                                    <img src="{{ asset('assets/frontend/images/bali.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                            <div class="instagram__item set-bg" data-setbg="img/instagram/insta-2.jpg">
                                <div class="instagram__text">
                                    <img src="{{ asset('assets/frontend/images/bali.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                            <div class="instagram__item set-bg" data-setbg="img/instagram/insta-3.jpg">
                                <div class="instagram__text">
                                    <img src="{{ asset('assets/frontend/images/bali.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                            <div class="instagram__item set-bg" data-setbg="img/instagram/insta-4.jpg">
                                <div class="instagram__text">
                                    <img src="{{ asset('assets/frontend/images/bali.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                            <div class="instagram__item set-bg" data-setbg="img/instagram/insta-5.jpg">
                                <div class="instagram__text">
                                    <img src="{{ asset('assets/frontend/images/bali.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                            <div class="instagram__item set-bg" data-setbg="img/instagram/insta-6.jpg">
                                <div class="instagram__text">
                                    <img src="{{ asset('assets/frontend/images/bali.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Instagram End -->

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>RELATED PRODUCTS</h5>
                    </div>
                </div>
                <div class="row loc-carousel">

                    @foreach ($property as $p)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="{{ Storage::url('public/image/' . $property->gambar1) }}" alt="package-place">
                                <div class="single-package-item-txt">
                                    <h3>Jakarta <span
                                            class="pull-right">{{ 'Rp. ' . number_format($property->harga, 0, '', '.') }}</span>
                                    </h3>
                                    <div class="packages-para">
                                        <h4>Exclusive {{ $property->tipe_kamar }} {{ $property->m_property->tipe_property }} at
                                            {{ $property->m_building->nm_building }} By
                                            Travel-Go - Jakarta
                                        </h4>

                                    </div>
                                    <!--/.packages-para-->

                                    <div class="about-btn">
                                        <button class="about-view packages-btn">
                                            book now
                                        </button>
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
@endsection
