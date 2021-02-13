@extends('frontend.layouts.app')
@section('title', 'Promotion')
@section('content')
<div class="container">
    <img src="{{ asset('assets/eforlad/images/PROMOTION2.jpg') }}" class="img-fluid" alt="gambarh PROMOTION2">
    <br>
    <h1>Temukan beragam pilihan apartemen terbaik untuk staycation bersama teman dan keluarga !</h1>
    <br>
    <br>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-sm">col-sm
                        <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/eforlad/images/PROMOTION2.jpg') }}" class="img-fluid" alt="gambarh PROMOTION2">
                            <div class="card-body">
                                <h5 class="card-title">CONDOMINUM SUDIRMAN</h5>
                                <h4><s>1.200.000</s></h4>
                                <h2><b>980.000</b><h2>
                                <a href="#" class="btn btn-primary">Duluxe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">col-sm
                        <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/eforlad/images/PROMOTION2.jpg') }}" class="img-fluid" alt="gambarh PROMOTION2">
                            <div class="card-body">
                                <h5 class="card-title">CONDOMINUM SUDIRMAN</h5>
                                <h4><s>1.200.000</s></h4>
                                <h2><b>980.000</b><h2>
                                <a href="#" class="btn btn-primary">Duluxe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">col-sm
                        <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/eforlad/images/PROMOTION2.jpg') }}" class="img-fluid" alt="gambarh PROMOTION2">
                            <div class="card-body">
                                <h5 class="card-title">CONDOMINUM SUDIRMAN</h5>
                                <h4><s>1.200.000</s></h4>
                                <h2><b>980.000</b><h2>
                                <a href="#" class="btn btn-primary">Duluxe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">col-sm
                        <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/eforlad/images/PROMOTION2.jpg') }}" class="img-fluid" alt="gambarh PROMOTION2">
                            <div class="card-body">
                                <h5 class="card-title">CONDOMINUM SUDIRMAN</h5>
                                <h4><s>1.200.000</s></h4>
                                <h2><b>980.000</b><h2>
                                <a href="#" class="btn btn-primary">Duluxe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">col-sm
                        <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/eforlad/images/PROMOTION2.jpg') }}" class="img-fluid" alt="gambarh PROMOTION2">
                            <div class="card-body">
                                <h5 class="card-title">CONDOMINUM SUDIRMAN</h5>
                                <h4><s>1.200.000</s></h4>
                                <h2><b>980.000</b><h2>
                                <a href="#" class="btn btn-primary">Duluxe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">col-sm
                        <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/eforlad/images/PROMOTION2.jpg') }}" class="img-fluid" alt="gambarh PROMOTION2">
                            <div class="card-body">
                                <h5 class="card-title">CONDOMINUM SUDIRMAN</h5>
                                <h4><s>1.200.000</s></h4>
                                <h2><b>980.000</b><h2>
                                <a href="#" class="btn btn-primary">Duluxe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
        
</div>
        

@endsection