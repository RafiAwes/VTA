<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bootstrap Dashboard by Bootstrapious.com</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="all,follow">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="{{url("/")}}/frontend_assets/vendor/bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome CSS-->
	<link rel="stylesheet" href="{{url("/")}}/frontend_assets/vendor/font-awesome/css/font-awesome.min.css">
	<!-- Fontastic Custom icon font-->
	<link rel="stylesheet" href="{{url("/")}}/frontend_assets/css/fontastic.css">
	<!-- Google fonts - Roboto -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<!-- jQuery Circle-->
	<link rel="stylesheet" href="{{url("/")}}/frontend_assets/css/grasp_mobile_progress_circle-1.0.0.min.css">
	<!-- Custom Scrollbar-->
	<link rel="stylesheet" href="{{url("/")}}/frontend_assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
	<!-- theme stylesheet-->
	<link rel="stylesheet" href="{{url("/")}}/frontend_assets/css/style.default.css" id="theme-stylesheet">
	<!-- Custom stylesheet - for your changes-->
	<link rel="stylesheet" href="{{url("/")}}/frontend_assets/css/custom.css">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{url("/")}}/frontend_assets/img/favicon.ico">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


</head>

<body>
	<!-- Side Navbar -->
	<nav class="side-navbar">
		<div class="side-navbar-wrapper">
			<!-- Sidebar Header    -->
			<div class="sidenav-header d-flex align-items-center justify-content-center">
				<!-- User Info-->
				<div class="sidenav-header-inner text-center"><img src="{{url("/")}}/frontend_assets/img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
					<h2 class="h5">Vatara Taekwon-Do Association </h2>
				</div>
				<!-- Small Brand information, appears on minimized sidebar-->
				<div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
			</div>
			<!-- Sidebar Navigation Menus-->
			<div class="main-menu">
				<h5 class="sidenav-heading">Main</h5>
				<ul id="side-main-menu" class="side-menu list-unstyled">
					<li><a href="{{route('dashboard')}}"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="{{route('view.slots')}}"> <i class="icon-grid"></i>Batches</a></li>
                    <li><a href="{{route('make.slots')}}"> <i class="icon-form"></i>Make Batches </a></li>

					{{-- <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Example dropdown </a>
						<ul id="exampledropdownDropdown" class="collapse list-unstyled ">
							<li><a href="#">Page</a></li>
							<li><a href="#">Page</a></li>
							<li><a href="#">Page</a></li>
						</ul>
					</li> --}}
					{{-- <li><a href="login.html"> <i class="icon-interface-windows"></i>Login page </a></li>
					<li> <a href="#"> <i class="icon-mail"></i>Demo
							<div class="badge badge-warning">6 New</div></a></li> --}}
				</ul>
			</div>
			{{-- <div class="admin-menu">
				<h5 class="sidenav-heading">Second menu</h5>
				<ul id="side-admin-menu" class="side-menu list-unstyled">
					<li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>
					<li> <a href="#"> <i class="icon-flask"> </i>Demo
							<div class="badge badge-info">Special</div></a></li>
					<li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>
					<li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>
				</ul>
			</div> --}}
		</div>
	</nav>
	<div class="page">
		<!-- navbar-->
		<header class="header">
			<nav class="navbar">
				<div class="container-fluid">
					<div class="navbar-holder d-flex align-items-center justify-content-between">
						<div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
								<div class="brand-text d-none d-md-inline-block"><span>Vatara </span><strong class="text-primary">Taekwon-Do Association</strong></div>
							</a></div>
						<ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
							{{-- <!-- Notifications dropdown-->
							<li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
								<ul aria-labelledby="notifications" class="dropdown-menu">
									<li><a rel="nofollow" href="#" class="dropdown-item">
											<div class="notification d-flex justify-content-between">
												<div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
												<div class="notification-time"><small>4 minutes ago</small></div>
											</div>
										</a></li>
									<li><a rel="nofollow" href="#" class="dropdown-item">
											<div class="notification d-flex justify-content-between">
												<div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
												<div class="notification-time"><small>4 minutes ago</small></div>
											</div>
										</a></li>
									<li><a rel="nofollow" href="#" class="dropdown-item">
											<div class="notification d-flex justify-content-between">
												<div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
												<div class="notification-time"><small>4 minutes ago</small></div>
											</div>
										</a></li>
									<li><a rel="nofollow" href="#" class="dropdown-item">
											<div class="notification d-flex justify-content-between">
												<div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
												<div class="notification-time"><small>10 minutes ago</small></div>
											</div>
										</a></li>
									<li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications </strong></a></li>
								</ul>
							</li> --}}
							<!-- Messages dropdown-->
							{{-- <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
								<ul aria-labelledby="notifications" class="dropdown-menu">
									<li><a rel="nofollow" href="#" class="dropdown-item d-flex">
											<div class="msg-profile"> <img src="{{url("/")}}/frontend_assets/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
											<div class="msg-body">
												<h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
											</div>
										</a></li>
									<li><a rel="nofollow" href="#" class="dropdown-item d-flex">
											<div class="msg-profile"> <img src="{{url("/")}}/frontend_assets/img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
											<div class="msg-body">
												<h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
											</div>
										</a></li>
									<li><a rel="nofollow" href="#" class="dropdown-item d-flex">
											<div class="msg-profile"> <img src="{{url("/")}}/frontend_assets/img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
											<div class="msg-body">
												<h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
											</div>
										</a></li>
									<li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages </strong></a></li>
								</ul>
							</li> --}}
							<!-- Languages dropdown    -->
							{{-- <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
								<ul aria-labelledby="languages" class="dropdown-menu">
									<li><a rel="nofollow" href="#" class="dropdown-item"> <img src="{{url("/")}}/frontend_assets/img/flags/16/DE.png" alt="English" class="mr-2"><span>German</span></a></li>
									<li><a rel="nofollow" href="#" class="dropdown-item"> <img src="{{url("/")}}/frontend_assets/img/flags/16/FR.png" alt="English" class="mr-2"><span>French </span></a></li>
								</ul>
							</li> --}}
							<!-- Log out-->
							<form action="{{route('logout')}}" method="POST">
                                @csrf
                                <input type="submit" class="btn btn-secondary text-white" value="logout">
                            </form>
						</ul>
					</div>
				</div>
			</nav>
		</header>

        @yield('content')

		<footer class="main-footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<p>Your company &copy; 2017-2019</p>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- JavaScript files-->
	<script src="{{url("/")}}/frontend_assets/vendor/jquery/jquery.min.js"></script>
	<script src="{{url("/")}}/frontend_assets/vendor/popper.js/umd/popper.min.js"> </script>
	<script src="{{url("/")}}/frontend_assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{url("/")}}/frontend_assets/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
	<script src="{{url("/")}}/frontend_assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
	<script src="{{url("/")}}/frontend_assets/vendor/chart.js/Chart.min.js"></script>
	<script src="{{url("/")}}/frontend_assets/vendor/jquery-validation/jquery.validate.min.js"></script>
	<script src="{{url("/")}}/frontend_assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="{{url("/")}}/frontend_assets/js/charts-home.js"></script>
	<!-- Main File-->
	<script src="{{url("/")}}/frontend_assets/js/front.js"></script>
	<script src="https://kit.fontawesome.com/c218529370.js"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script>
        $(document).ready(function () {
            $('#toggle-btn').on('click', function (e) {

                e.preventDefault();

                if ($(window).outerWidth() > 1194) {
                    $('nav.side-navbar').toggleClass('shrink');
                    $('.page').toggleClass('active');
                } else {
                    $('nav.side-navbar').toggleClass('show-sm');
                    $('.page').toggleClass('active-sm');
                }
            });

        });

    </script>
</body>

</html>
