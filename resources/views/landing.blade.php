<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('before/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>


    .bg-image {
        background-image: url('before/img/landing/roko.jpg');
        background-size: cover;
        height: 600px;
    }
    .bg-orange {
        background:#FF8C00;
        color: black;
        /* background-image: url('before/img/landing/roko.jpg'); */
        backface-visibility: 29;

        background-size: cover; /* Menyesuaikan ukuran gambar agar sesuai dengan ukuran elemen */

        background-position: center; /* Posisi gambar di tengah-tengah elemen */

        }

    </style>

    <link rel="stylesheet" href="{{ asset('before/css/style.css') }}">

    <!-- Javascript -->
    <script defer src="{{ asset('before/vendor/jquery/jquery.min.js') }}"></script>
    <script defer src="{{ asset('before/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">Erbe Laundry</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="btn btn-light" href="{{url('login')}}">@lang('landing.loginOrRegister')</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-image py-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-3 text-white mt-5 mb-2">@lang('landing.welcome')</h1>
                    <p class="lead mb-5 text-white-50">@lang('landing.tagline')</p>
                </div>
                <div class="col-lg-6">
                    {{-- <img class="img-fluid  bottom-3 d-none d-lg-block" src="{{asset('before/img/landing/boba.jpg')}}"> --}}
                </div>
            </div>
        </div>
    </header>

    <section class="p-5 text-center">
        <h3>@lang('landing.why')</h3>
    </section>

    <!-- Page Content -->
    <section class="kelebihan bg-orange text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Peralatan Lengkap dan Canggih</h4>
                    <p>Laundry kami menggunakan peralatan yang cukup lengkap dan canggih. Peralatan kami memungkinkan
                        baju tidak perlu dijemur dan mengurangi debu pada baju. Dengan peralatan laundry yang lengkap dan canggih, kami berkomitmen untuk memberikan layanan pencucian pakaian yang berkualitas dan efisien kepada pelanggan kami. Mesin cuci terkini dan pengering modern kami tidak hanya memastikan bahwa pakaian dicuci dan dikeringkan dengan baik, tetapi juga membantu mengurangi kerutan dan debu yang menempel pada pakaian. </p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{asset('before/img/landing/alatt (1).png')}}" height="20px" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan bg-orange text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{asset('before/img/landing/tipe.png')}}" alt=""
                        srcset="">
                </div>
                <div class="col-lg-6">
                    <h4>Segala Tipe Pakaian</h4>
                    <p>Laundry kami  menerima segala jenis pakaian dan barang tekstil, mulai dari baju, celana, dan jas hingga gorden, bed cover, selimut, seprei, karpet, dan berbagai jenis pakaian dan perlengkapan lainnya. Dengan peralatan canggih dan tenaga kerja terampil, kami dapat menangani berbagai jenis kain dan tekstur dengan hati-hati dan efisien. Pelanggan dapat yakin bahwa pakaian dan barang tekstil mereka akan diperlakukan dengan penuh perhatian dan keahlian, serta dikembalikan dalam kondisi yang bersih, segar, dan siap digunakan. Tak peduli jenis atau ukuran pakaian Anda, kami siap memberikan layanan pencucian yang berkualitas dan memenuhi kebutuhan Anda dengan baik.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan bg-orange text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Pegawai Profesional</h4>
                    <p>
                        Laundry kami memiliki tim pegawai yang profesional dan terampil, yang tidak hanya memiliki keahlian dalam bidangnya masing-masing, tetapi juga mampu bekerja secara efektif dalam tim. Setiap anggota tim kami telah dilatih dengan baik dalam proses pencucian dan perawatan pakaian, serta memahami pentingnya kualitas dan akurasi dalam setiap tugas yang mereka lakukan. Dengan dedikasi mereka yang tinggi terhadap pekerjaan dan pemahaman yang mendalam tentang industri laundry, kami dapat memastikan bahwa setiap langkah dalam proses pencucian dilakukan dengan teliti dan tepat. Ini meminimalkan risiko kesalahan dan memastikan bahwa setiap pelanggan menerima hasil yang memuaskan setiap kali mereka menggunakan layanan kami.</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{asset('before/img/landing/staff.png')}}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="text-center p-5">
        <h3>Apa saja yang bisa kami laundry?</h3>
    </section>

    <section class="bg-orange p-5 text-center">
        <div class="container">
            <div class="row flex-row flex-nowrap kategori">
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('before/img/landing/Baju.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Baju</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('before/img/landing/Celana.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Celana</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('before/img/landing/Jas.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Jas</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('before/img/landing/Selimut.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Selimut</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center p-5">
        <h3>Temukan kami!</h3>
    </section>

    <section class="text-white bg-orange">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-6 mb-4 mb-sm-0">
                    <h5>Alamat</h5>
                    <p>Jl. Tentara Rakyat Mataram Gg. Nusa Indah No.14, Bumijo, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55231</p>
                    <br>
                    <h5>Kontak</h5>
                    <p>akun@gmail.com</p>
                    <p>081296148321</p>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.028888129813!2d110.3576540700507!3d-7.7867618287565845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59acd5ff6c15%3A0xc5b9a6921aa377d2!2sERBE%20Laundry%20Yogyakarta!5e0!3m2!1sid!2sid!4v1710649409387!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </section>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; {{config('app.name')}} 2020</p>
        </div>
        <!-- /.container -->
    </footer>

</body>

</html>
