@extends('layouts.frontend.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn project-hero" data-wow-delay="0.1s">
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

    <!-- projects Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5">We Provided Residential & Commercial Lift <Service></Service></h1>
                <p class="mb-5">Find your dream property from our featured luxury properties built at prime locations in Dhaka. From this list of ongoing, upcoming and completed properties (flat / apartments), choose the one that best resonates with your heart.</p>
            </div>
            <div class="row g-4 pb-5 wow fadeInUp">
                <div class="owl-carousel owl-theme">
                    <div class="item px-3">
                        <img class="img-fluid" src="/frontend-assets/images/lift/lift-1.jpeg" alt="lift-1" loading="lazy"/>
                    </div>
                    <div class="item px-3">
                        <img class="img-fluid" src="/frontend-assets/images/lift/lift-2.jpeg" alt="lift-2" loading="lazy"/>
                    </div>
                    <div class="item px-3">
                        <img class="img-fluid" src="/frontend-assets/images/lift/lift-3.jpeg" alt="lift-3" loading="lazy"/>
                    </div>
                    <div class="item px-3">
                        <img class="img-fluid" src="/frontend-assets/images/lift/lift-4.jpeg" alt="lift-4" loading="lazy"/>
                    </div>
                    <div class="item px-3">
                        <img class="img-fluid" src="/frontend-assets/images/lift/lift-5.jpeg" alt="lift-5" loading="lazy"/>
                    </div>
                    <div class="item px-3">
                        <img class="img-fluid" src="/frontend-assets/images/lift/lift-6.jpeg" alt="lift-6" loading="lazy"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project End -->
@endsection
@section('page-script')
    <script>
        $(function () {
            // Owl Carousel
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true,
                responsive:{
                    380:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:2,
                        nav:false
                    },
                    1000:{
                        items:3,
                        nav:true,
                        loop:false
                    }
                }
            });
        });
    </script>
@endsection
