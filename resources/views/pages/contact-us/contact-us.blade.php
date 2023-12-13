@extends('layouts.frontend.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn contact-us-hero" data-wow-delay="0.1s">
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

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 justify-content-center mb-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-phone-alt fa-2x text-success"></i>
                        </div>
                        <h4 class="mb-3">Phone Number</h4>
                        <p class="mb-2 text-dark">+8801325075511</p>
                        <p class="mb-4 text-dark">+8801325075512</p>
                        <a class="btn btn-success px-4" href="tel:+8801325075511">Call Now <i
                                class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-envelope-open fa-2x text-success"></i>
                        </div>
                        <h4 class="mb-3">Email Address</h4>
                        <p class="mb-2 text-dark">info@empowerdevelopments.com</p>
                        <a class="btn btn-success px-4" href="mailto:info@empowerdevelopments.com">Email Now <i
                                class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-map-marker-alt fa-2x text-success"></i>
                        </div>
                        <h4 class="mb-3">CORPORATE OFFICE</h4>
                        <h6>EMPOWER DEVELOPMENTS LIMITED</h6>
                        <p class="mb-0 text-dark">HAQUE TOWER,</p>
                        <p class="mb-0 text-dark">House-15(4th Floor),</p>
                        <p class="mb-0 text-dark">Block-A, Bashundhara Main Road,</p>
                        <p class="mb-3 text-dark">Bashundhara R/A, Dhaka-1229, Bangladesh.</p>
                        <a class="btn btn-success px-4" href="https://maps.app.goo.gl/7KhMbpRguqq2AoyNA"
                           target="blank">Direction <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 bg-success">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 wow fadeInUp" data-wow-delay="0.1s"></div>
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="contact-number" name="contact-number">
                                    <label for="contact-number">Contact Number</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                              name="message"
                                              style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-close-white py-3 px-5" style="border:2px solid black;"
                                        type="submit">Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 wow fadeInUp" data-wow-delay="0.1s"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <iframe
                    class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1703.8849985841505!2d90.428796!3d23.812778!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7773e4a0d37%3A0xb6ec2ef2196caf78!2sEmpower%20Developments%20Limited!5e1!3m2!1sen!2sbd!4v1701884657948!5m2!1sen!2sbd"
                    style="min-height: 450px; border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

