@extends('backend.layouts.app')
@section('title', 'Admin - HOME')
@section('subtitle', ' Halaman Home')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Welcome to Admin Travel-GO Page ^-^</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Ini Halaman Admin Travel-GO</h6>

                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                                <p>Klik kanan atas untuk informasi lebih lanjut !</p>
                            <a href="{{ route('home.index') }}" class="btn btn-primary">Go to Frontend</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
