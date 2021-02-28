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
                    <div class="col6">
                        <form action="{{route('search') }}" class="form-inline pb-3" method="GET">
                            <div class="input-group input-group-sm">
                            <input type="text" value="{{ Request::get('keyword') }}" name="keyword"
                                class="typehead form-control" aria-label="Search" placeholder="Cari Lokasi Kamu..."
                                autofocus autocomplete="off">
                            </div>
                        </form>
                    </div>

                    <div class="shop__sidebar">
                        {{-- BY PRICE --}}
                        <div class="sidebar__filter">
                            <div class="section-title">
                                <h4>by price</h4>
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
                                                    @foreach ($frontendKategoriFasilitas as $fkf)
                                                        <div for="black">
                                                            <input type="checkbox" id="partner"> {{ $fkf->nm_fasilitas }}
                                                            <span class="checkmark"></span>
                                                        </div>
                                                    @endforeach
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
                                                    @foreach ($frontendKategoriBuilding as $fkb)
                                                        <div for="black">
                                                            <input type="checkbox" id="partner"> {{ $fkb->nm_building }}
                                                            <span class="checkmark"></span>
                                                        </div>
                                                    @endforeach
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

                        @forelse ($frontendSewaDataProperty as $fsdp)
                            <div class="card mb-9 mb-3" style="max-width: 940px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="{{ Storage::url('image/' . $fsdp->gambar1) }}"
                                            class="card-img img-fluid" alt="produk">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0 mt-0"><a
                                                    href="{{ route('sewa.index', $fsdp->id) }}">{{ $fsdp->nama }}</a>
                                            </h4>
                                            <i class="fa fa-building" aria-hidden="true">
                                                {{ $fsdp->tipe_property_id }}</i>
                                            <i class="fa fa-bed" aria-hidden="true">{{ $fsdp->kasur }} </i>
                                            <i class="fa fa-bath" aria-hidden="true"> {{ $fsdp->kamar_mandi }}</i>
                                            <p class="card-text"><small class="text-muted">{{ $fsdp->alamat }},
                                                    {{ $fsdp->kota }}</small>
                                            </p>
                                            <p>{{ $fsdp->jml_unit }} unit(s) available</p>
                                            <h1>IDR {{ $fsdp->harga }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <p colspan="8" class="text-center">Maaf, Property Tidak Terdaftar...</p>
                        @endforelse

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
