@extends('layouts.frontend.app')

@section('content')
    @include('layouts.frontend.hero_section')
    <!-- At a glance Start -->
    <div class="container-fluid bg-success py-5">
        <div class="container">
            <div class="row g-5 pb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="text-white mb-4">At a Glance Empower Developments</h1>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="text-white mb-4">The contact form is currently inactive. Get a functional and working
                        contact form
                        with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're
                        done.</p>
                </div>
            </div>
            <div class="row g-5 pb-4">
                <div class="col-md-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="border p-2" style="height: 295px">
                        <div class="pb-3">
                            <span class="feature-number">01</span> <span class="fs-3 text-white mb-0">What We Are</span>
                        </div>
                        <p class=" text-white">Empower Developments is one of the foremost and pioneer Real Estate
                            Developers & Construction Company, specializing in superior quality residential as well as
                            commercial developments within and outside Dhaka city.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="border p-2" style="height: 295px">
                        <div class="pb-3">
                            <span class="feature-number">02</span> <span class="fs-3 text-white mb-0">Who We Are</span>
                        </div>
                        <p class=" text-white">Empower Developments is a fast growing real estate company in Bangladesh.
                            Empower Developments has been known for its spectacular and innovative living concepts and
                            daring architectural designs. This has been made possible by the committed professional
                            architects.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="border p-2" style="height: 295px">
                        <div class="pb-3">
                            <span class="feature-number">03</span> <span class="fs-3 text-white mb-0">What We Do</span>
                        </div>
                        <p class=" text-white">We invest our expertise and passion in keeping our pledge of giving the
                            best. Thereby, our actions are guided by a binding value system. In Empower Developments,
                            our dedicated employees are the driving force of the company . The values on which we work
                            together regularly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success" style="border-radius: 5px"
                             src="/frontend-assets/images/home01.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Welcome to Empower Developments</h1>
                    <p class="mb-4">Empower Developments is a leading conglomerate in the country with a diversified
                        portfolio in real estate. Apart from significant contributions to real estate in the country
                        over the years, Empower Developments has heavily focused on construction, infrastructure,
                        engineering, agro, dredging, etc. Being involved in these, Empower Developments is consistently
                        successful in all major investment undertakings and is contributing significantly to the
                        country’s economic growth and sustainability through adaptation of appropriate
                        business-to-business strategy.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- projects Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5">Our Upcoming Projects</h1>
                <p class="mb-5">Find your dream property from our featured luxury properties built at prime locations in
                    Dhaka. From this list of ongoing, upcoming and completed properties (flat / apartments), choose the
                    one that best resonates with your heart.</p>
            </div>
            <div class="row g-4 pb-5 wow fadeInUp">
                <div class="owl-carousel owl-theme">
                    <div class="item px-3">
                        <div class="team-item">
                            <img class="img-fluid" src="/frontend-assets/images/projects/project1.jpeg" alt=""
                                 loading="lazy"/>
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                    <i class="fa fa-2x fa-share text-white"></i>
                                </div>
                                <div
                                    class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                    style="height: 90px;">
                                    <h5>Uttara</h5>
                                    <div class="team-social">
                                        <h4 class="ms-2">Uttara</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-3">
                        <div class="team-item">
                            <img class="img-fluid" src="/frontend-assets/images/projects/project2.jpeg" alt=""
                                 loading="lazy"/>
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                    <i class="fa fa-2x fa-share text-white"></i>
                                </div>
                                <div
                                    class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                    style="height: 90px;">
                                    <h5>Bashundhara R/A</h5>
                                    <div class="team-social">
                                        <h4 class="ms-2">Bashundhara R/A</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-3">
                        <div class="team-item">
                            <img class="img-fluid" src="/frontend-assets/images/projects/project3.jpeg" alt=""
                                 loading="lazy"/>
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                    <i class="fa fa-2x fa-share text-white"></i>
                                </div>
                                <div
                                    class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                    style="height: 90px;">
                                    <h5>Jalshiri Abason</h5>
                                    <div class="team-social">
                                        <h4 class="ms-2">Jalshiri Abason</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-3">
                        <div class="team-item">
                            <img class="img-fluid" src="/frontend-assets/images/projects/project4.jpeg" loading="lazy"
                                 alt=""/>
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                    <i class="fa fa-2x fa-share text-white"></i>
                                </div>
                                <div
                                    class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                    style="height: 90px;">
                                    <h5>Purbachal New Town</h5>
                                    <div class="team-social">
                                        <h4 class="ms-2">Purbachal New Town</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-3">
                        <div class="team-item">
                            <img class="img-fluid" src="/frontend-assets/images/projects/project5.jpeg" alt=""
                                 loading="lazy"/>
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                    <i class="fa fa-2x fa-share text-white"></i>
                                </div>
                                <div
                                    class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                    style="height: 90px;">
                                    <h5>Purbachal American City</h5>
                                    <div class="team-social">
                                        <h4 class="ms-2">Purbachal American City</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project End -->

    <!-- why empower Start -->
    <div class="container-fluid bg-success why-empower py-5">
        <div class="container">
            <div class="row g-5 pb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="text-white mb-4">Why Empower Developments?</h1>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="text-white mb-4">
                        Empower Developments to weave an unprecedented experience of fine living cocooned in comfort for
                        you. It’s the statement of prestige and elegant Architecture that sets us apart.</p>
                </div>
            </div>
            <div class="row g-5 pb-4">
                <div class="col-md-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="border p-2" style="height: 295px">
                        <div class="pb-3">
                            <span class="feature-number">01</span> <span
                                class="fs-5 text-white mb-0">Prime Locations</span>
                        </div>
                        <p class=" text-white">We offer a selection from the most lucrative locations across the city.
                            Our project locations are selected intelligently, keeping in mind the things that matter to
                            you most.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="border p-2" style="height: 295px">
                        <div class="pb-3">
                            <span class="feature-number">02</span> <span
                                class="fs-5 text-white mb-0">Top Consultants</span>
                        </div>
                        <p class=" text-white">We engage the leading consultants in their respective fields from both
                            home and abroad, to ensure that every facet of a project is designed to perfection. After
                            all, the best designs can only come from the best minds.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="border p-2" style="height: 295px">
                        <div class="pb-3">
                            <span class="feature-number">03</span> <span class="fs-5 text-white mb-0">Highest Quality Materials</span>
                        </div>
                        <p class=" text-white">We continuously explore material sourcing globally to enhance the comfort
                            and lifestyle of our clients. Each material used in our projects is selected with the utmost
                            attention to quality, suitability and durability.</p>
                    </div>
                </div>
            </div>
            <div class="row g-5 pb-4">
                <div class="col-md-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="border p-2" style="height: 295px">
                        <div class="pb-3">
                            <span class="feature-number">04</span> <span class="fs-5 text-white mb-0">Uncompromising Safety</span>
                        </div>
                        <p class=" text-white">Our priority to safety is second to none. Structural, electro-mechanical
                            and fire safety stand paramount in our planning and construction methodology, in order to
                            ensure your safety in your sanctuary.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="border p-2" style="height: 295px">
                        <div class="pb-3">
                            <span class="feature-number">05</span> <span
                                class="fs-5 text-white mb-0">On-time Delivery</span>
                        </div>
                        <p class=" text-white">Our experienced team of highly qualified engineers and management
                            professionals work relentlessly in perfect synergy. At Shanta, delivering uncompromised
                            quality, on time, has become our mantra.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="border p-2" style="height: 295px">
                        <div class="pb-3">
                            <span class="feature-number">06</span> <span class="fs-5 text-white mb-0">Professional Management</span>
                        </div>
                        <p class=" text-white">A safe, clean and comfortable living environment can only be maintained
                            by a team of professionals with an eye for perfection. Our Facility Management team will
                            ensure your desire to live in a beautiful community remains fulfilled.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why empower End -->

    <!-- experience Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-4">Well Experienced In Sector</h1>
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                    Legal Document Vetting
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                 aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <p>Our vision & mission are being made into reality through the belief and
                                        implementation of 6 core values. Excellence, Innovation, Commitment, Quality,
                                        Valuing People & Customer Satisfaction are embedded in our DNA and drives toward
                                        our motto of “setting standards”.</p>
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item">Eco-friendly homes & commercial complexes.</li>
                                        <li class="list-group-item">Innovative engineering methods of today adhere to
                                            standards of excellence.
                                        </li>
                                        <li class="list-group-item">Expedite our commitments and ensure client
                                            satisfaction.
                                        </li>
                                        <li class="list-group-item">Teamwork and giving employees power.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                    Our Vision
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                 aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <p>To set Empower Developments as an icon for both clients and competitors in the
                                        fields of innovation, product quality, service standard, profitability and
                                        community work. To be always ahead of the trends in the real estate industry of
                                        the country and keep a significant footprint that others will follow.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                    Our Mission
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                 aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <p>For Our Clients: To offer a global touch, maintaining Bangladeshi culture in
                                        living and work places, with utmost uncompromising service to our clients and
                                        value for money. For Our Investors: To ensure a smooth upward-reasonable trend
                                        of return on investment. For Our Employees: To give employees a feeling of
                                        satisfaction by maximizing their potentials and providing means for their
                                        personal well-being and career development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success" style="border-radius: 5px"
                             src="/frontend-assets/images/home2.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- experience End -->
@endsection
@section('page-script')
    <script>
        $(function () {
            // Owl Carousel
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 3,
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

