<?php

require 'functions.php';

$melogo = get_page_image('me', 'logo');
$skimask_banner = get_page_image('skimask','header');
$skimaskimage1 = get_page_image('skimask','content_career_1');
$skimaskimage2 = get_page_image('skimask','content_career_2');
$skimaskimage3 = get_page_image('skimask','content_career_3');
$skimaskimage4 = get_page_image('skimask','content_merch');

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Ski Mask the Slump God</title>
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
	width: 70px;
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
							<h1 id="title_skimask">Ski Mask the Slump God</h1>
							<span class="image main"><img src=<?php echo $skimask_banner['picture'] ?> alt="" /></span>
							<div id="section_links">
							<a class="section_link" href="#section1">Short info</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section2">Early life</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section3">Career</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section4">Personal life</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section5">Discography</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section6">Music</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section7">Social media & merch</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section7">News articles</a>
						</div>
							<button class="button" onclick="topFunction()" id="myBtn" title="Go to top">&uarr;</button>
              <br><br>
							<div class="main" id="section1">
							<h2>Short info</h2>
							<p>Stokeley Clevon Goulbourne (born April 18, 1996), known professionally as Ski Mask the Slump God (formerly stylized as $ki Mask "The Slump God"), is an American rapper and songwriter. Originally well known for his collaborations with fellow American rapper XXXTentacion and their collective Members Only, he began to gain popularity in 2017 following the release of his songs "Catch Me Outside" and "Babywipe", which are both featured on his mixtape "YouWillRegret" and certified Gold by the RIAA.
								Goulbourne's mixtape, Beware the Book of Eli, was released in May 2018, and peaked at No. 50 on the Billboard 200 chart. On November 18, Goulborne uploaded the cover art for his debut album on his social media, Stokeley, which was released on November 30, 2018.
							</p>
						</div>

							<br>
							<div class="main" id="section2">
							<h2>Early life</h2>
							<p>Stokeley Clevon Goulbourne was born on April 18, 1996 in Fort Lauderdale, Florida. He is of Jamaican descent.
                Goulbourne grew up listening to Busta Rhymes, Missy Elliott, Wu-Tang Clan, and Lil Wayne, among other artists. He has said that his parents often played Jamaican music around the house. Goulbourne's father—a rapper who used the stage name "Sin City"—would often force his son to focus on writing his own rap music. <br> In 2013, Goulbourne was sent to a juvenile detention center for possession of "around $10 worth of weed", where he met XXXTentacion. The duo became friends and frequently collaborated on songs after being released from detention.</p>
							</div>
								<br>

                 <div class="main" id="section3">
								<h2>Career</h2>
								<p>Following Goulbourne's release from detention, he formed the rap group "Very Rare” with XXXTentacion and released his first song "Catch Me" on the streaming service SoundCloud. Goulbourne eventually co-founded XXXTentacion's collective Members Only after the release of Members Only Vol. 1, a collaboration mixtape with XXXTentacion, in 2015. The mixtape would eventually be followed up with Members Only, Vol 2 and then Members Only, Vol 3 on June 26, 2017.
								</p>
								<p class="toggle-text" id="toggle-text-11">
									<img id="skimask-takeastepback" src=<?php echo $skimaskimage1['picture'] ?> alt="Ski Mask the Slump God YouWillRegret" align="right">
									Goulbourne has released multiple singles on the SoundCloud platform including "Catch Me Outside", "Where's the Blow" featuring Lil Pump, "Stunt!" featuring UnoTheActivist, "Life Is Short", "Like a Soccer Mom", "Take a Step Back", and "BabyWipe". "Catch Me Outside" used the instrumental of Missy Elliott's "She's a Bitch". Elliott responded positively to Goulbourne's rendition, writing, "Oh he rode the heck out of this Fiyahthis my She's a Bit[c]h beat!" on Twitter.
									<br> The song would eventually be certified Gold. Goulbourne has performed twice at the Rolling Loud Festival and has released songs with other artists including Offset, Lil Yachty, A$AP Ferg, Lil Peep, Desiigner, and Denzel Curry. Goulbourne has also collaborated with artists from the 88Rising label including the Higher Brothers and Keith Ape. Goulbourne also worked with Timbaland, which he has previously said was his favorite producer.
                  <br><br>
									<img id="skimask-stok" src=<?php echo $skimaskimage2['picture'] ?> alt="Ski Mask the Slump God Stokeley" align="right">
									In May 2016, Goulbourne released his first mixtape Drown in Designer, which included the songs "Take a Step Back", which was later certified Gold, and "Where's the Blow". In June 2017, Goulbourne released his debut commercial mixtape YouWillRegret under Republic Records. In May 2018, Goulbourne released his third mixtape Beware the Book of Eli, which featured the single "DoIHaveTheSause?". In June that same year, he was named one of XXL's "2018 Freshman Class".
									On November 30, 2018, Goulbourne released his debut studio album. Stokeley, which includes the songs "Faucet Failure" and "Nuketown" featuring Juice WRLD. The album peaked at number 6 on the Billboard 200 chart.
								</p>
								<div class="btn-container">
								<button class="toggle-text-button" toggle-text="11">Read More</button>
								</div>
							</div>
								<br>

								<img id="skimask-onstage" src=<?php echo $skimaskimage3['picture'] ?> alt="Ski Mask the Slump God on stage" align="center">
								<br>

								<div class="main" id="section4">
								<h2>Personal life</h2>
								<p>During a concert at The Fonda Theatre, Los Angeles on April 11, 2017, Goulbourne was pushed off stage and then assaulted by an associate of rapper Rob Stone. The attack was said to be instigated by an ongoing feud between the two rappers, starting when Goulbourne refused to leave the stage during Stone's opening act. Rob Stone was kicked off the remainder of Desiigner's Outlet Tour.
								</p>
								<p class="toggle-text" id="toggle-text-12">
									During a concert on August 10, 2018 in Austin, Texas, Ski Mask asked the crowd for a moment of silence for his friend XXXTentacion, who was fatally shot in June. When an audience member shouted "Fuck X, that woman beating piece of shit!", Ski threatened the audience member and encouraged the remaining audience to "Fuck him up!", leading to a melee. While the crowd was beating the man, Ski played one of X's most popular songs, "Look at Me" before the venue's security dispersed the disturbance and escorted the man outside of the venue.
									<br><br>
									In 2014, Goulbourne was sent to a juvenile detention center for possession of marijuana. Goulbourne was arrested for driving with a suspended license, driving without a license, and robbery in August 2016. He was later released on bail.
									<br>
									Goulbourne currently lives in New York. He had a heart condition which required surgery in March 2018.
								</p>
								<div class="btn-container">
								<button class="toggle-text-button" toggle-text="12">Read More</button>
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
									<td>Stokeley</td>
								 <td><li>Released: November 30, 2018</li><br>
											<li>Label: Republic</li><br>
											<li>Format: Digital download, CD, Vinyl</li></td>
								 <td>6 (US Billboard 200)<br>
								     4 (US R&B/HH Top R&B/Hip-Hop Albums)<br>
									   35 (AUS ARIA Charts)<br>
									   11 (CAN Canadian Albums Chart)<br>
									   38 (IRE Irish Albums Chart)<br>
									   13 (NOR VG-lista)<br>
									   24 (NZ Official New Zealand Music Chart)<br>
									   24 (SWE Sverigetopplistan)<br>
									   64 (UK Official Albums Chart)</td>
								 <td>Unknown</td>
								 <td>Unknown</td>
							 </tr>
							 <tr>
								 <td>YouWillRegret</td>
								 <td><li>Released: June 30, 2017</li><br>
											<li>Label: Republic</li><br>
											<li>Format: Digital download</li></td>
											<td>195 (US Billboard 200)</td>
											<td>Unknown</td>
											<td>Unknown</td>
								</tr>
			       </table>
					 </div>

						 <br>

						 <div class="main" id="section6">
						 <h2>Music</h2>
            <iframe src="https://open.spotify.com/embed/artist/2rhFzFmezpnW82MNqEKVry" width="389" height="400" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <iframe scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=389&height=400&color=e2c07f&layout=dark&size=medium&type=album&id=80280622&app_id=1" width="389" height="400"></iframe>
            <!-- <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="400" style="width:100%;max-width:389px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/album/you-will-regret-reloaded/1440902837?app=music"></iframe> -->
						<iframe width="389" height="400" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/727959771&color=%23e2c07f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>

						<div class="video-container">
             <iframe width="560" height="315" src="https://www.youtube.com/embed/tbhxSeaiMiU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
					</div>
						<br>

					  <div class="main" id="section7">
						<h2>Social media & merch</h2>

            <iframe src="https://open.spotify.com/follow/1/?uri=spotify:artist:2rhFzFmezpnW82MNqEKVry&size=detail&theme=dark" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
            <a href="https://music.apple.com/us/artist/ski-mask-the-slump-god/1174308445?mt=1&app=music&ls=1" style="display:inline-block;overflow:hidden;background:url(https://tools.applemusic.com/nl-nl/lockup.svg?kind=artist&bubble=apple_music&style=standard-white) no-repeat;width:170px;height:40px;"></a>
						<a href="https://www.deezer.com/en/artist/11347866" class="deezer" target="_blank">
					 <img src="img/deezer.png" class="deezer" >
				 </a>

				 <br>
				 <a href="https://www.instagram.com/theslumpgod/?hl=nl" class="fa fa-instagram" target="_blank"></a>
				 <a href="https://www.youtube.com/channel/UCdARoxad2UaIQPDy6fbz4Nw" class="fa fa-youtube" target="_blank"></a>
				 <a href="https://twitter.com/theslumpgod" class="fa fa-twitter" target="_blank"></a>
				 <a href="https://soundcloud.com/rickybobby-slumpgod" class="fa fa-soundcloud" target="_blank"></a>
				 <a href="https://shop.stokeley.net/" target="_blank">
					 <img src="img/skimask-logo.jpg" class="site" align="left">
					 </a>
				 </div>
				 <br><br><br><br>
				 <img src=<?php echo $skimaskimage4['picture'] ?> id="lilskies_merch" align="center">

					<br>
					<div class="main" id="section8">
					<h2>News article</h2>
					<div class="iframely-embed"><div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://www.houstonpress.com/music/last-night-juice-wrld-and-ski-mask-the-slump-god-at-revention-11304189" data-iframely-url="//cdn.iframe.ly/1TlyWNt?iframe=card-small"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
					<div class="iframely-embed"><div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://www.complex.com/music/2018/11/ski-mask-the-slump-god-stokeley-stream" data-iframely-url="//cdn.iframe.ly/ReL5NTU?iframe=card-small"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
					<div class="iframely-embed"><div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://www.xxlmag.com/news/2018/11/ski-mask-slump-god-certified-gold/" data-iframely-url="//cdn.iframe.ly/rCVaBP6?iframe=card-small"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
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
