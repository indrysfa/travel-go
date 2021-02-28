@extends('frontend.layouts.app')
@section('title', 'Travel-Go - Home')
@section('content')
    <div class="container-fluid" id="amazing-room">
        <section>
            <div class="banner-main">
                {{-- <img class="img-fluid" src="{{ asset('assets/eforlad/images/banner.jpg') }}"
                alt="banner" /> --}}
                <img src="{{ asset('assets/eforlad/images/bell.jpg') }}" alt="banner" />
                <div class="container">
                    <div class="text-bg" id="sewa-search">
                        <h1>Indonesian<br><strong class="white">Amazing Room</strong></h1>
                        <div class="container">
                            <form class="main-form">
                                <h3>Find Your Room</h3>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="col6">
                                                    <form action="{{route('search') }}" class="form-inline pb-3" method="GET">
                                                        <div class="input-group input-group-sm">
                                                        <input type="text" value="{{ Request::get('keyword') }}" name="keyword"
                                                            class="typehead form-control" aria-label="Search" placeholder="Cari Lokasi Kamu..."
                                                            autofocus autocomplete="off">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            {{-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <label>Start Date</label>
                                            <input class="form-control" placeholder="Any" type="date" name="Any">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <label>End Date</label>
                                            <input class="form-control" placeholder="Any" type="date" name="Any">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <label>Duration</label>
                                            <input class="form-control" placeholder="1 malam" type="text" name="duration">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <label>All Property Type</label>
                                            <select class="form-control" name="type">
                                                <option>Select</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>

                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <label>All Room Type</label>
                                            <select class="form-control" name="type">
                                                <option>Select</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                    <a href="{{ route('frontend.sewa.index') }}">Search</a>
                                </div> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about -->
        <div id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="titlepage">
                            <h2>About our travel agency</h2>
                            <span> Setiap Apartemen by Travel-GO Property Management, baik furnished dan unfurnished
                                melewati
                                tahap standarisasi dan perbaikan berkala. Pastikan memilih apartemen by Travel-GO Property
                                Management untuk Anda yang membutuhkan Apartemen dengan standarisasi terjamin.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="about-box">
                                <p> <span>Travel-Go Realty menghubungkan penyewa dengan pemilik dengan cara yang
                                        revolusioner
                                        dan servis profesional. Dengan fitur foto 360°, inspeksi langsung serta opsi
                                        pembayaran
                                        yang fleksibel, penyewaan tempat tinggal tidak pernah semudah ini.<br>Dan ada
                                        promosinya
                                        juga lho terbatas check sekarang juga !</span></p>
                                <div class="palne-img-area">
                                    <img src="{{ asset('assets/eforlad/images/plane-img.png') }}" alt="images">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#promotion">Check Promotions</a>
                </div>
            </div>
        </div>
        <!-- end about -->
        <!--packages start-->
        <section id="pack" class="packages">
            <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>Best Apartments Today</h2>
                                <span>It is a long established fact that a reader will be distracted by the readable content
                                    of
                                    a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal distribution of letters,</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.gallery-header-->
                <div class="packages-content">
                    <div class="row justify-content-end">
                        <div class="travel-select-icon">
                            <select class="form-control ">
                                <option value="default">Jakarta</option><!-- /.option-->
                                <option value="turkey">Bali</option><!-- /.option-->
                                <option value="russia">Bandung</option><!-- /.option-->
                                <option value="egept">Semarang</option><!-- /.option-->
                            </select><!-- /.select-->
                        </div><!-- /.travel-select-icon -->
                    </div>
                    <div class="row loc-carousel">

                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="{{ asset('assets/tournest/assets/images/packages/p1.jpg') }}"
                                    alt="package-place">
                                <div class="single-package-item-txt">
                                    <h3>Jakarta <span class="pull-right">$499</span></h3>
                                    <div class="packages-para">
                                        <h4>Exclusive Studio Apartment at Woodland Park Residence By Travel-Go - Jakarta
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
                        <!--/.col-->

                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="{{ asset('assets/tournest/assets/images/packages/p1.jpg') }}"
                                    alt="package-place">
                                <div class="single-package-item-txt">
                                    <h3>Jakarta <span class="pull-right">$499</span></h3>
                                    <div class="packages-para">
                                        <h4>Exclusive Studio Apartment at Woodland Park Residence By Travel-Go - Jakarta
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
                        <!--/.col-->

                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="{{ asset('assets/tournest/assets/images/packages/p1.jpg') }}"
                                    alt="package-place">
                                <div class="single-package-item-txt">
                                    <h3>Jakarta <span class="pull-right">$499</span></h3>
                                    <div class="packages-para">
                                        <h4>Exclusive Studio Apartment at Woodland Park Residence By Travel-Go - Jakarta
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
                        <!--/.col-->

                    </div>
                    <!--/.row-->

                </div>
                <!--/.packages-content-->
            </div>
            <!--/.container-->

        </section>
        <!--/.packages-->
        <!--packages end-->
        <!--London -->
        <div class="London">
            <div class="container-fluid">
                <div class="London-img">
                    <figure><img src="{{ asset('assets/eforlad/images/London.jpg') }}" alt="img" /></figure>
                </div>
            </div>
        </div>
        <!-- end London -->
        <!--Tours -->
        <div class="Tours">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>The Best Solutiouns</h2>
                            <span>It is a long established fact that a reader will be distracted by the readable content of
                                a
                                page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less
                                normal distribution of letters,</span>
                        </div>
                    </div>
                </div>
                <section id="demos">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('assets/eforlad/images/1.jpg') }}"
                                        alt="#" />
                                    <h3>Tinggal di Apartemen Gak Bikin Repot
                                    </h3>
                                    <p style="text-align: justify">Bermodalkan tempat strategis, jelas Anda dapat mengakses
                                        apartemen dengan mudah. Bahkan beberapa apartemen di kota besar sudah terintegrasi
                                        dengan jalur transportasi modern seperti kereta listrik, MRL/LRT atau bus kota. Hal
                                        ini
                                        jelas membuat Anda tak perlu repot saat ingin ke mall atau bepergian tanpa kendaraan
                                        pribadi sekalipun. Jika tinggal di apartemen, anda tidak membutuhkan ruangan yang
                                        luas.
                                        Kebanyakan orang memilih unit apartemen karena kemudahan akses, keamanan, dan
                                        fasilitas.
                                        Fasilitas yang disediakan juga disesuaikan dengan kebutuhan gaya hidup jaman
                                        sekarang.
                                        Seperti fasilitas komersial area, minimarket, kolam renang, jogging track dan
                                        fitness
                                        center. Keuntungan lainnya jika Anda memilih apartemen ialah keamanan yang terjamin.
                                        Ada
                                        satu hal yang tak akan bisa didapat jika tinggal di rumah yakni pemandangan keren
                                        dari
                                        ketinggian. Anda bisa melihat warna warni lampu ketika malam hari dan melihat
                                        matahari
                                        pagi dari balkon apartemen Anda. Bagaimana ? Tertarik tinggal di apartemen ?</p>
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('assets/eforlad/images/2.jpg') }}"
                                        alt="#" />
                                    <h3>Mengapa Pilih Apartemen Travel-Go Property Management ?</h3>
                                    <p style="text-align: justify">Di Travel-Go.com, anda dapat menemukan dua type
                                        akomodasi.
                                        Akomodasi By Travel-Go dan Independent Listing. Akomodasi bertuliskan By Travel-Go
                                        merupakan akomodasi yang di kelola langsung oleh team terlatih dari Travel-Go dan
                                        dengan
                                        memilih apartemen yang dikelola langsung oleh Travel-Go, anda mendapatkan assurance
                                        bahwa anda akan mendapatkan standard dan fasilitas sesuai dengan yang kami janjikan.
                                        Untuk menyesuaikan dengan kebutuhan Anda, kami menyewakan unit kami secara sewa
                                        harian,
                                        bulanan dan tahunan.<br>
                                        Sebelum proses pengelolaan, setiap Apartemen melalui proses standarisasi dan
                                        verifikasi
                                        oleh tim kami untuk menjamin kenyamanan Anda. Anda pun bisa memilih unit dengan 3
                                        kelas
                                        yang berbeda. Kami menyediakan tiga segmentasi kelas standard, deluxe dan premium.
                                        Selain itu, harga yang Travel-Go tawarkan dengan unit apartemen yang telah
                                        berstandar
                                        sangat bersaing dengan di tempat lain.</p>
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('assets/eforlad/images/3.jpg') }}"
                                        alt="#" />
                                    <h3>Keuntungan Sewa Apartemen Harian, Bulanan dan Tahunan di Travel-Go</h3>
                                    <p style="text-align: justify">Berikut keuntungan jika anda sewa harian unit apartemen
                                        di
                                        Travel-Go : Unit yang kami kelola sudah di standarisasi dan dilengkapi dengan
                                        amenities,
                                        linen dengan kualitas berbintang, wifi dan sudah lengkap dengan furniture seperti
                                        AC,
                                        TV, alat dapur dan makan. Harganya juga sangat bersaing dengan yang lain.<br>
                                        Untuk yang menyewa bulanan dan tahunan di Travel-Go unit juga sudah di standarisasi,
                                        full furnished dan sudah lengkap dengan peralatan dapur. Jika menyewa lebih dari
                                        sebulan, Anda dapat membayarnya per bulan. Dan jika Anda menyewa tahunan, Anda dapat
                                        memanfaatkan fasilitas cicilan bayar TANPA menggunakan kartu kredit. Adapun juga
                                        kami
                                        berikan opsi untuk sewa apartemen berikut tanpa atau menggunakan sprei dan jasa
                                        pembersihan.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- end Tours -->
    </div>
@endsection
