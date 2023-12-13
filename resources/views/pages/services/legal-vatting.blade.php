@extends('layouts.frontend.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn legal-vatting-hero" data-wow-delay="0.1s">
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

    <!-- legal service support Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5">LEGAL SERVICES SUPPORT</h1>
                <h5 class="mb-5">MUTATION | PERMISSION | DEED | PLAN & AMP | NEC | C.S. S.A. R.S. | MOUZA MAP | CERTIFICATIONS</h5>
            </div>
            <div class="row g-4 pb-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <p>There are many legal documents and processes that need to be managed and handled during any property transaction. This can range from formally having your name appear against the government’s records to even having the permission to sell a property in the first place. Empower Developments Ltd Legal services take care of all this to ensure you do not get lost in the paperwork and can focus entirely on the property transaction.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- legal service support End -->

    <!-- Loans Benefit Start -->
    <div class="container-fluid py-5 legal-vatting-all-service-bg">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp mb-5" data-wow-delay="0.1s">
                <h1 class="display-5 text-white">ALL SERVICE ASSISTANCE</h1>
            </div>
            <div class="row g-4 pb-5 ">
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="text-white">Document Withdrawl Services</h3>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">AC Land Mutation</li>
                        <li class="list-group-item">Mutation permission from RAJUK/ NHA/M.P office</li>
                        <li class="list-group-item">Deed Withdrawal</li>
                        <li class="list-group-item">Hiba-Bil-Iwaz Deed</li>
                        <li class="list-group-item">Title Deed</li>
                        <li class="list-group-item">Partition Deed</li>
                        <li class="list-group-item">Power of Attorney</li>
                        <li class="list-group-item">Deed of agreement</li>
                        <li class="list-group-item">Power acceptance from RAJUK/ NHA/ M.P office</li>
                        <li class="list-group-item">Lay-Out Plan from RAJUK</li>
                        <li class="list-group-item">Approve Plan from RAJUK</li>
                        <li class="list-group-item">NEC (Non-Encumbrance Certificate)</li>
                    </ol>
                </div>
                <div class="col-12 col-md-6 wow fadeInUp text-center" data-wow-delay="0.1s" style="margin-top: 65px;">
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">C.S. S.A. R.S. & City Jorip Porca Certified Copy</li>
                        <li class="list-group-item">C.S. S.A, R.S & City Jorip Porca Khasra Copy</li>
                        <li class="list-group-item">Mouza Map Tejgaon Satrastha Land office</li>
                        <li class="list-group-item">Occupancy Certificate from RAJUK</li>
                        <li class="list-group-item">Succession Certificate</li>
                        <li class="list-group-item">Permission letter of Building Reconstruction from N.H.A/RAJUK/ M.P office</li>
                        <li class="list-group-item">Foreign Power of Attorney (Registered)</li>
                        <li class="list-group-item">Sale permission from N.H.A/RAJUK/ M.P office</li>
                    </ol>
                    <h3 class="text-black py-3">Vetting Services</h3>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">Legal Document Vetting</li>
                        <li class="list-group-item">Document Verification</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Loans Benefit End -->

    <!-- we expert Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp mb-5" data-wow-delay="0.1s">
                <h1 class="display-5">What to Expect</h1>
            </div>
            <div class="row g-4 pb-5 wow fadeInUp">
                <div class="col-12 text-center">
                    <img class="img-fluid" src="/frontend-assets/images/legal-vatting/en_legal_img_services.png">
                </div>
                <div class="col-12">
                    <h3>Services Details</h3>
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Legal Document Vetting
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <p>Ensure every document is exactly how and where it is supposed to be for carefree living and investment possibilities with the best property legal services in Bangladesh.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Changing Property Ownership
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <p>Empower Developments Ltd helps provides the property legal services in Dhaka required for changing title ownership from one person to another.</p>
                                    <h3 class="text-start">Why Mutation us Required?</h3>
                                    <p>Mutation, in the most simplest form, is a formal record that the property now belongs to the new owner. In addition, Mutation is essential to register or transfer the property, and for tax concerns.</p>
                                    <h3>Usual Phases of Operation:</h3>
                                    <ol class="list-group list-group-numbered py-2">
                                        <li class="list-group-item">Mutation with the concerned government authorities owning the land (where applicable)</li>
                                        <li class="list-group-item">Mutation with the concerned Land Offices</li>
                                    </ol>
                                    <p>Authority Mutation is also known as flat or plot mutation. Land Mutation is also known as Tahshil Mutation. Authority Mutation is completed by issuing a Mutation Letter by the concerned authorities in favor of the new owner or applicant.</p>
                                    <h3>Khatian</h3>
                                    <p>The Khatian is a document for identification of land. Documents prepared through surveys for the purpose of determining possession, ownership and assessing Land Development Tax is known as Khatian.</p>
                                    <h3>Porcha</h3>
                                    <p>"Porcha" is a document which is legally termed as Record of Right (ROR). The ROR document shows particulars​of Mouja, JL no, CS/RS dag no, and Khatian no. when the mutation of the property has already been completed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Deed Acquisition:
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <p>Empower Developments Ltd helps you in the acquisition of various deeds required for a multitude of approvals and as proof of ownership.</p>
                                    <h3>Finding the History of Owners</h3>
                                    <p>In real estate laws, Bia Deeds establish a chain of ownership, regarding the property in question, of all the official owners of the property since its first formal registration.</p>
                                    <h3>Proving Property Ownership</h3>
                                    <p>A Title Deed is the most important document as far as property ownership is concerned and to avoid property disputes. It is a legal document, agreed upon by buyer and seller, which confirms or proves that one is the owner of a property after having it transferred into their name.</p>
                                    <h3>What is the Hiba-Bil-Iwaz” deed Mean?</h3>
                                    <p>Hiba Bil Iwaz means a gift for consideration already received. It is a transaction made up of two mutual or reciprocal gifts between two persons. One gift from a donor to the donee and one from donee to the donor.</p>
                                    <h3>legal_services.label_want_formalize_promise</h3>
                                    <p>legal_services.description_want_formalize_promise.</p>
                                    <h3>NEC (Non-Encumbrance Certificate)</h3>
                                    <p>The Non-Encumbrance Certificate is a record of all the deeds registered or missing over the last 10-15 years that ensures everything is on track for smooth processing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Need Professional Management?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                                <div class="accordion-body">
                                    <p>Empower Developments Ltd can act as an authorized representative working to help you achieve your requirements without you needing to take part in the activities.</p>
                                    <h3>Power of Attorney</h3>
                                    <p>A Power of Attorney or Letter of Attorney is a written authorization to let someone represent or act on anothers behalf in private affairs, business, or some other legal matters, by acting as the principal, grantor, or donor.</p>
                                    <h3>Foreign Power of Attorney (Registered)</h3>
                                    <p>A Foreign Power of Attorney in Dhaka enables the applicant living abroad to appoint a person or organization from abroad to manage his/her property or affairs in Bangladesh and needs to be attested by the Embassy of Bangladesh in that country and then needs to be submitted along with two sets of photocopies for attestation.</p>
                                    <h3>Power Acceptance from Rajuk/ NHA/M.P office</h3>
                                    <p>In the case of government property, an approval needs to be taken for the Power of Attorney to be recognized legally.</p>
                                </div>
                            </div>
                        </div><div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Need Construction Approval?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                                <div class="accordion-body">
                                    <p>Empower Developments Ltd ensures that plans you need to begin a construction project are approval-ready and help in acquiring those approvals both in the case of creation and in the case of lost documents.</p>
                                    <h3>Approve Plans & Lay-Out Plans:</h3>
                                    <p>In order to begin a construction project, multiple documents need to be approved by authorities. These include Building Plans and Layout Plans. Empower Developments Ltd ensures that these plans are approval-ready and help in acquiring those approvals both in the case of creation and in the case of loss retrieval.</p>
                                    <h3>Additional Layout Plan Importance</h3>
                                    <p>Layout planning can significantly affect productivity and service quality. Some consequences of poor layout are increased costs, confused and frustrated customers, and poor communication and information flows.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Occupancy Certificate:
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                                <div class="accordion-body">
                                    <p>Empower Developments Ltd will help you ensure you are legally allowed to occupy and use a property with all the approval necessary from governing bodies such as RAJUK.</p>
                                    <h3>Occupying a Property</h3>
                                    <p>In order to legally occupy a property, whether fully or partially built, an Occupancy Certificate in Dhaka from RAJUK is required. It proves that a building adheres to national building codes and is suitable for occupancy. It is issued by a development authority or a local government agency, such as the municipal corporation.</p>
                                    <h3>PMissing Occupancy Certificates</h3>
                                    <p>Without the Occupancy Certificate in Dhaka, there is no proof that the building is up to standard. This could mean there are safety possibilities, there may be issues with mortgage arrangements, and insurance coverage will not be a possibility.</p>
                                    <p>Utility services will also not be legally authorized from the municipality, meaning no gas, water, or electricity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Prove Your Inheritance
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                                <div class="accordion-body">
                                    <p>Empower Developments Ltd helps with acquiring a Succession Certificate which is necessary to prove the inheritance of property ownership by the survivors of a deceased property owner.</p>
                                    <p>Succession Certificate: (Succession Act-1925)</p>
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item">Obtaining Succession (Warishan) Certificate from the local govt authorities, i.e. City Corporation, Municipality or Union Parishad.</li>
                                        <li class="list-group-item">Obtaining succession certificate through the Court of Law.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Sale Permission
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
                                <div class="accordion-body">
                                    Empower Developments Ltd ensures a Sale Permission is present in order for the existing owner, or lessee, of a property to be able to sell their property.
                                    Empower Developments Ltd handles all your property legal aspects so you can focus on your purchase, sale, or investment without a worry.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- we expert End -->

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
