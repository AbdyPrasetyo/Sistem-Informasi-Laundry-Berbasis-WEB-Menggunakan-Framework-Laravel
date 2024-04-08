	<!-- partial:partials/_horizontal-navbar.html -->
	<div class="horizontal-menu">
		<nav class="navbar top-navbar col-lg-12 col-12 p-0">
			<div class="container-fluid">
				<div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
					<ul class="navbar-nav navbar-nav-left">
						<li class="nav-item ms-0 me-5 d-lg-flex d-none">

						</li>


					</ul>

                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo" href="#"><img src="{{ asset('frontend/img/logo/logo.png') }}"
                                alt="logo" /></a>
                      <a class="navbar-brand brand-logo-mini" href="#"><img src="{{ asset('frontend/img/logo/logo.png') }}"
                                alt="logo" /></a>

					{{-- <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
						<a class="navbar-brand brand-logo" href="#">Erbe
							Laundry</a> --}}
						{{-- <a class="navbar-brand brand-logo-mini" href="index.html"></a></a> --}}
					</div>
					<ul class="navbar-nav navbar-nav-right">

						<li class="nav-item dropdown d-lg-flex d-none">
							<a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm"
								id="nreportDropdown" href="#" data-bs-toggle="dropdown">
								Reports
							</a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
								aria-labelledby="nreportDropdown">
								<p class="mb-0 font-weight-medium float-left dropdown-header">Reports</p>
								<a class="dropdown-item" href="{{ route('admin.reports.index') }}">
									<i class="mdi mdi-file-pdf text-primary"></i>
									Pdf
								</a>

							</div>
						</li>
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




        <nav class="bottom-navbar">
            <div class="container">
                <ul class="nav page-navigation">
                    <li class="nav-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.index') }}">
                            <i class="mdi mdi-view-dashboard menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('admin.transactions.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.transactions.create') }}" class="nav-link">
                            <i class="mdi mdi-cart-outline menu-icon"></i>
                            <span class="menu-title">Input Transaksi</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('admin.transactions.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.transactions.index') }}" class="nav-link">
                            <i class="mdi mdi-chart-areaspline menu-icon"></i>
                            <span class="menu-title">Riwayat Transaksi</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('admin.price-lists.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.price-lists.index') }}" class="nav-link">
                            <i class="mdi mdi-square-inc-cash menu-icon"></i>
                            <span class="menu-title">Daftar Harga</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('admin.members*') ? 'active' : '' }}">
                        <a href="{{ route('admin.members.index') }}" class="nav-link">
                            <i class="mdi mdi-account-multiple-plus
                            menu-icon"></i>
                            <span class="menu-title">Daftar Members</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('admin.vouchers.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.vouchers.index') }}" class="nav-link">
                            <i class="mdi mdi-cash-100 menu-icon"></i>
                            <span class="menu-title">Voucher</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('admin.complaint-suggestions.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.complaint-suggestions.index') }}" class="nav-link">
                            <i class="mdi mdi-message-text menu-icon"></i>
                            <span class="menu-title">Riwayat Komplain</span>
                            <i class="menu-arrow"></i>
                        </a>

                    </li>

                </ul>
            </div>
        </nav>


	</div>
	<!-- partial -->















