@extends('frontend.layouts.app')
@section('title', 'Travel-Go - Sewa')
@section('subtitle', 'Sewa Property')

@section('content')
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home.index') }}"><i class="fa fa-home"></i> Home</a>
                        <span>@yield('subtitle')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        {{-- BY PRICE --}}
                        <div class="sidebar__filter">
                            <div class="section-title">
                                <h4 >by price</h4>
                            </div>
                            <div class="filter-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="33" data-max="99"></div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <p>Price:</p>
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                            <a href="#">Filter</a>
                        </div>

                        {{-- Categories --}}
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-heading active">
                                            <a data-toggle="collapse" data-target="#collapseOne">Fasilitas</a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                            <div class="card-body size__list color__list">
                                                <ul>
                                                    <div for="black">
                                                        <input type="checkbox" id="partner"> 24-Hour Security
                                                        <span class="checkmark"></span>
                                                    </div>
                                                    <div for="black">
                                                        <input type="checkbox" id="partner"> 24-Hours Room Service
                                                        <span class="checkmark"></span>
                                                    </div>
                                                    <div for="black">
                                                        <input type="checkbox" id="partner"> ATM On Site
                                                        <span class="checkmark"></span>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseTwo">Building / Tower</a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body size__list color__list">
                                                <ul>
                                                    <div for="black">
                                                        <input type="checkbox" id="partner"> Pullman
                                                        <span class="checkmark"></span>
                                                    </div>
                                                    <div for="black">
                                                        <input type="checkbox" id="partner"> Mediterania Garden Residence 2
                                                        Tanjung Duren
                                                        <span class="checkmark"></span>
                                                    </div>
                                                    <div for="black">
                                                        <input type="checkbox" id="partner"> Apartemen Belmont Residence
                                                        Puri
                                                        <span class="checkmark"></span>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseThree">Penyedia</a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body size__list color__list">
                                                <ul>
                                                    <div for="black">
                                                        <input type="checkbox" id="partner"> Semua
                                                        <span class="checkmark"></span>
                                                    </div>
                                                    <div for="black">
                                                        <input type="checkbox" id="partner"> Travel-GO
                                                        <span class="checkmark"></span>
                                                    </div>
                                                    <div for="black">
                                                        <input type="checkbox" id="partner"> Partner
                                                        <span class="checkmark"></span>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                        <div class="card mb-9 mb-3" style="max-width: 940px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/frontend/images/bali.jpg') }}" class="card-img img-fluid"
                                        alt="produk">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="card-title mb-0 mt-0"><a href="{{ route('sewa.detail') }}">Opulent 2BR
                                                Residence at Ciputra International Apartment By Travelio - Jakarta</a></h4>
                                        <i class="fa fa-building" aria-hidden="true"> Apartemen</i>
                                        <i class="fa fa-bed" aria-hidden="true"> 2</i>
                                        <i class="fa fa-bath" aria-hidden="true"> 2</i>
                                        <p class="card-text"><small class="text-muted">Gunung Sahari, Jakarta Pusat</small>
                                        </p>
                                        <p>1 unit(s) available</p>
                                        <h1>IDR 100.000</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-9 mb-3" style="max-width: 940px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/frontend/images/bali.jpg') }}" class="card-img img-fluid"
                                        alt="produk">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Exquisite 3BR Residence at Ciputra International
                                                Apartment By Travelio - Jakarta</a></h4>
                                        <i class="fa fa-building" aria-hidden="true"> Apartemen</i>
                                        <i class="fa fa-bed" aria-hidden="true"> 2</i>
                                        <i class="fa fa-bath" aria-hidden="true"> 2</i>
                                        <p class="card-text"><small class="text-muted">Gunung Sahari, Jakarta Pusat</small>
                                        </p>
                                        <p>12 unit(s) available</p>
                                        <h1>IDR 300.000</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 text-center">
                            <div class="pagination__option">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

@endsection
