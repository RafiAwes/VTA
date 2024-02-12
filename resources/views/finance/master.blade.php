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
					<h2 class="h5">Nathan Andrews</h2><span>Web Developer</span>
				</div>
				<!-- Small Brand information, appears on minimized sidebar-->
				<div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
			</div>
			<!-- Sidebar Navigation Menus-->
			<div class="main-menu">
				<h5 class="sidenav-heading">Main</h5>
				<ul id="side-main-menu" class="side-menu list-unstyled">
					<li><a href="{{route('dashboard')}}"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-money-check-alt"></i>Payment </a>
						<ul id="exampledropdownDropdown" class="collapse list-unstyled ">
							<li><a href="{{route('monthly-fees')}}">Monthly Fee</a></li>
							<li><a href="#">Dress Fee</a></li>
							<li><a href="#">Belt Test Fee</a></li>
							<li><a href="#">Tournament Fee</a></li>
						</ul>
					</li>
                    {{-- <li><a href="{{route('finance-payment')}}"> <i class="fas fa-money-check-alt"></i>Payment </a></li> --}}
                    <li><a href="/students/list"> <i class="icon-form"></i>Students</a></li>
                    <li><a href="{{route('view.slots')}}"> <i class="icon-grid"></i>Batches </a></li>
                    <li><a href="{{route('take.attendance')}}"> <i class="icon-grid"></i>Atendance </a></li>
                    <li><a href="{{route('take.attendance')}}"> <i class="fa fa-bar-chart"></i>View attendants</a></li>
                    <li><a href="/students/view/completed-students"> <i class="fas fa-user-graduate"></i>Completed Students</a></li>
                    <li><a href="/students/view/dropped-students"> <i class="fas fa-times"></i>Dropped Students</a></li>

				</ul>
			</div>

		</div>
	</nav>
	<div class="page">
		<!-- navbar-->
		<header class="header">
			<nav class="navbar">
				<div class="container-fluid">
					<div class="navbar-holder d-flex align-items-center justify-content-between">
						<div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
								<div class="brand-text d-none d-md-inline-block"><span>Bootstrap </span><strong class="text-primary">Dashboard</strong></div>
							</a></div>
						<ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
							<!-- Log out-->
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <li class="nav-item"><button type="submit" class="btn btn-primary"><i class="fa fa-sign-out"></i>Sign Out</button></li>
                            </form>
						</ul>
					</div>
				</div>
			</nav>
		</header>




        @yield('finance_content')




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
