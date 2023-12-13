@extends('layouts.frontend.app')

@section('content')
    <!-- landing page Start -->
    <div class="container-fluid interior-main-landing">
        <div class="container">
            <div class=" g-5 interior-main-text">
                <h1 class="display-5 text-white text-center mb-5">Choose your Interior service</h1>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s"></div>
                <div class="col-lg-4 wow fadeInUp text-center" data-wow-delay="0.1s">
                    <a href="{{route('interior-residential')}}" class="btn btn-dark p-3 me-4">RESIDENTIAL</a>
                    <a href="{{route('interior-commercial')}}" class="btn btn-dark p-3">COMMERCIAL</a>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s"></div>
            </div>
        </div>
    </div>
    <!-- landing page End -->
@endsection
