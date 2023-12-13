@extends('layouts.frontend.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn our-story-hero" data-wow-delay="0.1s">
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

    <!-- Features Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success"  style="border-radius: 5px" src="/frontend-assets/images/home01.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Our Story</h1>
                    <p class="mb-4">With a vision to cater to the residential and commercial housing needs of the country, Mr M I Moeen established Empower Developments Ltd in 2023.</p>
                    <p class="mb-4">The company has taken in hand a number of exclusive residential projects in different prime locations of the city.</p>
                    <p class="mb-4">With the unification of quality, commitment to delivering excellence, superior customer service, and ethical business practice, the company, within a very short time will be one of the leading Real Estate companies in Bangladesh Insha’Allah.</p>
                    <p class="mb-4">Empower Developments Ltd is equipped with a team of competent professionals and dynamic experts. Our goal is to provide the desired service to landowners and buyers through the efficient use of skilled manpower and resources. We are committed to a process of continuous process of improvement to earn the confidence and satisfaction of our valued customers.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
@endsection

