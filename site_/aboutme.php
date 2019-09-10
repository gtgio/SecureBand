<?php
require 'functions.php';

$melogo = get_page_image('me', 'logo');
$aboutbanner = get_page_image('aboutme', 'header');
$me_image1 = get_page_image('me','content_career_1');
$me_image2 = get_page_image('me','content_career_2');
 ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>About me</title>
		<?php include 'header.php'; ?>
		<link rel="stylesheet" href="style/gallery.css" />
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
	/* padding: 20px; */
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

.video-container {
	position:relative;
	padding-bottom:56.25%;
	padding-top:30px;
	height:0;
	overflow:hidden;
}

.video-container iframe, .video-container object, .video-container embed {
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
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
									<div class="logoimg"><img class="logoimg" src=<?php echo $melogo['picture'] ?>  alt="" /></div>
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
							<li><a href="agenda.php">Agenda <i class="fa fa-calendar" style="font-size:0.9em"></i></a></li>
							<li><a href="aboutme.php">About me <i class="material-icons" style="font-size:0.9em">person</i></a></li>
							<li><a href="search.php">Search <i class="material-icons" style="font-size:0.9em">search</i></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1 id="title_aboutme">About me</h1>
							<span class="image main"><img  src=<?php echo $aboutbanner['picture'] ?> alt="" /></span>
							<div id="section_links">
							<a class="section_link" href="#section1">Short info</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section2">Education</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section3">Personal life</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section4">About this website</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section5">Gallery</a> &nbsp;&nbsp;&nbsp;
						</div>
							<button class="button" onclick="topFunction()" id="myBtn" title="Go to top">&uarr;</button>

               <br><br>
							 <div class="main" id="section1">
               <h2>Short info</h2>
							 <p>My name is Giovanni Martelli. I am 18 years old and a student at the Mediacollege Amsterdam.</p>
						 </div>
							 <br>

              <div class="main" id="section2">
							 <h2>Education</h2><img id="school_1" src=<?php echo $me_image2['picture'] ?> alt="picture of m" align="right">
							 <p>I am a full stack developer
                  As a full stack developer you program and maintain (mobile) websites, apps and web applications. <br> You not only learn a lot about technology and programming,
									but also about the basics of digital design. Because a product must not only work well, the idea behind it must be good and the product must look attractive.
									You also learn to collaborate with designers, because they will later take care of the design.</p>
								</div>
									<br>
									<br>
                   <img id="me_1" src=<?php echo $me_image1['picture'] ?> alt="picture of me" align="right">

									 <div class="main" id="section3">
									<h2>Personal life</h2>
									<p>I was born on July 5, 2000 in the village of Petten, a small village in North Holland. In my free time I like to exercise and I can often be found with friends or with my girlfriend.
										I also love to party. <br> I'm a music lover and can't go a day without it.
                    The reason that I am following the training for full stack developer is because I have long been interested in how a website is structured and how it works.
									</p>
								</div>
									<br>


                  <div class="main" id="section4">
									<h2>About this website</h2>
									<p>This website is about some of my favorite artists. I had to build this website for a school project. I searched for as much information as possible for each artist and incorporated it into this site. I also used different api's such as those from spotify.
										A couple of these artists are a big inspiration to me and their music makes me motivated.</p>
										<p>This project is the 4th and last project in the first year of my education and I'm really proud of what I achieved.</p>
									</div>
										<br>


                  <!-- Gallery -->
                    <div class="main" id="section5">
										<h2>Gallery</h2>
										<p>Here you will find pictures and / or videos of my favorite artists and me.</p>

										<div class="rowgal">
										  <div class="column">
										    <img class="modalimg" id="modalimg1" src="img/xmodal.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
										  </div>
										  <div class="column">
										    <img class="modalimg" src="img/skimask2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
										  </div>
										  <div class="column">
										    <img class="modalimg" src="img/lilskiesmodal.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
										  </div>
										  <div class="column">
										    <img class="modalimg" src="img/xanmodal.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
										  </div>
											<div class="column">
										    <img class="modalimg1" src="img/ytlogox.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
										  </div>
											<div class="column">
										    <img class="modalimg1" src="img/ytlogoski.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
										  </div>
											<div class="column">
										    <img class="modalimg1" src="img/ytlogoskies.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
										  </div>
											<div class="column">
										    <img class="modalimg1" src="img/ytlogoxan.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
										  </div>
										</div>

										<div id="myModal" class="modal">
										  <span class="close cursor" onclick="closeModal()">&times;</span>
										  <div class="modal-content">

										    <div class="mySlides">
										      <div class="numbertext">1 / 8</div>
										      <img src="img/xxxtentacion_myband.jpg" style="width:100%">
										    </div>

										    <div class="mySlides">
										      <div class="numbertext">2 / 8</div>
										      <img src="img/skimask2.jpg" style="width:100%">
										    </div>

										    <div class="mySlides">
										      <div class="numbertext">3 / 8</div>
										      <!-- <img src="img_mountains_wide.jpg" style="width:100%"> -->
													<img src="img/lilskies.jpg" style="width:100%">
										    </div>

										    <div class="mySlides">
										      <div class="numbertext">4 / 8</div>
										      <img src="img/lilxan_myband.jpg" style="width:100%">
										    </div>

												<div class="mySlides">
												 <div class="numbertext">5 / 8</div>
												 <!-- <img src="img/ytlogox.jpg" style="width:100%"> -->
                         <div class="video-container">
												 <iframe width="713" height="515" src="https://www.youtube.com/embed/K3WWXyCtI7Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
											 </div>

											 <div class="mySlides">
												<div class="numbertext">6 / 8</div>
												<!-- <img src="img/ytlogoski.jpg" style="width:100%"> -->
                        <div class="video-container">
												<iframe width="713" height="515" src="https://www.youtube.com/embed/cgecj3dpEzk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
											</div>

											<div class="mySlides">
											 <div class="numbertext">7 / 8</div>
											 <!-- <img src="img/ytlogoskies.jpg" style="width:100%"> -->
                       <div class="video-container">
											 <iframe width="713" height="515" src="https://www.youtube.com/embed/N6FufyjLOpA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										 </div>
										 </div>

										 <div class="mySlides">
											<div class="numbertext">8 / 8</div>
											<!-- <img src="img/ytlogoxan.jpg" style="width:100%"> -->
											<div class="video-container">
											<iframe width="713" height="515" src="https://www.youtube.com/embed/P6Z7Rkwj7tQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>
										</div>

										    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
										    <a class="next" onclick="plusSlides(1)">&#10095;</a>

										    <div class="caption-container">
										      <p id="caption"></p>
										    </div>


										    <div class="column">
										      <img class="demo cursor" src="img/xxxtentacion_myband.jpg" style="width:100%" onclick="currentSlide(1)" alt="XXXTentacion">
										    </div>
										    <div class="column">
										      <img class="demo cursor" src="img/skimask2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Ski Mask the Slump God">
										    </div>
										    <div class="column">
										      <img class="demo cursor" src="img/lilskies.jpg" style="width:100%" onclick="currentSlide(3)" alt="Lil Skies">
										    </div>
										    <div class="column">
										      <img class="demo cursor" src="img/lilxan_myband.jpg" style="width:100%" onclick="currentSlide(4)" alt="Lil Xan">
										    </div>

										    <div>
													<p id="videostitle">&nbsp;</p>
												</div>

												<div class="column">
										      <img class="demo cursor" src="img/ytlogox.jpg" style="width:100%" onclick="currentSlide(5)" alt="XXXTentacion #THEHELPINGHANDCHALLENGE">
										    </div>
												<div class="column">
										      <img class="demo cursor" src="img/ytlogoski.jpg" style="width:100%" onclick="currentSlide(6)" alt="Ski Mask the Slump God Rolling Loud 2019">
										    </div>
												<div class="column">
													<img class="demo cursor" src="img/ytlogoskies.jpg" style="width:100%" onclick="currentSlide(7)" alt="Lil Skies Life of a Dark Rose Tour">
												</div>
												<div class="column">
													<img class="demo cursor" src="img/ytlogoxan.jpg" style="width:100%" onclick="currentSlide(8)" alt="Lil Xan a day in the life">
												</div>
										  </div>
										</div>

									<script>
									function openModal() {
									  document.getElementById("myModal").style.display = "block";
									}

									function closeModal() {
									  document.getElementById("myModal").style.display = "none";
									}

									var slideIndex = 1;
									showSlides(slideIndex);

									function plusSlides(n) {
									  showSlides(slideIndex += n);
									}

									function currentSlide(n) {
									  showSlides(slideIndex = n);
									}

									function showSlides(n) {
									  var i;
									  var slides = document.getElementsByClassName("mySlides");
									  var dots = document.getElementsByClassName("demo");
									  var captionText = document.getElementById("caption");
									  if (n > slides.length) {slideIndex = 1}
									  if (n < 1) {slideIndex = slides.length}
									  for (i = 0; i < slides.length; i++) {
									      slides[i].style.display = "none";
									  }
									  for (i = 0; i < dots.length; i++) {
									      dots[i].className = dots[i].className.replace(" active", "");
									  }
									  slides[slideIndex-1].style.display = "block";
									  dots[slideIndex-1].className += " active";
									  captionText.innerHTML = dots[slideIndex-1].alt;
									}
									</script>
                  </div>
									<br><br>


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
