<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ asset('adminkit/static/img/icons/icon-48x48.png') }}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/ui-buttons.html" />

	<title>TextingApp</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('adminkit/static/css/app.css') }}">
	<script src="{{ asset('adminkit/static/js/app.js') }}"></script>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{route('admin.home')}}">
          <span class="align-middle">TextingApp Admin</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Valdymo skydas
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('admin.home')}}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Pagrindinis</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('admin.users')}}">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Vartotojų valdymas</span>
            </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('admin.messages')}}">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Žinučių valdymas</span>
            </a>
					</li>

				</ul>

			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="list-group">
									
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Rodyti pranešimus</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
								</div>
								
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Rodyti visas žinutes</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="{{ asset('adminkit/static/img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">{{ Auth::user()->firstName}}</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="{{route('admin.profile')}}"><i class="align-middle me-1" data-feather="user"></i> Paskyros nustatymai</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Atsijungti
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
							</div>
						</li>
					</ul>
				</div>
			</nav>

            <main>
                @yield('content')
            </main>

			
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
</body>

</html>