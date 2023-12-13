@extends('layouts.frontend.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn landowner-hero" data-wow-delay="0.1s">
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
                             src="/frontend-assets/images/contact-us/landowners.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">Live in the cocooned comfort of luxury, bathed in architectural elegance.
                        Aesthetically built with exquisite craftsmanship, we offer you an abode that complements your
                        privileged lifestyle. Be part of the architectural splendor, exquisite craftsmanship, and
                        ultimate comfort that is a hallmark of our every property.</p>
                    <p class="mb-4">Empower Developments Ltd. only you don’t get an urban structure. You get to live in
                        grandeur and style. What’s more, we bring to your sanctuary an essence of nature itself, as our
                        every property is intricately woven with the wonders of the natural environment, offering you a
                        lifestyle that is in harmony with nature. Interested Landowners can mail us at e-mail:
                        info@empowerdevelopments.com or fill up the form below.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- philosophy End -->

    <!-- projects Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-5">Meet The Professionals</h1>
            </div>
            <form class="form mb-5" method="get" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h4 class="text-body">Land Information</h4>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="locality" name="locality">
                            <label for="locality">Locality</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="address" name="address">
                            <label for="address">Address</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="size-land" name="size-land">
                            <label for="size-land">Size of the land</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="in-front-road-width" name="in-front-road-width">
                            <label for="in-front-road-width">Width of the road in front(In feet)</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <select class="form-select" id="category-land" name="category-land">
                                <option selected>Select</option>
                                <option value="1">Freehold</option>
                                <option value="3">Leasehold</option>
                            </select>
                            <label for="category-land">Category of land</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <select class="form-select" id="facing" name="facing">
                                <option selected>Select</option>
                                <option value="1">East</option>
                                <option value="3">West</option>
                                <option value="3">North</option>
                                <option value="3">South</option>
                            </select>
                            <label for="facing">Facing</label>
                        </div>
                        <div class="form-floating" style="border:2px solid green;">
                            <select class="form-select" id="attractive-features" name="attractive-features">
                                <option selected>Select</option>
                                <option value="1">Lakeside</option>
                                <option value="3">Corner Plot</option>
                                <option value="3">Park View</option>
                                <option value="3">Main Road</option>
                                <option value="3">Others</option>
                            </select>
                            <label for="attractive-features">Attractive features (if any)</label>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <h4 class="text-body">Landowners Profile</h4>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="name-landowner" name="name-landowner">
                            <label for="name-landowner">Name of the landowner</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="contact-person" name="contact-person" >
                            <label for="contact-person">Contact person</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="email-id" name="email-id" >
                            <label for="email-id">EmailID</label>
                        </div>
                        <div class="form-floating mb-4" style="border:2px solid green;">
                            <input type="text" class="form-control" id="contact-number" name="contact-number" >
                            <label for="contact-number">Contact number</label>
                        </div>
                        <button class="btn btn-success py-3 px-5 mt-2 float-end" type="submit">Send</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- project End -->
@endsection

