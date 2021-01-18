@extends('frontend.layouts.app')
@section('title', 'Travel-Go - Home')
@section('content')
    <section >
        <div class="banner-main">
        {{-- <img class="img-fluid" src="{{asset('assets/eforlad/images/banner.jpg')}}" alt="banner"/> --}}
        <img src="{{asset('assets/frontend/images/bali.jpg')}}" alt="banner"/>
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
                                <label >Location</label>
                                <input class="form-control" placeholder="" type="text" name="">
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <label >Start Date</label>
                                <input class="form-control" placeholder="Any" type="date" name="Any">
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <label >End Date</label>
                                <input class="form-control" placeholder="Any" type="date" name="Any">
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <label >Duration</label>
                                <input class="form-control" placeholder="1 malam" type="text" name="duration">
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <label >All Property Type</label>
                                <select class="form-control" name="type">
                                    <option>Select</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                                
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <label >All Room Type</label>
                                <select class="form-control" name="type">
                                    <option>Select</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                            <a href="#">Search</a>
                        </div>
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
                    <span> Setiap Apartemen by Travel-GO Property Management, baik furnished dan unfurnished melewati tahap standarisasi dan perbaikan berkala. Pastikan memilih apartemen by Travel-GO Property Management untuk Anda yang membutuhkan Apartemen dengan standarisasi terjamin.</span>
                </div>
            </div>
        </div>
        </div>
        <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="about-box">
                    <p> <span>Travelio Realty menghubungkan penyewa dengan pemilik dengan cara yang revolusioner dan servis profesional. Dengan fitur foto 360°, inspeksi langsung serta opsi pembayaran yang fleksibel, penyewaan tempat tinggal tidak pernah semudah ini.<br>Dan ada promosinya juga lho terbatas check sekarang juga !</span></p>
                    <div class="palne-img-area">
                        <img src="{{asset('assets/eforlad/images/plane-img.png')}}" alt="images">
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#promotion">Check Promotions</a>
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
                            <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span> 
                        </div>
                    </div>
                </div>
            </div><!--/.gallery-header-->
            <div class="packages-content">
                
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="{{asset('assets/tournest/assets/images/packages/p1.jpg')}}" alt="package-place">
                            <div class="single-package-item-txt">
                                <h3>Jakarta <span class="pull-right">$499</span></h3>
                                <div class="packages-para">
                                    <h4>Exclusive Studio Apartment at Woodland Park Residence By Travelio - Jakarta</h4>
                                    
                                </div><!--/.packages-para-->
                                
                                <div class="about-btn">
                                    <button  class="about-view packages-btn">
                                        book now
                                    </button>
                                </div><!--/.about-btn-->
                            </div><!--/.single-package-item-txt-->
                        </div><!--/.single-package-item-->

                    </div><!--/.col-->

                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="{{asset('assets/tournest/assets/images/packages/p1.jpg')}}" alt="package-place">
                            <div class="single-package-item-txt">
                                <h3>Jakarta <span class="pull-right">$499</span></h3>
                                <div class="packages-para">
                                    <h4>Exclusive Studio Apartment at Woodland Park Residence By Travelio - Jakarta</h4>
                                    
                                </div><!--/.packages-para-->
                                
                                <div class="about-btn">
                                    <button  class="about-view packages-btn">
                                        book now
                                    </button>
                                </div><!--/.about-btn-->
                            </div><!--/.single-package-item-txt-->
                        </div><!--/.single-package-item-->

                    </div><!--/.col-->

                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="{{asset('assets/tournest/assets/images/packages/p1.jpg')}}" alt="package-place">
                            <div class="single-package-item-txt">
                                <h3>Jakarta <span class="pull-right">$499</span></h3>
                                <div class="packages-para">
                                    <h4>Exclusive Studio Apartment at Woodland Park Residence By Travelio - Jakarta</h4>
                                    
                                </div><!--/.packages-para-->
                                
                                <div class="about-btn">
                                    <button  class="about-view packages-btn">
                                        book now
                                    </button>
                                </div><!--/.about-btn-->
                            </div><!--/.single-package-item-txt-->
                        </div><!--/.single-package-item-->

                    </div><!--/.col-->

                </div><!--/.row-->
                        
            </div><!--/.packages-content-->
        </div><!--/.container-->

    </section><!--/.packages-->
    <!--packages end-->
    <!--London -->
    <div class="London">
        <div class="container-fluid">
        <div class="London-img">
            <figure><img src="{{asset('assets/eforlad/images/London.jpg')}}" alt="img"/></figure>
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
                    <h2>The Best Locations</h2>
                    <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span> 
                </div>
            </div>
        </div>
        <section id="demos">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img class="img-responsive" src="{{asset('assets/eforlad/images/1.jpg')}}" alt="#" />
                        <h3>Holiday Tour</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{asset('assets/eforlad/images/2.jpg')}}" alt="#" />
                        <h3>New York</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{asset('assets/eforlad/images/3.jpg')}}" alt="#" />
                        <h3>London</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{asset('assets/eforlad/images/2.jpg')}}" alt="#" />
                        <h3>Holiday Tour</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </div>
    <!-- end Tours -->
@endsection