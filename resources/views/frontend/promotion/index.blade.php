@extends('frontend.layouts.app')
@section('title', 'Promotion')
@section('content')

    <div class="container">
        <img src="{{ asset('assets/eforlad/images/headlinedoor.jpg') }}" class="img-fluid" alt="gambarh headlinedoor">

        <br>
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/eforlad/images/rom8.jpg') }}">

                    <div class="modal fade" id="exampleModal1" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body"><h5 class="modal-title" id="exampleModalLabel">Promotion CODE VOUCHER 999TG</h5></div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <h5 class="card-title"><b>899.999 / Hari</b></h5>
                        <p class="card-text">Discount Up To 50%</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                            Book Now
                        </button>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/eforlad/images/rom8.jpg') }}">

                    <div class="modal fade" id="exampleModal1" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Promotion CODE VOUCHER 999TG</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <h5 class="card-title"><b>899.999 / Hari</b></h5>
                        <p class="card-text">Discount Up To 50%</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                            Book Now
                        </button>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/eforlad/images/rom8.jpg') }}">

                    <div class="modal fade" id="exampleModal1" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Promotion CODE VOUCHER 999TG</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <h5 class="card-title"><b>899.999 / Hari</b></h5>
                        <p class="card-text">Discount Up To 50%</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                            Book Now
                        </button>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/eforlad/images/rom8.jpg') }}">

                    <div class="modal fade" id="exampleModal1" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Promotion CODE VOUCHER 999TG</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <h5 class="card-title"><b>899.999 / Hari</b></h5>
                        <p class="card-text">Discount Up To 50%</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                            Book Now
                        </button>

                    </div>
                </div>
            </div>
        </div>     
    </div>

@endsection