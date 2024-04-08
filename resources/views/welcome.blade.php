@extends('frontend.main')
@section('content')



    <!--? slider Area Start-->
    <section class="slider-area hero-overly">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-10 col-sm-9">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay="0.2s">Dapatkan Layanan terbaik di
                                     Erbe laundry</h1>
                                <p data-animation="fadeInLeft" data-delay="0.4s">Kami Menjaga Kebersihan Kain Anda
                                </p>
                                 <a href="{{ url('login') }}" class="btn hero-btn" data-animation="fadeInLeft"
                                    data-delay="0.7s">Explore Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- slider Area End-->
    <!--? Services Area Start -->
    <section class="services-area pt-top border-bottom pb-20 mb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <span class="element">Proses Kami</span>
                        <h2>Beginilah cara kami bekerja</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{ asset('frontend/img/icon/services-icon1.svg') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Kami Mengumpulkan Pakaian Anda</a></h5>
                            <p>Kami memahami betapa berharganya waktu Anda. Dengan layanan pengumpulan pakaian kami, Anda dapat menghemat waktu untuk hal-hal yang lebih penting dalam hidup Anda!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{ asset('frontend/img/icon/services-icon2.svg') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Mencuci Pakaian Anda</a></h5>
                            <p>Bersih, segar, dan dijemput langsung dari pintu Anda. Nikmati kualitas pencucian terbaik dengan layanan kami!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{ asset('frontend/img/icon/services-icon3.svg') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Dapatkan Pengiriman Pakaian Anda</a></h5>
                            <p>Hemat waktu dan tenaga! Dapatkan pengiriman pakaian Anda langsung ke pintu rumah Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!--? Offer-services Start  -->
    <section class="offer-services pb-bottom2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <span class="element">Pelayan</span>
                        <h2>Layanan yang kami tawarkan</h2>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-6">
                    <div class="single-offers">
                        <img src="{{ asset('frontend/img/gallery/offers1.png') }}" alt="" class=" w-100">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-offers">
                        <img src="{{ asset('frontend/img/gallery/offers2.png') }}" alt="" class=" w-100">
                        <div class="offers-caption text-center">
                            <div class="cat-icon">
                                <img src="{{ asset('frontend/img/icon/offers-icon1.png') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Cloth laundry</a></h5>
                                <p>Nikmati pakaian bersih dan segar dengan layanan pencucian kami, untuk hari-hari yang lebih nyaman dan percaya diri.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-offers">
                        <img src="{{ asset('frontend/img/gallery/offers2.png') }}" alt="" class=" w-100">
                        <div class="offers-caption text-center">
                            <div class="cat-icon">
                                <img src="{{ asset('frontend/img/icon/offers-icon1.png') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Cloth ironing</a></h5>
                                <p>Tingkatkan Penampilan Anda dengan Setrika Pakaian yang Berkualitas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-offers">
                        <img src="{{ asset('frontend/img/gallery/offers4.png') }}" alt="" class=" w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offer-services End  -->


    <!--? Company achievement Start -->
    <section class="services-area section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <span class="element">Fakta Menarik</span>
                        <h2>Pencapaian Perusahaan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-cap">
                            <span>{{ $users }}</span>
                            <p>Terdapat {{ $users }} member kami yang berlangganan kepada kami</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-cap">
                            <span>{{ $transaksi }}</span>
                            <p>Terdapat {{ $transaksi }} transaksi pelayanan laundry yang telah kami berikan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-cap">
                            <span>{{ $formattedPercentage }} %</span>
                            <p>Kami mendapat {{ $formattedPercentage }}% predikat kepuasan dalam pelayanan yang telah kami berikan</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-bt">
                            <img src="{{ asset('frontend/img/gallery/company-bg.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Company achievement End -->
    <!--? About Area  -->
    <section class="about-area2 pb-bottom mt-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="{{ asset('before/img/landing/roko.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-25">
                            <h2>Tentang Erbe Laundry</h2>
                        </div>
                        <p class="mb-20">
                            Erbe Laundry didirikan pada tahun 2021 oleh bapak Rudi Baruno yang berlokasi pada Jl.Tentara Rakyat Mataram No 14 Gang Nusa Indah Kelurahan Bumijo Kecamatan Jetis kota Yogyakarta.
                        </p>

                        <a href="{{ url('tentang') }}" class="btn">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
    <!--?  Map Area start  -->
    <div class="Map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.028888129813!2d110.3576540700507!3d-7.7867618287565845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59acd5ff6c15%3A0xc5b9a6921aa377d2!2sERBE%20Laundry%20Yogyakarta!5e0!3m2!1sid!2sid!4v1710649409387!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        {{-- <img src="{{ asset('frontend/img/gallery/Map.png') }}" alt="" class="w-100"> --}}
    </div>
    <!-- Map Area End -->



@endsection

