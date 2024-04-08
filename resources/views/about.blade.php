@extends('frontend.main')
@section('content')

 <!--? Hero Start -->
 <div class="slider-area2 section-bg2 hero-overly" data-background="{{ asset('frontend/img/hero/hero2.png') }}">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2">
                        <h2>Tentang Erbe Laundry</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
<!--? About Area  -->
<section class="about-area2 section-padding40 mb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <!-- about-img -->
                <div class="about-img">
                    <img src="{{ asset('before/img/landing/roko.jpg') }}" style="margin-top: -20px;" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="about-caption mb-50">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-25">
                        <h2 >Tentang Perusahaan</h2>
                    </div>
                    <p class="mb-20">
                        Erbe Laundry didirikan pada tahun 2021 oleh bapak Rudi Baruno yang berlokasi pada Jl.Tentara Rakyat Mataram No 14 Gang Nusa Indah Kelurahan Bumijo Kecamatan Jetis kota Yogyakarta.
                    </p>
                    <p class="mb-30"> Usaha ini merupakan usaha laundry yang mematok harga Rp.4.000/Kg.Usaha yang ditawarkan Erbe Laundry berupa jasa mencuci dan menyetrika mulai dari  baju, celana, bed cover, selimut, sprei, dress, jaket, dan karpet yang dihitung berdasarkan  satuan/pcs maupun kiloan. </p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Area End -->






<section class="team-area section-padding40">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
                <div class="section-tittle text-center mb-55">
                    <span class="element">Tim Kami</span>
                    <h2>Pengembang Sistem</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- Kartu Tim Anggota 1 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-4 shadow">
                    <div class="card-body bg-white">
                        <div class="team-img text-center">
                            <img src="frontend/img/gallery/erylaundry.jpg" alt="Jane Smith" class="rounded-circle" height="200px" width="200px">
                        </div>
                        <div class="team-caption text-center mt-4">
                            <h3 class="card-title">Mutmainah Kamah</h3>
                            <h3 class="card-text"> 19330021</h3>
                            <p class="card-text"> Mahasiswi</p>
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kartu Tim Anggota 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-4 shadow">
                    <div class="card-body bg-white">
                        <div class="team-img text-center">
                            <img src="frontend/img/gallery/inalaundry.jpg" alt="Jane Smith" class="rounded-circle img-fluid" height="200px" width="200px">
                        </div>
                        <div class="team-caption text-center mt-4">
                            <h3 class="card-title">Ery Haryanto, S.Kom., M.Kom.</h3>
                            <p class="card-text">Dosen Pembimbing</p>
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection

