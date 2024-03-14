<!-- header -->
<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
	<div class="container-fluid px-0">
		<div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
			<div class="d-flex align-items-center" id="navbar-title">
				{{ config('app.name') }}
			</div>
			<ul class="navbar-nav align-items-center">
				<li class="nav-item dropdown ms-lg-3">
					<a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown"
						aria-expanded="false">
						<div class="media d-flex align-items-center">
							<img class="avatar rounded-circle" alt="Default User Profile" src="{{ asset('img/team/user-profile.png') }}">
							<div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
								<span class="mb-0 font-small fw-bold text-gray-900">Hi, {{ auth()->user()->name }}!</span>
							</div>
						</div>
					</a>
					<div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
						<a class="dropdown-item d-flex align-items-center" href="{{ route('profile.edit') }}">
							<i class="dropdown-icon text-gray-400 me-2 bi bi-person-circle"></i>
							My Profile
						</a>
						<div role="separator" class="dropdown-divider my-1"></div>
        		<form id="logout-form" action="{{ route('logout') }}" method="POST">
							@csrf
							<a href="" class="logout dropdown-item d-flex align-items-center" >
								<i class="dropdown-icon text-danger me-2 bi bi-box-arrow-right"></i>
								Logout
							</a>
						</form>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>

{{-- push script --}}
@push('scripts')
	<script type="text/javascript" src="{{ asset('js/page/navbar/index.js') }}"></script>
@endpush