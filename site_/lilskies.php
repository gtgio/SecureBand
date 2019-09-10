<?php

require 'functions.php';

$melogo = get_page_image('me', 'logo');
$skiesbanner = get_page_image('skies', 'header');
$skiesimage1 = get_page_image('skies','content_career_1');
$skiesimage2 = get_page_image('skies','content_career_2');
$skiesimage3 = get_page_image('skies','content_career_3');
$skiesimage4 = get_page_image('skies','content_merch');

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Lil Skies</title>
		<?php include 'header.php'; ?>
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

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
	background: linear-gradient(45DEG, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D);
   color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.deezer {
	margin-top: 10px;
  width: 150px;
	/* display: block; */
	margin-left: auto;
	margin-right: auto;
text-decoration: none;
		margin: 0px 20px;
		height: 55px;
		cursor: pointer;
}

.deezer:hover {
	opacity: 0.7;
}

.site {
	margin-top: 10px;
  width: 65px;
	display: block;
	margin-left: auto;
	margin-right: auto;
text-decoration: none;
		margin: 5px 4px;
}

.site:hover {
	opacity: 0.7;
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
							<h1 id="title_skies">Lil Skies</h1>
							<span class="image main"><img  src=<?php echo $skiesbanner['picture'] ?> alt="" /></span>
							<div id="section_links">
							<a class="section_link" href="#section1">Short info</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section2">Early life</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section3">Career</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section4">Personal life</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section5">Discography</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section6">Music</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section7">Social media & merch</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section8">News articles</a>
						</div>
							<button class="button" onclick="topFunction()" id="myBtn" title="Go to top">&uarr;</button>

               <br><br>
							 <div class="main" id="section1">
               <h2>Short info</h2>
							 <p>Kimetrius Foose (born August 4, 1998), known professionally as Lil Skies, is an American rapper from Waynesboro, Pennsylvania currently signed to All We Got Entertainment through Atlantic Records. His two top singles have appeared on the Billboard Hot 100: "I" (#35), "Nowadays" (#55), and "Red Roses" (#69). His major label debut mixtape, Life of a Dark Rose, was released on January 10, 2018 and peaked at #10 on the Billboard 200 chart. The album was certified Gold by the RIAA on November 9, 2018</p>
						 </div>
							 <br>
							 <div class="main" id="section2">
							 <h2>Early life<img id="lilskies-kid" src=<?php echo $skiesimage1['picture'] ?> alt="Lil Skies as a child" align="right"></h2>
							 <p>Foose was born August 4, 1998 in Chambersburg, Pennsylvania to multiracial parents. Foose began writing songs at age 4. He was introduced to music by his father, Michael Burton, Jr., a fellow hip hop artist known professionally as Dark Skies. Foose's stage name is a play on his father's. Foose and his family moved to Waynesboro, Pennsylvania when he was in third grade.
							 </p>
							 <p class="toggle-text" id="toggle-text-7">

								 When he was 11, his father was injured in a workplace chemical explosion at the Rust-Oleum plant near Williamsport, Maryland. The two would write an album, Father-Son Talk, discussing the recovery process. Foose graduated from Waynesboro Area Senior High School in 2016 and briefly attended Shippensburg University of Pennsylvania before dropping out to focus on his rap career.
               </p>
							 <div class="btn-container">
							 <button class="toggle-text-button" toggle-text="7">Read More</button>
							 </div>
						 </div>
							 <br>

							 <div class="main" id="section3">
							 <h2>Career</h2>
							 <p>In October 2016, Foose opened for Fetty Wap at Shippensburg University and later released his first mixtape, Alone, in January 2017. In July 2017, he released two songs, "Red Roses" featuring Landon Cube and "Off The Goop" featuring Sprite Lee. He would later release other songs that year, including "Rude" and "Signs of Jealousy."
							 Foose's repertoire of singles caught the attention of Atlantic Records who partnered with his own label, All We Got. He released his first major label mixtape, Life of a Dark Rose, on January 10, 2018. The album debuted at #23 on the Billboard 200 chart and went on to peak at #10.</p>
							 <p class="toggle-text" id="toggle-text-8">
								 <img id="lilskies-stage" src=<?php echo $skiesimage2['picture'] ?> alt="Lil Skies on stage" align="right">

								 The songs "Nowadays" and "Red Roses" (both featuring Landon Cube) debuted on the Billboard Hot 100 list at #85 and #98 respectively and have since peaked at #55 and #69 (also respectively). He also toured nationally with Lil Uzi Vert in 2017 and began his "Life of a Dark Rose" tour in 2018, but had to end the tour short due to illness.
								 <br><br>
								 On May 4, 2018, "Lust" from Life of a Dark Rose was released as the third official single from the album, peaking at number 87 on the Billboard Hot 100 and being certified Gold by the RIAA. On May 31, he released "I Know You" featuring Yung Pinch which peaked at 79 on the Billboard Hot 100.
                 <br>
								 On March 1, 2019, Lil Skies released his album Shelby, while simultaneously debuting the music video for lead single "I".
							 </p>
							 <div class="btn-container">
							 <button class="toggle-text-button" toggle-text="8">Read More</button>
							 </div>
						 </div>
							 <br>
							 <img id="lilskies-tour" src=<?php echo $skiesimage3['picture'] ?> alt="Lil Skies during Life of a Dark Rose tour" align="center">
							 <br>

							<div class="main" id="section4">
							 <h2>Personal life</h2>
							 <p>In February 2019, Foose announced he's expecting his first child with his longtime girlfriend.
                  Foose cites his own song "Red Roses" as his personal favorite song, referring to the musical combination with him and Landon Cube as "epic". Foose uses his social media solely for promoting his music, claiming he does so in order to "not live my life through the internet". He cites Travis Scott and Mac Miller as his biggest music inspirations.
                  Foose tries to avoid drugs as much as possible after seeing it negatively impact the lives of his old friends.
								</p>
							</div>
								<br>

								<div class="main" id="section5">
								<h2>Discography</h2>
								<table style="width:100%">
				 			  <tr>
				 			   <td>TITLE</td>
				 			   <td>ALBUM DETAILS</td>
				 				 <td>PEAK CHART POSITIONS</td>
				 				 <td>SALES</td>
				 				 <td>CERTIFICATIONS</td>
				 			  </tr>
								<tr>
									<td>Life of a Dark Rose</td>
				 			   <td><li>Released: January 10, 2018</li><br>
				              <li>Label: All We Got, Atlantic</li><br>
				              <li>Format: CD, digital download</li></td>
				 				 <td>92 (ARIA Australian Albums)<br>
				 					   115 (BEL (FL) Ultratop)<br>
										 17 (CAN Canadian Album Chart)<br>
				 					   94 (NLD Dutch Charts, GfK Dutch Charts, MegaCharts)<br>
										 43 (IFPI The Official Finnish Charts)<br>
				 					   38 (RMNZ New Zealand Albums)<br>
										 10 (US Billboard 200)<br>
				 					   5 (US Top Rap Albums)</td>
				 				 <td>CAN: 40,000<br>
								     US: 500,000</td>
				 				 <td>Music Canada: Gold<br>
								     RIAA: Gold
				 					 </td>
								</tr>
				 			  <tr>
									<td>Shelby</td>
				 			   <td><li>Released: March 1, 2019</li><br>
				              <li>Label: All We Got, Atlantic</li><br>
				              <li>Format: CD, digital download</li></td>
				 				 <td>5 (US Billboard 200)<br>
				 					   2 (US R&B/HH Top R&B/Hip-Hop Albums)<br>
										 2 (US Rap Top Rap Albums)<br>
				 					   20 (AUS ARIA Charts)<br>
										 57 (BEL (FL) Ultratop)<br>
				 					   7 (CAN Canadian Albums Chart)<br>
										 11 (NLD Dutch Charts, GfK Dutch Charts, MegaCharts)<br>
				 					   21 (NZ Official New Zealand Music Chart)<br>
				 					   27 (SWE Sverigetopplistan)<br>
				 					   30 (UK Official Albums Chart)</td>
				 				 <td>Unknown</td>
				 				 <td>Unknown
				 					 </td>
								</tr>
              </table>
						</div>
							<br>

              <div class="main" id="section6">
							<h2>Music</h2>

							<iframe src="https://open.spotify.com/embed/artist/7d3WFRME3vBY2cgoP38RDo" width="389" height="400" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
              <iframe scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=389&height=400&color=e2c07f&layout=dark&size=medium&type=album&id=53739792&app_id=1" width="389" height="400"></iframe>
              <!-- <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="400" style="width:100%;max-width:389px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/album/shelby/1453383300?app=music"></iframe> -->
							<iframe width="389" height="400" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/719212011&color=%23e2c07f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>

<div class="video-container">
							<iframe width="480" height="270" display="block" margin-left="auto"
						  margin-right="auto" align="center" src="https://www.youtube.com/embed/4eS5o3beHko" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
							<br>

							<div class="main" id="section7">
			        <h2>Social media and merch</h2>

							<iframe src="https://open.spotify.com/follow/1/?uri=spotify:artist:7d3WFRME3vBY2cgoP38RDo&size=detail&theme=dark" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
              <a href="https://geo.itunes.apple.com/us/artist/lil-skies/1162362760?mt=1&app=music&ls=1" style="display:inline-block;overflow:hidden;background:url(https://tools.applemusic.com/nl-nl/lockup.svg?kind=artist&bubble=apple_music&style=standard-white) no-repeat;width:170px;height:40px;"></a>
							<a href="https://www.deezer.com/en/artist/12835615" class="deezer" target="_blank">
			 			 <img src="img/deezer.png" class="deezer" >
			 		 </a>
							<br>
							<a href="https://www.instagram.com/lilskies/" class="fa fa-instagram" target="_blank"></a>
							<a href="https://www.youtube.com/channel/UCLEyFXOmaIgG6h4_6wqLx7Q" class="fa fa-youtube" target="_blank"></a>
							<a href="https://twitter.com/lilskies" class="fa fa-twitter" target="_blank"></a>
							<a href="https://soundcloud.com/lil-skies" class="fa fa-soundcloud" target="_blank"></a>
							<a href="https://lilskies.com/" target="_blank">
							<img src="img/lilskies-ll-logo.png" class="site" align="left">
						  </a>
						</div>
							<br><br><br><br>
							<img src=<?php echo $skiesimage4['picture'] ?> id="lilskies_merch" align="center">

              <br>
							<div class="main" id="section8">
							<h2>News articles</h2>
							<div class="iframely-embed"><div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://variancemagazine.com/sounds/10130-lil-skies-album-shelby" data-iframely-url="//cdn.iframe.ly/MylJv6c?iframe=card-small"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
							<div class="iframely-embed"><div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://www.complex.com/music/2019/02/lil-pump-lil-skies-spring-tour-dates" data-iframely-url="//cdn.iframe.ly/IPCcevZ?iframe=card-small"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
							<div class="iframely-embed"><div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://www.hotnewhiphop.com/lil-skies-joins-gnar-and-craig-xen-on-death-note-new-song.1983323.html" data-iframely-url="//cdn.iframe.ly/4ruKsMQ?iframe=card-small"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
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
