<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from social.webestica.com/events-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:30:43 GMT -->
<head>
	<title>Social - Network, Community and Event Theme</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Bootstrap 5 based Social Media Network and Community Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/font-awesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/dropzone/dist/dropzone.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/flatpickr/dist/flatpickr.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/choices.js/public/assets/styles/choices.min.css')}}" />

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

</head>

<body>

<!-- =======================
Header START -->
<header class="navbar-light fixed-top header-static bg-mode">

	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index-2.html">
        <img class="light-mode-item navbar-brand-item" src="{{asset('assets/images/logo.svg')}}" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="{{asset('assets/images/logo.svg')}}" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto icon-md btn btn-light p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-animation">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </button>

			<!-- Main navbar START -->
			<div class="collapse navbar-collapse" id="navbarCollapse">

        <!-- Nav Search START -->
        <div class="nav mt-3 mt-lg-0 flex-nowrap align-items-center px-4 px-lg-0">
          <div class="nav-item w-100">
            <form class="rounded position-relative">
              <input class="form-control ps-5 bg-light" type="search" placeholder="Search..." aria-label="Search">
              <button class="btn bg-transparent px-2 py-0 position-absolute top-50 start-0 translate-middle-y" type="submit"><i class="bi bi-search fs-5"> </i></button>
            </form>
          </div>
        </div>
        <!-- Nav Search END -->

				<ul class="navbar-nav navbar-nav-scroll ms-auto">

					<!-- Nav item 1 Demos -->
					<li class="nav-item ">
						<a class="nav-link active " href="/eventindex" id="homeMenu" >Evenement</a>

					</li>
					<!-- Nav item 2 Pages -->
					<li class="nav-item ">
            <a class="nav-link active " href="/groupe" id="homeMenu" >Groupe</a>

          </li>

					<!-- Nav item 4 Mega menu -->
					<li class="nav-item">
						<a class="nav-link" href="/myconnexion">Mon reseau</a>
					</li>
				</ul>

			</div>
			<!-- Main navbar END -->

			<!-- Nav right START -->
				<ul class="nav flex-nowrap align-items-center ms-sm-3 list-unstyled">
        <!-- Notification dropdown END -->
        <li class="nav-item ms-2 dropdown">
					<a class="nav-link btn icon-md p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="avatar-img rounded-2" src="{{asset('assets/images/avatar/07.jpg')}}" alt="">
					</a>
          <ul class="dropdown-menu dropdown-animation dropdown-menu-end pt-3 small me-md-n3" aria-labelledby="profileDropdown">
            <!-- Profile info -->
            <li class="px-3">
              <div class="d-flex align-items-center position-relative">
                <!-- Avatar -->
                <div class="avatar me-3">
                  <img class="avatar-img rounded-circle" src="{{asset('assets/images/avatar/07.jpg')}}" alt="avatar">
                </div>
                <div>
                  <a class="h6 stretched-link" href="#">Lori Ferguson</a>
                  <p class="small m-0">Web Developer</p>
                </div>
              </div>
              <a class="dropdown-item btn btn-primary-soft btn-sm my-2 text-center" href="/myevent">Mon profil</a>
            </li>
            <!-- Links -->



            <li class="dropdown-divider"></li>
            <li><a class="dropdown-item bg-danger-soft-hover" href="sign-in-advance.html"><i class="bi bi-power fa-fw me-2"></i>Deconnexion</a></li>
            <li> <hr class="dropdown-divider"></li>
            <!-- Dark mode switch START -->
            <li>
              <div class="modeswitch-wrap" id="darkModeSwitch">
                <div class="modeswitch-item">
                  <div class="modeswitch-icon"></div>
                </div>
                <span>Mode sombre</span>
              </div>
            </li>
            <!-- Dark mode switch END -->
          </ul>
				</li>
			  <!-- Profile START -->

			</ul>
			<!-- Nav right END -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>


<main>



 @yield('content')



</main>
<!-- **************** MAIN CONTENT END **************** -->


<!-- Modal create events END -->

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- Vendors -->
<script src="{{asset('assets/vendor/dropzone/dist/dropzone.js')}}"></script>
<script src="{{asset('assets/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>
<script src="{{asset('assets/vendor/choices.js/public/assets/scripts/choices.min.js')}}"></script>

<!-- Template Functions -->
<script src="{{asset('assets/js/functions.js')}}"></script>

</body>

<!-- Mirrored from social.webestica.com/events-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:30:43 GMT -->
</html>
