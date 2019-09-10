<?php
require 'functions.php';

$melogo = get_page_image('me', 'logo');
 ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Home</title>
		<?php include 'header.php'; ?>
	</head>
	<style>

	.fa {
		padding: 20px;
	  font-size: 30px;
	  text-align: center;
	  text-decoration: none;
	  margin: 5px 2px;
	}

	.fa:hover {
	    opacity: 0.7;
	}

	.fa-instagram {
		background: linear-gradient(45DEG, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D);
	   color: white;
	}

	</style>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="homepage.php" class="logo">
									<span class="logoimg"><img src=<?php echo $melogo['picture'] ?> alt="" /></span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="homepage.php">Home <i class='fas fa-home' style='font-size:0.9em'></i></a></li>
							<li><a href="xxxtentacion.php">XXXTentacion</a></li>
							<li><a href="lilskies.php">Lil Skies</a></li>
							<li><a href="lilxan.php">Lil Xan</a></li>
							<li><a href="skimask.php">Ski Mask the Slump God</a></li>
							<li><a href="agenda.php">Agenda <i class="fa fa-calendar" style="font-size: 0.9em; padding: 0px;"></i></a></li>
							<li><a href="aboutme.php">About me <i class="material-icons" style="font-size:0.9em">person</i></a></li>
							<li><a href="search.php">Search <i class="material-icons" style="font-size:0.9em">search</i></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<!-- <h1>GM Beats<br/></h1> -->
								<p id="welcome">Welcome to GM Beats. On GM Beats you can find an overview of my favorite artists and their music.</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="img/xxxtentacion_myband.jpg" alt="" />
									</span>
									<a href="xxxtentacion.php">
										<h2>XXXTentacion</h2>
										<div class="content">
											<p>Click for more info about XXXTentacion.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="img/lilskies2.jpg" alt="" />
									</span>
									<a href="lilskies.php">
										<h2>Lil Skies</h2>
										<div class="content">
											<p>Click for more info about Lil Skies.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="img/lilxan_myband.jpg" alt="" />
									</span>
									<a href="lilxan.php">
										<h2>Lil Xan</h2>
										<div class="content">
											<p>Click for more info about Lil Xan.</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="img/skimask2.jpg" alt="" />
									</span>
									<a href="skimask.php">
										<h2>Ski Mask the Slump God</h2>
										<div class="content">
											<p>Click for more info about Ski Mask the Slump God.</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="img/agenda2.jpg" alt="" />
									</span>
									<a href="agenda.php">
										<h2>Agenda</h2>
										<div class="content">
											<p>Click to see the agenda.</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="img/logo.png" alt="" />
									</span>
									<a href="aboutme.php">
										<h2>About me</h2>
										<div class="content">
											<p>Click for more info about me.</p>
										</div>
									</a>
								</article>
							</section>
						</div>
					</div>

				<!-- Footer -->
				<?php include 'footer.php'; ?>

			</div>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/browser.min.js"></script>
			<script src="js/breakpoints.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>
			<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>

	</body>
</html>
