<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Empower Developments Ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/frontend-assets/images/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/frontend-assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/frontend-assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/frontend-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/frontend-assets/css/style.css" rel="stylesheet">
    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '342515461750712');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=342515461750712&ev=PageView
&noscript=1"/>
    </noscript>
    <!-- End Meta Pixel Code -->
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
{{--        <div class="spinner-border text-success" role="status" style="width: 3rem; height: 3rem;">--}}
            <img class="spinner-grow" style="width: 150px; height: 150px;" src="/frontend-assets/images/logo.png">
{{--        </div>--}}
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid px-0 topbar">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
{{--                    <span>Follow Us:</span>--}}
                    <a class="btn btn-link text-light" href="https://www.facebook.com/empowerdevelopments"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-link text-light" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-link text-light" href="https://api.whatsapp.com/send?phone=+8801325075512&text=Hello%20this%20is%20the%20starting%20message%20with%20Empower%20Developments"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <i class="fa fa-phone-alt me-2"></i>
                    <a href="tel:+8801325075511" class="text-white">
                        <span class="fw-bold">+8801325075511,</span>
                    </a>
                    <a href="tel:+8801325075512" class="text-white">
                        <span class="fw-bold"> +8801325075512</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="/" class="navbar-brand ps-5 me-0">
          <img src="/frontend-assets/images/logo.png" />
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar_menu" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'index' ? 'active': ''}}">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{route('our-story')}}" class="dropdown-item">Our Story</a>
                        <a href="{{route('vision-mission')}}" class="dropdown-item">Vision, Mission & Values</a>
                        <a href="{{route('board-of-directors')}}" class="dropdown-item">Board of Directors</a>
                        <a href="{{route('our-companies')}}" class="dropdown-item">Our Companies</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Project</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{route('upcoming')}}" class="dropdown-item">Upcoming</a>
                        <a href="#" class="dropdown-item">Ongoing</a>
                        <a href="#" class="dropdown-item">Completed</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{route('plot-flat-buy-sell')}}" class="dropdown-item">Buy & Sell</a>
                        <a href="{{route('residential-commercial-space-for-rent')}}" class="dropdown-item">Rent</a>
                        <a href="{{route('legal-vatting')}}" class="dropdown-item">Legal Vetting</a>
                        <a href="{{route('home-loan')}}" class="dropdown-item">Home Loan</a>
                        <a href="{{route('architectural-design')}}" class="dropdown-item">Architectural Design</a>
                        <a href="{{route('interior')}}" class="dropdown-item">Interior Design</a>
                        <a href="#" class="dropdown-item">Tax Vat & Company Affairs</a>
                            <a href="{{route('residential-commercial-lift')}}" class="dropdown-item">Lift/Elevator & Escalator</a>
                    </div>
                </div>
                <a href="#" class="nav-item nav-link">News & Events</a>
                <a href="{{route('carrier')}}" class="nav-item nav-link">Career</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Contact</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{route('land-owner')}}" class="dropdown-item">Landowner</a>
                        <a href="{{route('buyers')}}" class="dropdown-item">Buyers</a>
                        <a href="{{route('customers')}}" class="dropdown-item">Customers</a>
                        <a href="{{route('contact-us')}}" class="dropdown-item">Contact Us</a>
                    </div>
                </div>
            </div>
{{--            <a href="" class="btn btn-success px-3 d-none d-lg-block">Get A Quote</a>--}}
        </div>
    </nav>
    <!-- Navbar End -->
