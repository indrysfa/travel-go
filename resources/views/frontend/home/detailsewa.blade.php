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
                        <a href="{{ route('sewa.show') }}">Property Sewa </a>
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
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/bali.jpg') }}" alt="">
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3>Exquisite 3BR Residence at Ciputra International Apartment By Travelio - Jakarta <span>Jl. Lkr.
                                Luar Barat No.101, Kembangan Utara, Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota
                                Jakarta 11740 - ID properti: C13367C15</span></h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>( 138 reviews )</span>
                        </div>
                        <div class="product__details__price">IDR 765.000 <span>IDR 1.765.000</span></div>
                        <p>Unit ini menawarkan hunian luas dengan 3 kamar tidur dan 2 kamar mandi di Apartemen Ciputra
                            International. Cocok untuk Anda huni bersama keluarga Anda.</p>
                        <div class="product__details__button">
                            <div class="quantity">
                                <span>Checkin:</span>
                                <input class="form-control w-50 h-25" placeholder="Start" type="date" name="Start">
                                <span>Checkout:</span>
                                <input class="form-control w-50 h-25" placeholder="End" type="date" name="End">
                            </div>
                            <div class="quantity">
                                <span>Tamu:</span>
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                            <ul>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
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
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Reviews ( 2 )</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <h6>EXQUISITE 3BR RESIDENCE AT CIPUTRA INTERNATIONAL APARTMENT BY TRAVELIO - JAKARTA</h6>
                                <p>Tipe Properti
                                    Apartemen
                                    Gedung
                                    Ciputra International
                                    Tower
                                    AMSTERDAM
                                    Lantai
                                    38,38
                                    Check-in
                                    14.00 - 24.00
                                    Check-out
                                    12.00
                                    Biaya Kebersihan
                                    Unit dan linen hanya akan dibersihkan saat check-out. Permintaan khusus selama masa
                                    tinggal Anda tersedia dengan biaya tambahan.
                                    Orang Tambahan
                                    Tambahan orang di luar hunian maksimal akan dikenakan biaya 50.000 / orang. Harap
                                    dicatat bahwa tempat tidur tambahan tidak akan tersedia dalam skenario ini.
                                    Lainnya
                                    Biaya parkir merupakan tanggung jawab tamu, prediksi biaya mulai dari 5.000 / jam.</p>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <h6>Kamar</h6>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <span>Ukuran: </span>
                                        <p>121</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Kamar Mandi: </span>
                                        <p>1</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Tipe Kamar: </span>
                                        <p>Seluruh Rumah / Apartemen</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Kasur: </span>
                                        <p>3 Queen (160x200)</p>
                                    </div>
                                </div>
                                <hr>
                                <h6>Properti</h6>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <span>Tipe Properti: </span>
                                        <p>Apartemen</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Gedung: </span>
                                        <p>Ciputra International</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Tower: </span>
                                        <p>AMSTERDAM</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Lantai: </span>
                                        <p>47</p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <span>Check-in: </span>
                                        <p>Apartemen</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Check-out: </span>
                                        <p>Ciputra International</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Biaya Kebersihan: </span>
                                        <p>Unit dan linen hanya akan dibersihkan saat check-out. Permintaan khusus selama
                                            masa tinggal Anda tersedia dengan biaya tambahan.</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>Orang Tambahan: </span>
                                        <p>Tambahan orang di luar hunian maksimal akan dikenakan biaya 50.000 / orang. Harap
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
                                        <p>Swimming Pool</p>
                                        <p>Access Card</p>
                                        <p>Fitness Center</p>
                                        <p>CCTV In Pubpc Area</p>
                                        <p>24-Hour Security</p>
                                        <p>Elevator</p>
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
                                <p>Apartemen nya bagus worthed dengan harga yang saya bayarkan cuma saya yang tidak di sediakan tisu di dalam apartemen tersebut..</p>
                                <hr>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span> Lisa</span>
                                </div>
                                <p>Apartemen nya bagus worthed dengan harga yang saya bayarkan cuma saya yang tidak di sediakan tisu di dalam apartemen tersebut..</p>
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

                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="{{ asset('assets/tournest/assets/images/packages/p1.jpg') }}" alt="package-place">
                            <div class="single-package-item-txt">
                                <h3>Jakarta <span class="pull-right">$499</span></h3>
                                <div class="packages-para">
                                    <h4>Exclusive Studio Apartment at Woodland Park Residence By Travel-Go - Jakarta</h4>

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
                    <!--/.col-->

                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="{{ asset('assets/tournest/assets/images/packages/p1.jpg') }}" alt="package-place">
                            <div class="single-package-item-txt">
                                <h3>Jakarta <span class="pull-right">$499</span></h3>
                                <div class="packages-para">
                                    <h4>Exclusive Studio Apartment at Woodland Park Residence By Travel-Go - Jakarta</h4>

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
                    <!--/.col-->

                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="{{ asset('assets/tournest/assets/images/packages/p1.jpg') }}" alt="package-place">
                            <div class="single-package-item-txt">
                                <h3>Jakarta <span class="pull-right">$499</span></h3>
                                <div class="packages-para">
                                    <h4>Exclusive Studio Apartment at Woodland Park Residence By Travel-Go - Jakarta</h4>

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
                    <!--/.col-->

                </div>
                <!--/.row-->
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
@endsection
