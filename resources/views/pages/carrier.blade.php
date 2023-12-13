@extends('layouts.frontend.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn carrier-hero" data-wow-delay="0.1s">
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
                        <img class="img-fluid w-100 border p-2 border-success"  style="border-radius: 5px" src="/frontend-assets/images/career.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">HR Philosophy</h1>
                    <p class="mb-4">We reward you for arguing and implementing your ideas!</p>
                    <p class="mb-4">Empower Developments Ltd your potential is limited only by your talents and ambitions. Within Empower Developments Ltd or beyond, our people make a difference because of the leaders they become while here. You will do more than just build! Our aspiration is to change lifestyles, business practices, and even society.</p>
                    <p class="mb-4">Do you wonder why one competitor in a “mature” industry thrives while others fail? Do you have huge ambitions about what you and a team of committed people can do to positively change an organization like Empower Developments Ltd? Your voice and ideas are valued regardless of your tenure. Empower Developments Ltd’s continuous growth demands that we attract the most exceptional people. Applicants from different backgrounds are welcome.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- philosophy End -->

    <!-- projects Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5">Want to be part of our company</h1>
                <p class="mb-5">If you want to part of our company, please send us your respective information to look after</p>
            </div>
            <div class="row g-4 pb-5">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"></div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating" style="border:2px solid green;">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating" style="border:2px solid green;">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating" style="border:2px solid green;">
                                    <input type="text" class="form-control" id="contact-number" name="contact-number" placeholder="contact-number">
                                    <label for="contact-number">Contact Number</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating" style="border:2px solid green;">
                                    <input type="file" class="form-control" id="resume" name="resume" placeholder="contact-number">
                                    <label for="resume">Upload CV</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating" style="border:2px solid green;">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message"
                                              style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-success py-3 px-5" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"></div>
            </div>
        </div>
    </div>
    <!-- project End -->
@endsection

