@extends('layouts.frontend.app')

@section('content')
    <!-- dream home Start -->
    <div class="container-fluid">
        <div class="row g-5 align-items-center">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="display-2 mb-4 text-success ms-5">{{$title}}</h1>
                <h1 class=" mb-4 text-body ms-5">Find the best way to finance your dream home</h1>
            </div>
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid w-100"  src="/frontend-assets/images/home-loan/home-loan1.png" alt="">
            </div>
        </div>
    </div>
    <!-- dream home End -->

    <!-- Loans Benefit Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp mb-5" data-wow-delay="0.1s">
                <h1 class="display-5">How Home Loans Benefit You?</h1>
            </div>
            <div class="row g-4 pb-5 ">
                <div class="col-lg-3 col-md-6 wow fadeInUp text-center" data-wow-delay="0.1s">
                    <img class="img-fluid" loading="lazy" src="/frontend-assets/images/home-loan/home-loan-svg1.svg">
                    <h2 class="display-6 text-body my-4">Liquidity</h2>
                    <p>Quick access to funding for your property needs</p>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp text-center" data-wow-delay="0.1s">
                    <img class="img-fluid" loading="lazy" src="/frontend-assets/images/home-loan/home-loan-svg2.svg">
                    <h2 class="display-6 text-body my-4">Tax returns</h2>
                    <p>Taking a loan comes with huge tax return benefits</p>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp text-center" data-wow-delay="0.1s">
                    <img class="img-fluid" loading="lazy" src="/frontend-assets/images/home-loan/home-loan-svg3.svg">
                    <h2 class="display-6 text-body my-4">Financial Aid</h2>
                    <p>When short of funds, a loan helps you drive your dreams</p>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp text-center" data-wow-delay="0.1s">
                    <img class="img-fluid" loading="lazy" src="/frontend-assets/images/home-loan/home-loan-svg4.svg">
                    <h2 class="display-6 text-body my-4">Safer</h2>
                    <p>Bank verified properties ensure that your investment is secure</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Loans Benefit End -->

    <!-- Loans Benefit Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp mb-5" data-wow-delay="0.1s">
                <h1 class="display-5">Our Partners</h1>
            </div>
            <div class="row g-4 pb-5 wow fadeInUp">
                <div class="owl-carousel owl-theme">
                    <div class="item px-3 border border-success">
                        <img class="img-fluid"  style="width: 230px; height: 105px" src="/frontend-assets/images/home-loan/bank/Bracbank.png" loading="lazy">
                    </div>
                    <div class="item px-3 border border-success">
                        <img class="img-fluid" style="width: 230px; height: 105px" src="/frontend-assets/images/home-loan/bank/citybank.svg" loading="lazy">
                    </div>
                    <div class="item px-3 border border-success">
                        <img class="img-fluid" style="width: 230px; height: 105px" src="/frontend-assets/images/home-loan/bank/eastern.png" loading="lazy">
                    </div>
                    <div class="item px-3 border border-success">
                        <img class="img-fluid" style="width: 230px; height: 105px" src="/frontend-assets/images/home-loan/bank/icb_bank.png" loading="lazy">
                    </div>
                    <div class="item px-3 border border-success">
                        <img class="img-fluid" style="width: 230px; height: 105px" src="/frontend-assets/images/home-loan/bank/IPDC.png" loading="lazy">
                    </div>
                    <div class="item px-3 border border-success">
                        <img class="img-fluid" style="width: 230px; height: 105px" src="/frontend-assets/images/home-loan/bank/LankaBangla.png" loading="lazy">
                    </div>
                    <div class="item px-3 border border-success">
                        <img class="img-fluid" style="width: 230px; height: 105px" src="/frontend-assets/images/home-loan/bank/standard-chartered.png" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Loans Benefit End -->
    @include('layouts.frontend.top-footer-contact-us')
@endsection
@section('page-script')
    <script>
        $(function() {
            // Owl Carousel
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items:4,
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:1000,
                autoplayHoverPause:true
            });
        });
    </script>
@endsection
