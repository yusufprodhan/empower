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

    <!-- Managing Director Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class=" mb-4">Message From Managing Director</h3>
                    <h4 class="">Mr M I Moeen</h4>
                    <h5 class=" mb-4 mt-0">Managing Director Empower Developments Ltd.</h5>
                    <p class="mb-4">A distinguished and perceptive entrepreneur, Mr. M I Moeen the founder promoter of Empower Developments Ltd opts to do business by providing world-class products and services in Bangladesh. With his visionary leadership and extensive business knowledge, Empower Developments Ltd drives forward to not only provide superior quality products and services but to demonstrate unparalleled foresight by developing iconic projects which are the epitome of modern architecture, safe, functional and comfortable living.</p>
                    <p class="mb-4">The reputation and success of Empower Developments Ltd are testaments to his strong ethics and relentless focus on quality, innovation and social responsibility.</p>
                    <p>I struggled and spent many sleepless nights to become who I am. I truly believe that with hard work and dedication, anyone can be successful.</p>
                    <em>“IF YOU ARE NOT MAKING MISTAKES THEN YOU ARE NOT DOING ANYTHING. I AM POSITIVE THAT A DOER MAKES MISTAKES”</em>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success"  style="border-radius: 5px" src="/frontend-assets/images/board-of-directors/M-I-Moeen.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Managing Director End -->

    <!-- Deputy Managing Director Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success"  style="border-radius: 5px" src="/frontend-assets/images/board-of-directors/Rahman.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class=" mb-4">Message From Deputy Managing Director</h3>
                    <h4 class="">Mr. MD Mokhlesur Rahman</h4>
                    <h5 class=" mb-4 mt-0">Deputy Managing Director Empower Developments Ltd.</h5>
                    <p class="mb-4">I am Mr. MD Mokhlesur Rahman as a founder DMD of Empower Developments Ltd. and truly delighted and humbled to say that our journey is just beginning and the possibilities ahead are boundless. In the world of real estate, every project is a canvas for creativity and innovation. As we embark on this exciting venture, our focus is crystal clear – to create exceptional living spaces that not only meet but exceed the expectations of our valued clients.</p>
                    <p class="mb-4">Our team, comprising talented professionals with diverse expertise, is the backbone of our vision. Together, we will work tirelessly to build not just structures, but homes that resonate with warmth, quality, and the promise of a better life. We understand the importance of trust and integrity in this industry, and it will be the bedrock of our operations. Our commitment to transparency and ethical practices will set us apart in a crowded marketplace. While we start small, we dream big. We have ambitious plans to expand, innovate, and contribute positively to the communities we serve. Our journey may be in its infancy, but our determination to succeed knows no bounds.</p>
                    <p>I want to extend my sincere gratitude to our early supporters, clients, and partners who have shown faith in our vision. Your trust in Empower Developments Ltd is a source of inspiration for us and we pledge to deliver on that trust.</p>
                    <p>In conclusion, I am thrilled about the exciting path that lies ahead. Together, we will create a legacy, one that stands as a testament to our commitment to excellence, innovation, and the art of making dreams come true.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Deputy Managing Director End -->
@endsection

