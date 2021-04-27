@extends('frontend.layouts.app')
@section('title', 'Promotion')
@section('content')
<<<<<<< HEAD

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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#promo1">
                            Book Now
                        </button>
                    </div>
                    <div class="modal fade" id="promo1" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h1>Promotion CODE VOUCHER 999TG</h1>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Book Now</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="card-body" style="text-align: center;">
                        <h5 class="card-title"><b>899.999 / Hari</b></h5>
                        <p class="card-text">Discount Up To 50%</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                            Book Now
                        </button>

                    </div> -->
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#promo1">
                            Book Now
                        </button>
                    </div>
                    <div class="modal fade" id="promo1" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h1>Promotion CODE VOUCHER 999TG</h1>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Book Now</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card-body" style="text-align: center;">
                        <h5 class="card-title"><b>899.999 / Hari</b></h5>
                        <p class="card-text">Discount Up To 50%</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                            Book Now
                        </button>

                    </div> -->
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#promo1">
                            Book Now
                        </button>
                    </div>
                    <div class="modal fade" id="promo1" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h1>Promotion CODE VOUCHER 999TG</h1>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Book Now</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card-body" style="text-align: center;">
                        <h5 class="card-title"><b>899.999 / Hari</b></h5>
                        <p class="card-text">Discount Up To 50%</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                            Book Now
                        </button> -->
<!-- 
                    </div> -->
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#promo1">
                            Book Now
                        </button>
                    </div>
                    <div class="modal fade" id="promo1" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h1>Promotion CODE VOUCHER 999TG</h1>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Book Now</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card-body" style="text-align: center;">
                        <h5 class="card-title"><b>899.999 / Hari</b></h5>
                        <p class="card-text">Discount Up To 50%</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                            Book Now
                        </button>

                    </div> -->
                </div>
            </div>
        </div>     
    </div>

@endsection
=======
    <div class="container">
        <img src="{{ asset('assets/eforlad/images/headline.jpg') }}" class="img-fluid" alt="gambarh headlinedoor">
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/eforlad/images/rom.jpg') }}">
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title"><b>899.999 / Hari</b></h5>
                    <p class="card-text">Discount Up To 50%</p>
                    <a href="#" class="btn btn-warning">OPEN THE DOOR NOW</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/eforlad/images/rom2.jpg') }}">
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title"><b>599.999 / Hari</b></h5>
                    <p class="card-text">Discount Up To 50%</p>
                    <a href="#" class="btn btn-warning">OPEN THE DOOR NOW</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/eforlad/images/rom3.jpg') }}">
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title"><b>799.999 / Hari</b></h5>
                    <p class="card-text">Discount Up To 50%</p>
                    <a href="#" class="btn btn-warning">OPEN THE DOOR NOW</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/eforlad/images/rom4.jpg') }}">
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title"><b>999.999 / Hari</b></h5>
                    <p class="card-text">Discount Up To 50%</p>
                    <a href="#" class="btn btn-warning">OPEN THE DOOR NOW</a>
                </div>
            </div>
        </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/eforlad/images/rom5.jpg') }}">
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title"><b>1.299.999 / Hari</b></h5>
                    <p class="card-text">Discount Up To 50%</p>
                    <a href="#" class="btn btn-warning">OPEN THE DOOR NOW</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/eforlad/images/rom6.jpg') }}">
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title"><b>1.599.999 / Hari</b></h5>
                    <p class="card-text">Discount Up To 50%</p>
                    <a href="#" class="btn btn-warning">OPEN THE DOOR NOW</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/eforlad/images/rom7.jpg') }}">
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title"><b>1.399.999 / Hari</b></h5>
                    <p class="card-text">Discount Up To 50%</p>
                    <a href="#" class="btn btn-warning">OPEN THE DOOR NOW</a>
                </div>
            </div>
        </div>
    
    </div>
@endsection
>>>>>>> 776b4abca99408173f31a703d8b41970e6a9ef44
