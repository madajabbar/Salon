@extends('frontend.layouts.app')

@section('content')
    <section id="home" class="hero-wrap js-fullheight" style="background-image: url('frontend/images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-10 ftco-animate text-center">
                    <div class="icon">
                        {{-- <span class="flaticon-lotus"></span> --}}
                        <img src="{{asset('images/LAMODA SALON SOLO.png')}}" alt="" style="width: 200px">
                    </div>
                    <h1>Hair &amp; Beauty Center</h1>
                    {{-- <div class="row justify-content-center">
                        <div class="col-md-7 mb-3">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                    <p>
                        <a href="#" class="btn btn-primary p-3 px-5 py-4 mr-md-2">Get in Touch</a>
                        <a href="#" class="btn btn-outline-primary p-3 px-5 py-4 ml-md-2">Contact</a>
                    </p> --}}
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="ftco-section ftco-intro" style="background-image: url(frontend/images/intro.jpg);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <div class="heading-section ftco-animate">
                        <h2 class="mb-4">Benefits dari Spa &amp; Massage</h2>
                    </div>
                    {{-- <p class="ftco-animate">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                        coast of the Semantics, a large language ocean.</p> --}}
                    <ul class="mt-5 do-list">
                        <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Spa
                                &amp; Massage boosts brain
                                power</a></li>
                        <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Spa
                                &amp; Massage helps you to breathe
                                better</a></li>
                        <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Spa
                                &amp; Massage improves your
                                strength</a></li>
                        <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Spa
                                &amp; Massage helps you to
                                focus</a></li>
                        <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Spa
                                &amp; Massage helps give meaning
                                to your day</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="offer-deal text-center px-2 px-lg-5">
                        <div class="img" style="background-image: url(frontend/images/offer-deal-1.jpg);"></div>
                        <div class="text mt-4">
                            <h3 class="mb-4">Book Your Treatment</h3>
                            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
                                and Consonantia, there live the blind texts.</p>
                            <p><a href="#" class="btn btn-white px-4 py-3"> Book A Treatment <span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="offer-deal active text-center px-2 px-lg-5">
                        <div class="img" style="background-image: url(frontend/images/offer-deal-2.jpg);"></div>
                        <div class="text mt-4">
                            <h3 class="mb-4">Great Gift Packages</h3>
                            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
                                and Consonantia, there live the blind texts.</p>
                            <p><a href="#" class="btn btn-white px-4 py-3"> Book A Treatment <span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="offer-deal text-center px-2 px-lg-5">
                        <div class="img" style="background-image: url(frontend/images/offer-deal-3.jpg);"></div>
                        <div class="text mt-4">
                            <h3 class="mb-4">Special Offer &amp; Deal</h3>
                            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
                                and Consonantia, there live the blind texts.</p>
                            <p><a href="#" class="btn btn-white px-4 py-3"> Book A Treatment <span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section  class="ftco-section ftco-section-services bg-light">
        <div class="container-fluid px-md-5">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="services text-center ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-candle"></span>
                        </div>
                        <div class="text mt-3">
                            <h3>Aromatheraphy</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="services text-center ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-beauty-treatment"></span>
                        </div>
                        <div class="text mt-3">
                            <h3>Skin Care</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="services text-center ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-stone"></span>
                        </div>
                        <div class="text mt-3">
                            <h3>Herbal Spa</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="services text-center ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-relax"></span>
                        </div>
                        <div class="text mt-3">
                            <h3>Body Massage</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="treatments" class="ftco-section">
        <div class="container-fluid px-md-5">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 heading-section ftco-animate text-center">
                    <h3 class="subheading">Services</h3>
                    <h2 class="mb-1">Treatments</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="row no-gutters">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div
                                class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-candle"></span>
                                </div>
                                <div class="text mt-2">
                                    <h3>Salt &amp; Aroma</h3>
                                    <p>A small river named Duden flows by their place and supplies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-spa-1"></span>
                                </div>
                                <div class="text mt-2">
                                    <h3>Hydro</h3>
                                    <p>A small river named Duden flows.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-stone"></span>
                                </div>
                                <div class="text mt-2">
                                    <h3>Hot Stone</h3>
                                    <p>A small river named Duden flows by their place and supplies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-lotus"></span>
                                </div>
                                <div class="text mt-2">
                                    <h3>Aroma</h3>
                                    <p>A small river named Duden flows.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 d-flex align-items-stretch">
                    <div id="accordion" class="myaccordion w-100 text-center py-5 px-1 px-md-4">
                        <div>
                            <h3>Menu</h3>
                            {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia</p> --}}
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="d-flex align-items-center justify-content-between btn btn-link"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        CUTTING
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body text-left">
                                    <ul>
                                        <li class="d-flex">
                                            <span>CUTTING & CREAMBATH</span>
                                            <span></span>
                                            <span></span>
                                        </li>
                                        <li class="d-flex">
                                            <span>Nail Treatments</span>
                                            <span></span>
                                            <span></span>
                                        </li>
                                        <li class="d-flex">
                                            <span>Medical Treatments</span>
                                            <span></span>
                                            <span></span>
                                        </li>
                                        <li class="d-flex">
                                            <span>Hair Treatments</span>
                                            <span></span>
                                            <span></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button
                                        class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Massage Therapies
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body text-left">
                                    <ul>
                                        <li class="d-flex">
                                            <span>Face Treatments</span>
                                            <span></span>
                                            <span></span>
                                        </li>
                                        <li class="d-flex">
                                            <span>Nail Treatments</span>
                                            <span></span>
                                            <span></span>
                                        </li>
                                        <li class="d-flex">
                                            <span>Medical Treatments</span>
                                            <span></span>
                                            <span></span>
                                        </li>
                                        <li class="d-flex">
                                            <span>Hair Treatments</span>
                                            <span></span>
                                            <span></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="row no-gutters">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div
                                class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-beauty-treatment"></span>
                                </div>
                                <div class="text mt-2">
                                    <h3>Relaxation</h3>
                                    <p>A small river named Duden flows by their place and supplies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-relax"></span>
                                </div>
                                <div class="text mt-2">
                                    <h3>Athlete</h3>
                                    <p>A small river named Duden flows.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-massage"></span>
                                </div>
                                <div class="text mt-2">
                                    <h3>Thai</h3>
                                    <p>A small river named Duden flows by their place and supplies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-rose"></span>
                                </div>
                                <div class="text mt-2">
                                    <h3>Rose</h3>
                                    <p>A small river named Duden flows.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter img" id="section-counter" style="background-image: url(frontend/images/bg_3.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="300">0</strong>
                                    <span>Happy Customers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="60">0</strong>
                                    <span>Treatments</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="10">0</strong>
                                    <span>Years of Experience</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="20">0</strong>
                                    <span>Lesson Conducted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-gallery ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h3 class="subheading">Gallery</h3>
                    <h2 class="mb-1">See the latest photos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(frontend/images/gallery-1.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(frontend/images/gallery-2.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(frontend/images/gallery-3.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(frontend/images/gallery-4.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
