@extends('frontend.main')
@section('content')

  <!--? Hero Start -->
  <div class="slider-area2 section-bg2 hero-overly" data-background="{{ asset('frontend/img/hero/hero2.png') }}">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2">
                        <h2>Pelayanan Kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
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




@endsection

