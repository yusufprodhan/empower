@extends('layouts.frontend.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn buyers-hero" data-wow-delay="0.1s">
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

    <!-- hR philosophy Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success" style="border-radius: 5px"
                             src="/frontend-assets/images/contact-us/buyers.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">Acquiring an apartment, a home or even an office space is a person’s life-long
                        dream. This dream drives him or her to accumulate the required finance slowly and gradually,
                        which is the start of shaping this dream into reality. This relentless pursuit of realizing such
                        a dream can flow from generation to generation. But finally when a space is purchased, has
                        anyone thought to what extent this “dream” is actually fulfilled?</p>
                    <p class="mb-4">We know that moment is an important stepping-stone for you, and hence we Empower
                        Developments Ltd have been preparing for just that. Our apartments, condominiums and commercial
                        complexes will compete with the best that the modern world has to offer Insha’Allah. From
                        temperature-controlled swimming pools to lush rooftop gardens and terraces, from
                        state-of-the-art gymnasiums to spacious walkways and children’s play facilities, you’ll find the
                        solution to your need for stylish urban living with us at EDL. Please get in touch at e-mail:
                        info@empowerdevelopments.com</p>
                </div>
            </div>
        </div>
    </div>
    <!-- philosophy End -->

    <!-- projects Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-5">Explore The Options</h1>
            </div>
            <form class="form mb-5" method="get" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h4 class="text-body">A.Your Valued Interest</h4>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="preferred-location" name="preferred-location">
                            <label for="preferred-location">Preferred Location</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="preferred-size" name="preferred-size">
                            <label for="preferred-size">Preferred Size</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="car-parking-requirement" name="car-parking-requirement">
                            <label for="car-parking-requirement">Size of the land</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="expected-handover-date" name="expected-handover-date">
                            <label for="expected-handover-date">Expected Handover Date</label>
                        </div>

                        <h4 class="text-body">B.Others Preferences</h4>

                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="facing-the-apartment" name="facing-the-apartment">
                            <label for="facing-the-apartment">Facing Of The Apartment</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="preferred-floor" name="preferred-floor">
                            <label for="preferred-floor">Preferred Floor</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="minimum-number-of-bedrooms" name="minimum-number-of-bedrooms">
                            <label for="minimum-number-of-bedrooms">Minimum Number Of Bedrooms</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="minimum-number-of-bathrooms" name="minimum-number-of-bathrooms">
                            <label for="minimum-number-of-bathrooms">Minimum Number Of Bathrooms</label>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <h4 class="text-body">Landowners Profile</h4>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="name" name="name">
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="profession" name="profession">
                            <label for="profession">Profession</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="email-id" name="email-id">
                            <label for="email-id">EmailID</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="contact-number" name="contact-number">
                            <label for="contact-number">Contact number</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="mailing-address" name="mailing-address">
                            <label for="mailing-address">Mailing Address</label>
                        </div>
                        <button class="btn btn-success py-3 px-5 mt-2 float-end" type="submit">Send</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- project End -->
@endsection

