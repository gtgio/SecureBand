<?php

require 'functions.php';

$melogo = get_page_image('me', 'logo');
$xanbanner = get_page_image('xan', 'header');
$xanimage1 = get_page_image('xan','content_career_1');
$xanimage2 = get_page_image('xan','content_career_2');
$xanimage3 = get_page_image('xan','content_career_3');
$xanimage4 = get_page_image('xan','content_merch');

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Lil Xan</title>
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
	width: 56px;
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
							<h1 id="title_xan">Lil Xan</h1>
							<span class="image main"><img  src=<?php echo $xanbanner['picture'] ?> alt="" /></span>
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
							<p>Nicholas Diego Leanos (born September 6, 1996), better known as Lil Xan or simply Diego, is an American rapper, singer and songwriter from Redlands, California. He is best known for his song "Betrayed", which was certified platinum by the RIAA and peaked at number 64 on the Billboard Hot 100. On April 6, 2018, Leanos released his debut studio album, Total Xanarchy.
                His stage name is derived from the name of the prescription drug Xanax.</p>
              </div>

							<br>
							<div class="main" id="section2">
							<h2>Early life</h2>
							<p>Leanos was born on September 6, 1996, in Redlands, California to Mexican parents. Growing up, Leanos was poor and lived in motels most of his childhood. <br> He attended Redlands East Valley High School, but dropped out of high school in his freshman year, and spent several years at home unemployed. Leanos took a job as a street cleaner and sold drugs before he began rapping. Leanos later pursued a photography career in support of several friends who were rappers. He eventually had his camera stolen, and chose to begin rapping in lieu of investing in a new camera.</p>
						</div>
							<br>

							<div class="main" id="section3">
							<h2>Career</h2>
							<p>Leanos began to gain recognition through platforms such as SoundCloud and YouTube. His popularity grew after the release of the music video for his song "Betrayed" in August 2017. The song peaked at no. 64 on the Billboard Hot 100. In an interview with XXL, Leanos announced his debut album Total Xanarchy. The album includes collaborations with artists such as Diplo and Swae Lee. In December 2017, Leanos announced his Total Xanarchy tour, which sold out in five hours according to Billboard.</p>
							<p class="toggle-text" id="toggle-text-9">
								<img id="lilxan-tx" src=<?php echo $xanimage1['picture'] ?> alt="lil xan Total Xanarchy album" align="right">
							In 2018, Leanos announced that he would change his stage name to "Diego" in order to support his anti-drug message, though he later said in an interview he was not sure if he would change his name.<br>
              Leanos released his debut studio album, Total Xanarchy on April 6, 2018. The album debuted at number ten on the Billboard 200. The following month in May 2018, Leanos announced the mixtape Heartbreak Soldiers which was released on July 8, 2018. In September 2018, Leanos announced that his next album would be titled Be Safe as a tribute to Mac Miller, as these were the last words he said to Leanos before his death.
						</p>

						<div class="btn-container">
						<button class="toggle-text-button" toggle-text="9">Read More</button>
						</div>
					</div>
						<br>
						<img id="lilxan-stage" src=<?php echo $xanimage2['picture'] ?> alt="Lil Xan on stage" align="center">
            <br>

						<div class="main" id="section4">
						<h2>Personal life</h2>
						<p>Leanos started dating singer and actress Noah Cyrus on June 30, 2018. The couple released the collaboration "Live or Die" in August 2018. They broke up in September 2018 after Cyrus jokingly sent a photo of singer, Charlie Puth, photoshopped on a naked porn star's body to Leanos, prompting him to accuse her of being unfaithful. Leanos initially asserted that the relationship was forced by the couple's record label, Columbia. However, weeks later he appeared to walk back this claim in an interview on Open Late with Peter Rosenberg, stating "Honest to God, I would say like most of the reason the breakup happened was because of me.
            </p>
						<p class="toggle-text" id="toggle-text-10">
							<img id="lilxan-girl" src=<?php echo $xanimage3['picture'] ?> alt="Lil Xan on stage" align="right">
						It was my fault. We could have still been together, but I just feel like I fucked everything up. It also put me in a darker place because I was getting slammed left and right." He went on to say that he had "nothing but love for the Cyrus family."
            <br>
            Leanos was formerly addicted to Xanax, along with opiates and other benzodiazepines, but he was able to quit the drug after two years of addiction. Leanos currently speaks out against Xanax abuse and urges people to stop using the drug altogether.

            On September 28, 2018, Leanos was hospitalized and was treated for stomach pain after "eating too many Flamin' Hot Cheetos". According to a CNN report, Frito-Lay said that Flamin' Hot Cheetos meet all food safety regulations.
            <br>
            In February 2019, Leanos announced that he and fiancée Annie Smith were expecting a child. On April 6, Smith revealed that she had a miscarriage. She shared the news via a video and photographs on Instagram.
					</p>
					<div class="btn-container">
					<button class="toggle-text-button" toggle-text="10">Read More</button>
					</div>
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
						<td>Total Xanarchy</td>
					 <td><li>Release: April 6, 2018</li><br>
								<li>Label: Columbia</li><br>
								<li>Formats: CD, digital download</li></td>
					 <td>6 (RMNZ New Zealand Heatseeker Albums)<br>
					     10 (US Billboard 200)</td>
					 <td>Unknown</td>
					 <td>
						 Unknown
						 </td>
					</tr>
       </table>
		 </div>
     <br>

					<div class="main" id="section6">
		      <h2>Music</h2>

					<iframe src="https://open.spotify.com/embed/artist/3EXdLajEO02ziZ90P90bSW" width="389" height="400" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          <iframe scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=389&height=400&color=e2c07f&layout=dark&size=medium&type=album&id=93691312&app_id=1" width="389" height="400"></iframe>
					<!-- <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="400" style="width:100%;max-width:389px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/album/heartbreak-soldiers-ep/1436892207?app=music"></iframe> -->
					<iframe width="389" height="400" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/557322705&color=%23e2c07f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>

					<div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/EbfK7dei7ec" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
				<br>

        <div class="main" id="section7">
				<h2>Social media & merch</h2>

				<iframe src="https://open.spotify.com/follow/1/?uri=spotify:artist:3EXdLajEO02ziZ90P90bSW&size=detail&theme=dark" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
				<a href="https://music.apple.com/us/artist/lil-xan/1163274805?mt=1&app=music&ls=1" style="display:inline-block;overflow:hidden;background:url(https://tools.applemusic.com/nl-nl/lockup.svg?kind=artist&bubble=apple_music&style=standard-white) no-repeat;width:170px;height:40px;"></a>
				<a href="https://www.deezer.com/en/artist/11167720" class="deezer" target="_blank">
			 <img src="img/deezer.png" class="deezer" >
		 </a>

		 <br>
		 <a href="https://www.instagram.com/xanxiety/" class="fa fa-instagram" target="_blank"></a>
		 <a href="https://www.youtube.com/channel/UC6Cc4U4MuBpgR7yzKkY_gZw" class="fa fa-youtube" target="_blank"></a>
		 <a href="https://twitter.com/lilxanfuhyobih" class="fa fa-twitter" target="_blank"></a>
		 <a href="https://soundcloud.com/lil_xan" class="fa fa-soundcloud" target="_blank"></a>
		 <a href="https://xanarchygang.com/" target="_blank">
			 <img src="img/lilxan-logo.jpg" class="site" align="left">
			 </a>
		 </div>
			 <br><br><br><br>
			 <img src=<?php echo $xanimage4['picture'] ?> id="lilskies_merch" align="center">

       <br>
			 <div class="main" id="section8">
       <h2>News articles</h2>
       <div class="iframely-embed"><div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://www.hotnewhiphop.com/lil-xan-lets-the-hair-down-in-tree-sap-visuals-new-video.44881.html" data-iframely-url="//cdn.iframe.ly/Oj7MPdu?iframe=card-small"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
			 <div class="iframely-embed"><div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://pagesix.com/2019/04/29/lil-xan-taking-a-break-from-the-devil-that-is-social-media/" data-iframely-url="//cdn.iframe.ly/pE94mUB?iframe=card-small"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
			 <div class="iframely-embed"><div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://www.spin.com/2019/06/lil-xan-pulls-gun-after-being-harassed-about-calling-tupac-boring/" data-iframely-url="//cdn.iframe.ly/hpi31rG?iframe=card-small"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
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
