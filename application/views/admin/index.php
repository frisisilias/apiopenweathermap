<?php
$status = "";
$msg = "";
$city = "";
if (isset($_POST['submit'])) {
	$city = $_POST['city'];
	$url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=68ed6b24befb171703b354d3609a4c06";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	curl_close($ch);
	$result = json_decode($result, true);
	if ($result['cod'] == 200) {
		$status = "yes";
	} else {
		$msg = $result['message'];
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>API OPENWEATHERMAP | <?= $title; ?></title>
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>

	<!-- Plugins CSS -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">
	<link rel="stylesheet" href="assets/plugins/simplelightbox/simple-lightbox.min.css">

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
	<style>
		@import url(https://fonts.googleapis.com/css?family=Poiret+One);
		@import url(https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css);

		body {
			background-color: cadetblue;
		}

		.widget {
			position: absolute;
			top: 50%;
			left: 50%;
			display: flex;
			height: 300px;
			width: 600px;
			transform: translate(-50%, -50%);
			flex-wrap: wrap;
			cursor: pointer;
			border-radius: 20px;
			box-shadow: 0 27px 55px 0 rgba(0, 0, 0, 0.3), 0 17px 17px 0 rgba(0, 0, 0, 0.15);
		}

		.widget .weatherIcon {
			flex: 1 100%;
			height: 60%;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;
			background: #FAFAFA;
			font-family: weathericons;
			display: flex;
			align-items: center;
			justify-content: space-around;
			font-size: 100px;
		}

		.widget .weatherIcon i {
			padding-top: 30px;
		}

		.widget .weatherInfo {
			flex: 0 0 70%;
			height: 40%;
			background: darkslategray;
			border-bottom-left-radius: 20px;
			display: flex;
			align-items: center;
			color: white;
		}

		.widget .weatherInfo .temperature {
			flex: 0 0 40%;
			width: 100%;
			font-size: 65px;
			display: flex;
			justify-content: space-around;
		}

		.widget .weatherInfo .description {
			flex: 0 60%;
			display: flex;
			flex-direction: column;
			width: 100%;
			height: 100%;
			justify-content: center;
			margin-left: -15px;
		}

		.widget .weatherInfo .description .weatherCondition {
			text-transform: uppercase;
			font-size: 35px;
			font-weight: 100;
		}

		.widget .weatherInfo .description .place {
			font-size: 15px;
		}

		.widget .date {
			flex: 0 0 30%;
			height: 40%;
			background: #70C1B3;
			border-bottom-right-radius: 20px;
			display: flex;
			justify-content: space-around;
			align-items: center;
			color: white;
			font-size: 30px;
			font-weight: 800;
		}

		p {
			position: fixed;
			bottom: 0%;
			right: 2%;
		}

		p a {
			text-decoration: none;
			color: #E4D6A7;
			font-size: 10px;
		}

		.form {
			position: absolute;
			top: 42%;
			left: 50%;
			display: flex;
			height: 300px;
			width: 600px;
			transform: translate(-50%, -50%);
		}

		.text {
			width: 80%;
			padding: 10px
		}

		.submit {
			height: 39px;
			width: 100px;
			border: 0px;
		}

		.mr45 {
			margin-right: 45px;
		}
	</style>

</head>

<body id="page-top" class="docs-page">
	<header class="header fixed-top">
		<div class="branding docs-branding">
			<div class="container-fluid position-relative py-2">
				<div class="docs-logo-wrapper">
					<button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible me-2 d-xl-none" type="button">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<div class="site-logo"><a class="navbar-brand" href="<?= base_url('') ?>">API<span class="text-alt">OPENWEATHERMAP</span></span></a></div>
				</div>
				<!--//docs-logo-wrapper-->
				<div class="docs-top-utilities d-flex justify-content-end align-items-center">
					<div class="top-search-box d-none d-lg-flex">
						<form class="search-form">
							<input type="text" placeholder="Search..." name="search" class="form-control search-input">
							<button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
						</form>
					</div>

					<!-- Nav Item - User Information -->
					<ul class="list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
								<i class="fas fa-user-circle" src="<?= base_url('assets/images/profile/') . $user['image']; ?>"></i>
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="<?= base_url('user'); ?>">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									My Profile
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
									Settings
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>
					</ul>
				</div>
				<!--//docs-top-utilities-->
			</div>
			<!--//container-->
		</div>
		<!--//branding-->
	</header>
	<!--//header-->

	<div class="form">
		<form style="width:100%;" method="post">
			<input type="text" class="text" placeholder="Enter city name" name="city" value="<?php echo $city ?>" />
			<input type="submit" value="Submit" class="submit" name="submit" />
			<?php echo $msg ?>
		</form>
	</div>

	<?php if ($status == "yes") { ?>
		<article class="widget">
			<div class="weatherIcon">
				<img src="http://openweathermap.org/img/wn/<?php echo $result['weather'][0]['icon'] ?>@4x.png" />
				<div style="font-size: 30px;">
					<ul>
						<!-- <li>id : <span><?php echo ($result['weather']['id']) ?></span></li>
						<li>main : <span><?php echo ($result['weather']['main']) ?></span></li>
						<li>description : <span><?php echo ($result['weather']['description']) ?></span></li> -->
					</ul>
				</div>

			</div>
			<div class="weatherInfo">
				<ul>
					<li>Longitude : <span><?php echo round($result['coord']['lon']) ?></span></li>
					<li>Latitude : <span><?php echo round($result['coord']['lat']) ?></span></li>
					<li>Timezone : <span><?php echo round($result['timezone']) ?></span></li>
				</ul>
				<ul>
					<li>Pressure : <span><?php echo round($result['main']['pressure']) ?></span></li>
					<li>Humidity : <span><?php echo round($result['main']['humidity']) ?></span></li>
					<li>Wind Speed : <span><?php echo round($result['wind']['speed']) ?>M/H</span></li>
				</ul>
				<!-- <div class="temperature">
					<span><?php echo round($result['main']['temp'] - 273.15) ?>°</span>

				</div>
				<div class="description mr45">
					<div class="weatherCondition"><?php echo $result['weather'][0]['main'] ?></div>
					<div class="place"><?php echo $result['name'] ?></div>
				</div>
				<div class="description">
					<div class="weatherCondition">Wind</div>
					<div class="place"><?php echo $result['wind']['speed'] ?> M/H</div>
				</div> -->
			</div>
			<div class="date">
				<?php echo date('d M', $result['dt']) ?>
			</div>
		</article>
	<?php } ?>



	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
				</div>
			</div>
		</div>
	</div>


	<!-- Javascript -->
	<script src="assets/plugins/popper.min.js"></script>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Page Specific JS -->
	<script src="assets/plugins/smoothscroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
	<script src="assets/js/highlight-custom.js"></script>
	<script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
	<script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
	<script src="assets/js/docs.js"></script>

</body>

</html>