@extends('layouts.frontend.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn architectural-design-hero" data-wow-delay="0.1s">
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

    <!-- architecture part 1 Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success"  style="border-radius: 5px" src="/frontend-assets/images/architectural-design/architectural-design-1.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
{{--                    <h1 class="display-5 mb-4">Our Vision</h1>--}}
                    <p class="mb-4">Although the term design has a broad meaning, it usually refers to the combination of the creative and technical part, setting the basis of a project or an idea. Therefore, architectural design is considered the basis and the first phase before bringing the idea to reality. Under this lines, you will discover more about what architectural design is, its different types and some hepful examples.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- architecture part 1 End -->

    <!-- architecture part 2 Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
{{--                    <h1 class="display-5 mb-4">Our Mission</h1>--}}
                    <p class="mb-4">Empower Developments Ltd. must take into account other branches that help to create a complete project. In general, the basis of the architectural design is to know what the use of the space is, but the aesthetic aspects also intervene. This means that it is not easy to typify architectural design, injust some cathegories as this could be infinite: we can classify architectural design according to its use, according to its intention, its aesthetics, its technical aspects.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border p-2 border-success"  style="border-radius: 5px" src="/frontend-assets/images/architectural-design/architectural-design-2.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- architecture part 2 End --
@endsection

