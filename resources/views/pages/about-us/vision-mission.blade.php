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

    <!-- vison Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success"  style="border-radius: 5px" src="/frontend-assets/images/our-vision/vision.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Our Vision</h1>
                    <p class="mb-4">Our Vision To set Empower Developments as an icon for both clients and competitors in the fields of innovation, product quality, service standard, profitability and community work. To be always ahead of the trends in the real estate industry of the country and keep a significant footprint that others will follow.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- vision End -->

    <!-- mission Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Our Mission</h1>
                    <p class="mb-4">2
                        Our Mission
                        For Our Clients: To offer a global touch, maintaining Bangladeshi culture in living and workplaces, with utmost uncompromising service to our clients and value for money. For Our Investors: To ensure a smooth upward-reasonable trend of return on investment. For Our Employees: To give employees a feeling of satisfaction by maximizing their potential and providing means for their personal well-being and career development.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success"  style="border-radius: 5px" src="/frontend-assets/images/our-vision/mission.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mission End -->

    <!-- values Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success"  style="border-radius: 5px" src="/frontend-assets/images/our-vision/values.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Our Values</h1>
                    <p class="mb-4">2
                        Our Mission
                        For Our Clients: To offer a global touch, maintaining Bangladeshi culture in living and workplaces, with utmost uncompromising service to our clients and value for money. For Our Investors: To ensure a smooth upward-reasonable trend of return on investment. For Our Employees: To give employees a feeling of satisfaction by maximizing their potential and providing means for their personal well-being and career development.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- values End -->
@endsection

