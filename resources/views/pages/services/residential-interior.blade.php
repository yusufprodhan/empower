@extends('layouts.frontend.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn residential-interior-hero" data-wow-delay="0.1s">
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

    <!-- special it Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success" style="border-radius: 5px"
                             src="/frontend-assets/images/residential-interior/residential-interior-1.jpeg" alt="" loading="lazy">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Make each room special in its own way</h1>
                    <p class="mb-4">With so much happening in a home, it’s important to make it comfortable, accessible,
                        and beautiful to adorn those memories.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- special it End -->

    <!-- Perfect Moments Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Perfect Moments</h1>
                    <p class="mb-4">Bring the perfect setting to your home interior for those perfect moments.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success" style="border-radius: 5px"
                             src="/frontend-assets/images/residential-interior/residential-interior-2.jpeg" alt="" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Perfect Moments End -->

    <!-- we provided Start -->
    <div class="container-fluid py-5 bg-success text-white">
        <div class="container">
            <div class="row g-5 align-items-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-12 col-md-4 text-center">
                    <img class="img-fluid" loading="lazy"
                         src="/frontend-assets/images/residential-interior/icon/icon1.png" loading="lazy">
                    <h2 class="display-6 text-white my-4">Decorate</h2>
                    <p>When time is short, a few simple steps in the right direction can make huge changes. See your
                        house in a new coat of paint, lighting, or overall mood.</p>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <img class="img-fluid" loading="lazy"
                         src="/frontend-assets/images/residential-interior/icon/icon2.png" loading="lazy">
                    <h2 class="display-6 text-white my-4">Renovate</h2>
                    <p>Add a little more flare and inspiration to your home. The walls, floors and accents of the house
                        can be tweaked without major reconstruction or time lost.</p>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <img class="img-fluid" loading="lazy"
                         src="/frontend-assets/images/residential-interior/icon/icon3.png" loading="lazy">
                    <h2 class="display-6 text-white my-4">Remodel</h2>
                    <p>For a complete change in aesthetics, layout and restructure the inside functionality, we can
                        restructure the inside of your house to be the home you’ve always dreamed of.</p>
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
                <div class="col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="px-3 text-center">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 text-center">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 text-center">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 text-center">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 text-center">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 text-center">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 text-center">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 text-center">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 text-center">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 text-center">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 text-center">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 text-center">
                                    <img class="img-fluid"
                                         src="/frontend-assets/images/residential-interior/gallery/gallery-1.jpeg"
                                         loading="lazy">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-3 text-center">
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
            </div>
        </div>
    </div>
    <!-- gallery End -->
    @include('layouts.frontend.top-footer-contact-us')
@endsection

