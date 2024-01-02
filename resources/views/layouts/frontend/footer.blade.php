<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: #000">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">About Us</h5>
                <p class="mb-1 text-white" style="text-align: justify">Empower Developments to weave an unprecedented experience of fine living cocooned in comfort for you. It’s the statement of prestige and elegant Architecture that sets us apart.</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p class="mb-2 text-white"><i class="fa fa-map-marker-alt me-2"></i>HAQUE TOWER, House-15(4th Floor) Block-A, Bashundhara Main Road, Bashundhara R/A, Dhaka-1229, Bangladesh</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i><a class="text-white" href="mailto:info@empowerdevelopments.com" >info@empowerdevelopments.com</a></p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a class="text-white" href="tel:+8801325075511">+8801325075511</a></p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a class="text-white" href="tel:+8801325075512">+8801325075512</a></p>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <a class="btn btn-link text-white" href="{{route('board-of-directors')}}">About Us</a>
                <a class="btn btn-link text-white" href="{{route('contact-us')}}">Contact Us</a>
                <a class="btn btn-link text-white" href="{{route('plot-flat-buy-sell')}}">Our Services</a>
                <a class="btn btn-link text-white" href="">Terms & Condition</a>
                <a class="btn btn-link text-white" href="{{route('privacy-policy')}}">Privacy & Policy</a>
                <a class="btn btn-link text-white" href="{{route('contact-us')}}">Support</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Social Media</h5>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-success rounded-circle me-2" href="https://www.facebook.com/empowerdevelopments"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-success rounded-circle me-2" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-success rounded-circle me-2" href="#"><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-success rounded-circle me-2" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-success rounded-circle me-2" href="https://api.whatsapp.com/send?phone=+8801325075512&text=Hello%20this%20is%20the%20starting%20message%20with%20Empower%20Developments"><i
                            class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4" style="background-color: #1f1f1f">
    <div class="container text-center">
        <p class="mb-2 text-white">Copyright &copy; <a class="fw-semi-bold text-success" href="/">Empower Developments Ltd</a>. All Right Reserved.</p>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-success btn-lg-square rounded-circle back-to-top"><i
        class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/frontend-assets/lib/wow/wow.min.js"></script>
<script src="/frontend-assets/lib/easing/easing.min.js"></script>
<script src="/frontend-assets/lib/waypoints/waypoints.min.js"></script>
<script src="/frontend-assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/frontend-assets/lib/counterup/counterup.min.js"></script>

<!-- Template Javascript -->
<script src="/frontend-assets/js/main.js"></script>
{{-- page script --}}
@yield('page-script')
</body>

</html>
