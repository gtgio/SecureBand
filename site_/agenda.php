<?php
require 'functions.php';

$melogo = get_page_image('me', 'logo');
$agendabanner = get_page_image('agenda', 'header');
 ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Agenda</title>
		<?php include 'header.php'; ?>
		<link href="js-cal/calendar.css" rel="stylesheet">
    <script src="js-cal/calendar.js"></script>
	</head>
	<style>
	#myBtn {
		display: none;
		position: fixed;
		bottom: 20px;
		right: 30px;
		z-index: 99;
		font-size: 12px;
		border: none;
		outline: none;
		opacity: 0.8;
		background-color: rgba(255, 255, 255, 0.5);
		/* rgb(66, 66, 72); */
		color: rgb(226, 192, 127);
		cursor: pointer;
		/* padding: 15px; */
		border-radius: 4px;
		/* border-style: groove; */
		border-color: #e2c07f;
	}

	html {
  scroll-behavior: smooth;
}

#section_links {
	border: 3px solid #e2c07f;
	border-radius: 5px;
	text-align: center;

}

.section_link{
	color: white;
	cursor: pointer;
}

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
	<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
		if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
			document.getElementById("myBtn").style.display = "block";
		} else {
			document.getElementById("myBtn").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
	</script>
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
							<h1 id="title_agenda">Agenda</h1>
							<span class="image main"><img  src=<?php echo $agendabanner['picture'] ?> alt="" /></span>
							<div id="section_links">
							<a class="section_link" href="#section1">The agenda</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section2">The dates</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section3">Calendar</a> &nbsp;&nbsp;&nbsp;
						</div>
							<button class="button" onclick="topFunction()" id="myBtn" title="Go to top">&uarr;</button>

							<br><br>
							<div class="main" id="section1">
							<h2>The agenda</h2>
							<p>This is the agenda page. Here you will find dates for tours and performances.
								You will also find a calendar here. Here you can place the other dates for performances and tours that are not mentioned on this page.
							</p>
						</div>
							<br>

							<div class="main" id="section2">
							<h2>The dates for performances and / or tours</h2>
							<h5>XXXTentacion</h5>
							<li>No upcoming shows</li>
							<br>

							<h5>Lil Skies</h5>
							<table style="width:100%">
							<tr>
							 <td>DATE</td>
							 <td>NAME</td>
							 <td>LOCATION</td>
						 </tr>
						 <tr>
							 <td>June 8 2019</td>
							 <td>High Times Cannabis Cup 2019</td>
							 <td>Auto City Speedway, Clio</td>
						 </tr>
						 <tr>
							 <td>June 15 2019</td>
							 <td>BREAKOUT Festival 2019</td>
							 <td>PNE Amphitheatre, Vancouver</td>
						 </tr>
						 <tr>
							 <td>June 28 2019</td>
							 <td>Vestiville 2019</td>
							 <td>Industriezone Balendijk-Kristalpark, Lommel</td>
						 </tr>
						 <tr>
							 <td>July 4 2019</td>
							 <td>Lil Skies</td>
							 <td>Electric Brixton, London</td>
						 </tr>
						 <tr>
							 <td>July 5 2019</td>
							 <td>Wireless Festival 2019</td>
							 <td>Finsbury Park, London</td>
						 </tr>
						 <tr>
							 <td>July 6 2019</td>
							 <td>Lil Skies</td>
							 <td>Ruissalo / Ruisrock Festival, Turku</td>
						 </tr>
						 <tr>
							 <td>August 1 2019</td>
							 <td>Lollapalooza</td>
							 <td>Grant Park, Chicago</td>
						 </tr>
						 </table>
						 <br>

						 <h5>Lil Xan</h5>
						 <table style="width:100%">
						 <tr>
							<td>DATE</td>
							<td>NAME</td>
							<td>LOCATION</td>
						</tr>
						<tr>
							<td>June 20 2019</td>
							<td>Lil Xan</td>
							<td>The Wellmont Theater, Montclair</td>
						</tr>
						<tr>
							<td>June 21 2019</td>
							<td>Lil Xan</td>
							<td>Palladium, Worcester</td>
						</tr>
						<tr>
							<td>June 22 2019</td>
							<td>Lil Xan</td>
							<td>Webster Theater, Hartford</td>
						</tr>
						<tr>
							<td>June 23 2019</td>
							<td>Lil Xan</td>
							<td>Upstate Concert Hall, Clifton Park</td>
						</tr>
						</table>
						<br>

						<h5>Ski Mask the Slump God</h5>
						<table style="width:100%">
						<tr>
						 <td>DATE</td>
						 <td>NAME</td>
						 <td>LOCATION</td>
					 </tr>
					 <tr>
						 <td>June 7 2019</td>
						 <td>Juice WRLD and Ski Mask the Slump God</td>
						 <td>Moody Theater - Austin TX, Austin</td>
					 </tr>
					 <tr>
						 <td>June 8 2019</td>
						 <td>Juice WRLD and Ski Mask the Slump God and MadeinTYO</td>
						 <td>The Bomb Factory, Dallas</td>
					 </tr>
					 <tr>
						 <td>June 9 2019</td>
						 <td>Juice WRLD and Ski Mask the Slump God, Comethazine en YBN Nahmir</td>
						 <td>The Bomb Factory, Dallas</td>
					 </tr>
					 <tr>
						 <td>June 11 2019</td>
						 <td>Juice WRLD and Ski Mask the Slump God, Comethazine en YBN Nahmir</td>
						 <td>The Criterion, Oklahoma City</td>
					 </tr>
					 <tr>
						 <td>June 29 2019</td>
						 <td>Summer Smash 2019</td>
						 <td>Douglas Park Cultural & Community Center, Chicago</td>
					 </tr>
					 <tr>
						 <td>July 5 2019</td>
						 <td>Wireless Festival 2019</td>
						 <td>Finsbury Park, London</td>
					 </tr>
					 <tr>
						 <td>July 5 2019</td>
						 <td>Wireless Germany - 2-Day-Ticket (JULY 5th / 6th 2019)</td>
						 <td>Alter Rebstockpark, Frankfurt</td>
					 </tr>
					 <tr>
						 <td>August 2 2019</td>
						 <td>Osheaga Music & Arts 2019</td>
						 <td>Park Jean-Drapeau, Montreal</td>
					 </tr>
					 <tr>
						 <td>August 16 2019</td>
						 <td>Kraków Live Festival 2019</td>
						 <td>Muzeum Lotnictwa Polskiego, Krakow</td>
					 </tr>
					 </table>
				 </div>
					 <br>

					 <div class="main" id="section3">
					 <h2>Calendar</h2>
					 <p>Here you can place other dates for tours and performances that are not mentioned above.</p>
							<div id="page-body">
						    <!-- [PERIOD SELECTOR] -->
						    <div id="cal-date">
						      <select id="cal-mth"></select>
						      <select id="cal-yr"></select>
						      <input id="cal-set" type="button" value="SET DATE"/>
						    </div>

						    <!-- [CALENDAR] -->
						    <div id="cal-container"></div>


						    <!-- [EVENT] -->
						    <div id="cal-event"></div>
						  </div>
						</div>
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

	</body>
</html>
