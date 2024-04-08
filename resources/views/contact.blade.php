@extends('frontend.main')
@section('content')


  <!--? Hero Start -->
  <div class="slider-area2 section-bg2 hero-overly" data-background="{{ asset('frontend/img/hero/hero2.png') }}">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2">
                        <h2>Kontak Kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
<!--?  Contact Area start  -->
<section class="contact-section">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.028888129813!2d110.3576540700507!3d-7.7867618287565845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59acd5ff6c15%3A0xc5b9a6921aa377d2!2sERBE%20Laundry%20Yogyakarta!5e0!3m2!1sid!2sid!4v1710649409387!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>





        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            </div>

            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{ route('front.store') }}" method="post" id="" >
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button boxed-btn">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>ALamat Kami</h3>
                        <p>Jl. Tentara Rakyat Mataram Gg. Nusa Indah No.14, Bumijo, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55231</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>(+62) 812-9614-8321
                           </h3>
                        <p>Senin - Minggu 9:00 WIB -  20:00 WIB</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>erbelaundry@gmail.com</h3>
                        <p>Kirimkan pertanyaan Anda kepada kami kapan saja!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area End -->

@endsection

