	<!-- partial:partials/_horizontal-navbar.html -->
	<div class="horizontal-menu">
		<nav class="navbar top-navbar col-lg-12 col-12 p-0">
			<div class="container-fluid">
				<div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
					<ul class="navbar-nav navbar-nav-left">
						<li class="nav-item ms-0 me-5 d-lg-flex d-none">

						</li>

						{{-- <li class="nav-item dropdown">
							<a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
								id="messageDropdown" href="#" data-bs-toggle="dropdown">
								<i class="mdi mdi-email mx-0"></i>
								<span class="count bg-primary">4</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
								aria-labelledby="messageDropdown">
								<p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
								<a class="dropdown-item preview-item">
									<div class="preview-thumbnail">
										<img src="{{ asset('template/images/faces/face3.jpg') }}" alt="image" class="profile-pic">
									</div>
									<div class="preview-item-content flex-grow">
										<h6 class="preview-subject ellipsis font-weight-normal">David Grey
										</h6>
										<p class="font-weight-light small-text text-muted mb-0">
											The meeting is cancelled
										</p>
									</div>
								</a>
								<a class="dropdown-item preview-item">
									<div class="preview-thumbnail">
										<img src="{{ asset('template/images/faces/face3.jpg') }}" alt="image" class="profile-pic">
									</div>
									<div class="preview-item-content flex-grow">
										<h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
										</h6>
										<p class="font-weight-light small-text text-muted mb-0">
											New product launch
										</p>
									</div>
								</a>
								<a class="dropdown-item preview-item">
									<div class="preview-thumbnail">
										<img src="{{ asset('template/images/faces/face3.jpg') }}" alt="image" class="profile-pic">
									</div>
									<div class="preview-item-content flex-grow">
										<h6 class="preview-subject ellipsis font-weight-normal"> Johnson
										</h6>
										<p class="font-weight-light small-text text-muted mb-0">
											Upcoming board meeting
										</p>
									</div>
								</a>
							</div>
						</li> --}}


					</ul>
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo" href="#"><img src="{{ asset('frontend/img/logo/logo.png') }}"
                                alt="logo" /></a>
                      <a class="navbar-brand brand-logo-mini" href="#"><img src="{{ asset('frontend/img/logo/logo.png') }}"
                                alt="logo" /></a>

					{{-- <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
						<a class="navbar-brand brand-logo" href="index.html">Erbe
							Laundry</a> --}}
						{{-- <a class="navbar-brand brand-logo-mini" href="index.html"></a></a>tandai --}}
					</div>
					<ul class="navbar-nav navbar-nav-right">


						<li class="nav-item dropdown d-lg-flex d-none">
							<a href="{{ route('profile.index') }}" class="btn btn-inverse-primary btn-sm">Settings</a>
						</li>
						<li class="nav-item nav-profile dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
								<span class="nav-profile-name">{{ $user->name }}</span>
								<span class="online-status"></span>
								<img src="{{ asset('before/img/profile/'.$user->profile_picture) }}" alt="profile" />
							</a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown"
								aria-labelledby="profileDropdown">
								<a class="dropdown-item" href="{{ route('profile.index') }}">
									<i class="mdi mdi-settings text-primary"></i>
									Settings
								</a>
								<a href="#" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
									<i class="mdi mdi-logout text-primary"></i>
									Logout
								</a>
							</div>
						</li>
					</ul>
					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
						data-toggle="horizontal-menu-toggle">
						<span class="mdi mdi-menu"></span>
					</button>
				</div>
			</div>
		</nav>
		{{-- <nav class="bottom-navbar">
			<div class="container">
				<ul class="nav page-navigation">
					<li class="nav-item {{ request()->routeIs('member.index') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('member.index') }}">
							<i class="mdi mdi-view-dashboard menu-icon"></i>
							<span class="menu-title">Beranda</span>
						</a>
					</li>
                    <li class="nav-item {{ request()->routeIs('member.price_lists.index') ? 'active' : '' }}">
						<a href="{{ route('member.price_lists.index') }}" class="nav-link">
							<i class="mdi mdi-square-inc-cash menu-icon"></i>
							<span class="menu-title">Daftar Harga</span>
							<i class="menu-arrow"></i>
						</a>
					</li>

					<li class="nav-item {{ request()->routeIs('member.transactions.index') ? 'active' : '' }}">
						<a href="{{ route('member.transactions.index') }}" class="nav-link">
                            <i class="mdi mdi-chart-areaspline menu-icon"></i>
							<span class="menu-title">Riwayat Transaksi</span>
							<i class="menu-arrow"></i>
						</a>
					</li>


					<li class="nav-item {{ request()->routeIs('member.points.index') ? 'active' : '' }}">
						<a href="{{ route('member.points.index') }}" class="nav-link">
                            <i class="mdi mdi-cash-100 menu-icon"></i>
							<span class="menu-title">Tukar Poin</span>
							<i class="menu-arrow"></i>
						</a>
					</li>
					<li class="nav-item {{ request()->routeIs('member.complaints.index') ? 'active' : '' }}">
						<a href="{{ route('member.complaints.index') }}" class="nav-link">
                            <i class="mdi mdi-message-text menu-icon"></i>
							<span class="menu-title">Saran / Komplain</span>
							<i class="menu-arrow"></i>
						</a>

					</li>

				</ul>
			</div>
		</nav> --}}

        <nav class="bottom-navbar">
            <div class="container">
                <!-- Debugging Statement -->
                <ul class="nav page-navigation">

                    <li class="nav-item {{ ($title === "Beranda") ? 'active' : '' }}">
                        <a href="{{ route('member.index') }}" class="nav-link">
                            <i class="mdi mdi-view-dashboard menu-icon"></i>
                            <span class="menu-title">Beranda</span>
                        </a>
                    </li>

                    <li class="nav-item {{ ($title === "Daftar Harga") ? 'active' : '' }}">

                        <a href="{{ route('member.price_lists.index') }}" class="nav-link">
                            <i class="mdi mdi-square-inc-cash menu-icon"></i>
                            <span class="menu-title">Daftar Harga</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>

                    <li class="nav-item {{ ($title === "Riwayat Transaksi") ? 'active' : '' }}">
                        <a href="{{ route('member.transactions.index') }}" class="nav-link">
                            <i class="mdi mdi-chart-areaspline menu-icon"></i>
                            <span class="menu-title">Riwayat Transaksi</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>

                    <li class="nav-item {{ ($title === "Voucher Diskon") ? 'active' : '' }}">
                        <a href="{{ route('member.points.index') }}" class="nav-link">
                            <i class="mdi mdi-cash-100 menu-icon"></i>
                            <span class="menu-title">Tukar Poin</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item {{ ($title === "Saran-Komplain") ? 'active' : '' }}">
                        <a href="{{ route('member.complaints.index') }}" class="nav-link">
                            <i class="mdi mdi-message-text menu-icon"></i>
                            <span class="menu-title">Saran / Komplain</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>




	</div>
	<!-- partial -->

