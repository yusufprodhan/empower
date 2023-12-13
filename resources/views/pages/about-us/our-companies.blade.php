@extends('layouts.frontend.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn mission-vision-hero" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">{{$title}}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- our companies Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <button type="button" class="btn btn-success p-4" style=" font-size: 14px; border-radius: 10px"> Empower Constructions Ltd.</button>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <button type="button" class="btn btn-success p-4" style=" font-size: 14px; border-radius: 10px">Empower Property Management.</button>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <button type="button" class="btn btn-success p-4" style=" font-size: 14px; border-radius: 10px">Empower Interior Design Ltd.</button>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <button type="button" class="btn btn-success p-4" style=" font-size: 14px; border-radius: 10px" >Empower Agro Ltd.</button>
                </div>
            </div>
        </div>
    </div>
    <!-- our companies End -->
@endsection

