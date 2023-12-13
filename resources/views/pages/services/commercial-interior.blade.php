@extends('layouts.frontend.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn commercial-interior-hero" data-wow-delay="0.1s">
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

    <!-- Offices Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Offices</h1>
                    <p class="mb-4">Create the perfect space for your employees to move in the most fluid fashion that also impresses every client that walks into your office.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success" style="border-radius: 5px"
                             src="/frontend-assets/images/commercial-interior/commercial-interior-1.jpeg" alt="" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offices End -->

    <!-- Retail Outlets Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success" style="border-radius: 5px"
                             src="/frontend-assets/images/commercial-interior/commercial-interior-2.png" alt="" loading="lazy">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Retail Outlets</h1>
                    <p class="mb-4">Create amazing retail stores that display your product and services in prominent fashion and highlight your most valuable goods so consumers must avail your services.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Retail Outlets End -->

    <!-- Restaurants Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Restaurants</h1>
                    <p class="mb-4">Ambiance and décor are the keys to creating the perfect setting for all diners to enjoy a great meal in your restaurant.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success" style="border-radius: 5px"
                             src="/frontend-assets/images/commercial-interior/commercial-interior-3.jpeg" alt="" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Restaurants End -->

    <!-- we provided Start -->
    <div class="container-fluid py-5 bg-dark text-white">
        <div class="container">
            <h1 class="text-white text-center mb-5">Corporate Packages</h1>
            <div class="row g-5 align-items-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-12 col-md-4 text-center">
                    <img class="img-fluid" loading="lazy"
                         src="/frontend-assets/images/commercial-interior/icon/icon1.png" loading="lazy">
                    <h2 class="display-6 text-white my-4">Decorate</h2>
                    <p>An elementary change in the interior to improve the appearance and create a great first impression.</p>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <img class="img-fluid" loading="lazy"
                         src="/frontend-assets/images/commercial-interior/icon/icon2.png" loading="lazy">
                    <h2 class="display-6 text-white my-4">Renovate</h2>
                    <p>Moderate changes to improve space aesthetics, clarify brand values, and improve functionality.</p>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <img class="img-fluid" loading="lazy"
                         src="/frontend-assets/images/commercial-interior/icon/icon3.png" loading="lazy">
                    <h2 class="display-6 text-white my-4">Remodel</h2>
                    <p>Complete environment remodeling to establish brand values and improve functional productivity.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Perfect Moments End -->

    <!-- gallery Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp mb-5" data-wow-delay="0.1s">
                <h1 class="display-5">GALLERY</h1>
            </div>
            <div class="row g-4 pb-5 wow fadeInUp">
                <div class="col-2"></div>
                <div class="col-8">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="px-3 border border-success">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 border border-success">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 border border-success">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 border border-success">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 border border-success">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 border border-success">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 border border-success">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 border border-success">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 border border-success">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 border border-success">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 border border-success">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 border border-success">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 border border-success">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
    <!-- gallery End -->
    @include('layouts.frontend.top-footer-contact-us')
@endsection

