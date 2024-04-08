<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> {{ $title }}</title>
	<!-- base:css -->
	<link rel="stylesheet" href="{{ asset('template/vendors/mdi/css/materialdesignicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('template/vendors/base/vendor.bundle.base.css') }}">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->

    <!-- Include jQuery Cookie -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
	<!-- endinject -->
	<link rel="shortcut icon" href="{{ asset('template/images/favicon.png') }}" />
    @yield('css')
    @routes('admin')
</head>

<body>

    @include('member.template.navbars')
	<div class="container-fluid page-body-wrapper">
		<div class="main-panel">
			<div class="content-wrapper">

                @yield('main-content')



			</div>



			<!-- partial:partials/_footer.html -->
			<footer class="footer">
				<div class="footer-wrap">
					<div class="d-sm-flex justify-content-center justify-content-sm-between">
						<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
							<a href="#" target="_blank">Mutmaina
							</a>2024</span>

					</div>
				</div>
			</footer>
			<!-- partial -->
		</div>
		<!-- main-panel ends -->



	</div>
	<!-- page-body-wrapper ends -->

	<!-- container-scroller -->
	<!-- base:js -->
	<script src="{{ asset('template/vendors/base/vendor.bundle.base.js') }}"></script>
	<!-- endinject -->
	<!-- Plugin js for this page-->
	<!-- End plugin js for this page-->
	<!-- inject:js -->
	<script src="{{ asset('template/js/template.js') }}"></script>
	<!-- endinject -->
	<!-- plugin js for this page -->
	<!-- End plugin js for this page -->
	<script src="{{ asset('template/vendors/chart.js/Chart.min.js') }}"></script>
	<script src="{{ asset('template/vendors/progressbar.js/progressbar.min.js') }}"></script>
	<script src="{{ asset('template/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js') }}"></script>
	<script src="{{ asset('template/vendors/justgage/raphael-2.1.4.min.js') }}"></script>
	<script src="{{ asset('template/vendors/justgage/justgage.js') }}"></script>
	<script src="{{ asset('template/js/jquery.cookie.js') }}" type="text/javascript"></script>
	<!-- Custom js for this page-->
	<script src="{{ asset('template/js/dashboard.js') }}"></script>
	<!-- End custom js for this page-->

    <!-- Logout Modal -->
    <x-admin.modals.logout-modal />

    <!-- Your custom JavaScript -->
    <script>
//       document.addEventListener('DOMContentLoaded', function() {
//     var currentPath = window.location.pathname.split("/").pop(); // Ambil bagian terakhir dari URL saat ini
//     var navLinks = document.querySelectorAll('.nav-item a');

//     navLinks.forEach(function(navLink) {
//         var href = navLink.getAttribute('href');
//         if (href && href.indexOf(currentPath) !== -1) {
//             navLink.closest('.nav-item').classList.add('active'); // Tambahkan kelas 'active' ke elemen navigasi yang sesuai
//         }
//     });
// });
    </script>
    @yield('modals')

    <!-- REQUIRED SCRIPTS -->
       <!-- jQuery -->
       <script src="{{ asset('before/vendor/jquery/jquery.min.js') }}"></script>
       <!-- Bootstrap 4 -->
       <script src="{{ asset('before/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
       <script src="{{ asset('before/vendor/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
       <!-- AdminLTE App -->
       {{-- <script src="{{ asset('before/vendor/adminlte/js/adminlte.min.js') }}"></script> --}}
       <script src="{{ asset('before/js/myscript.js') }}"></script>

       @yield('scripts')

       @stack('js')

    </script>


</body>


</html>
