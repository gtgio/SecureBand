
<?php

require 'functions.php';

$melogo = get_page_image('me', 'logo');
$xxxbanner = get_page_image('xxx', 'header');
$xxximage1 = get_page_image('xxx','content_career_1');
$xxximage2 = get_page_image('xxx','content_career_2');
$xxximage3 = get_page_image('xxx','content_career_3');
$xxximage4 = get_page_image('xxx','content_career_4');
$xxximage5 = get_page_image('xxx','content_death');
$xxximage6 = get_page_image('xxx','content_personal');
$xxximage7 = get_page_image('xxx','content_merch');
$xxximage8 = get_page_image('xxx','content_career_5');
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>XXXTentacion</title>
	<?php include 'header.php'; ?>

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
  width: 71px;
	display: block;
	margin-left: auto;
	margin-right: auto;
text-decoration: none;
		margin: 5px 4px;
		height: 71px;
		outline: 0;
}

.site:hover {
	opacity: 0.7;
}

</style>
</head>
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
							<h1 id="title_X">XXXTentacion</h1>
							<span class="image main"><img src=<?php echo $xxxbanner['picture'] ?> alt="" /></span>
							<div id="section_links">
							<a class="section_link" href="#section1">Short info</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section2">Early life</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section3">Career</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section4">Death</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section5">Personal life</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section6">Discography</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section7">Music</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section8">Social media & merch</a> &nbsp;&nbsp;&nbsp;
							<a class="section_link" href="#section9">News articles</a>
						</div>
							<button class="button" onclick="topFunction()" id="myBtn" title="Go to top">&uarr;</button>


							<br><br>
              <div class="main" id="section1">

							<h2>Short info</h2>
							<p>Jahseh Dwayne Ricardo Onfroy (January 23, 1998 – June 18, 2018), known professionally as XXXTentacion, was an American rapper, singer and songwriter. A controversial figure within the hip hop industry, Onfroy has been regarded to have left behind "a huge musical footprint" due to his impact on his young fanbase and his popularity during his short career.His most notable appearance was his tattoos and his distinctive half-colored hair.
                 Born in Plantation, Florida, Onfroy spent most of his childhood in Lauderhill. He began writing music after being released from a juvenile detention center and started his music career on SoundCloud in 2013, where he soon became a popular figure in SoundCloud rap, a trap scene that takes elements of lo-fi music and harsh 808s.
							 </p>
							 <p class="toggle-text" id="toggle-text-1">
								 Onfroy rose to mainstream fame with the song "Look at Me" which is now certified Platinum by the Recording Industry Association of America (RIAA). He released his debut album, 17, on August 25, 2017, which debuted at number 2 on the US Billboard 200, receiving a positive response from critics, some of which lauded the album for its personal narratives and diverse musical style. On August 15, 2018, the album was certified Platinum by the Recording Industry Association of America. Onfroy's second album, ?, was released on March 16, 2018, and it debuted at number one on the Billboard 200, with its singles "Sad!", "Changes" and "Moonlight" all reaching the top 20 of the Billboard Hot 100. The album was certified Platinum by the Recording Industry Association of America (RIAA) on August 7, 2018. In the week following his death, Onfroy's highest-charting single, "Sad!", went from 52nd to 1st on the Billboard Hot 100, making him the first artist to top the Hot 100 posthumously in a lead role since The Notorious B.I.G., with "Mo Money Mo Problems", in 1997. A few months after his death, he won the Best New Hip Hop Artist at the BET Hip Hop Awards and won the Favourite Album-Soul/R&B for 17 at the American Music Awards. Onfroy's third studio album, Skins, was posthumously released in December 2018.

                 <br><br>
                 On June 18, 2018, Onfroy was fatally shot at the age of 20, in a robbery at a motorcycle dealership in Deerfield Beach, Florida. The attackers fled the scene in an SUV after stealing a Louis Vuitton bag containing $50,000 from Onfroy; four suspects were arrested and are currently awaiting trial.</p>
							 </p>
								 <div class="btn-container">
			           <button class="toggle-text-button" toggle-text="1">Read More</button>
			           </div>
							 </div>
							<br>

              <div class="main" id="section2">
              <h2>Early life</h2>
							<p>Jahseh Dwayne Ricardo Onfroy was born on January 23, 1998, in Plantation, Florida, to Jamaican parents, Dwayne Ricardo Onfroy and Cleopatra Eretha Dreena Bernard. Onfroy has stated he has Egyptian, Syrian, Indian and possibly Italian ancestry in an interview on The Beat in 2017. He had three siblings with one being half, shared paternally. Onfroy was mainly raised by his grandmother Collette Jones due to his mother's financial situation in Pompano Beach, Florida, and Lauderhill, Florida. When Onfroy was six years old, he tried to stab a man attempting to attack his mother and was eventually put into a youth program before being forced to live with his grandmother.
              </p>
							<!-- <span id="text"> -->
							<p class="toggle-text" id="toggle-text-2">

              Onfroy's interest in music initially started after his aunt persuaded him to begin attending school choir and later church choir. He was soon kicked out of the school choir after attacking another student.
							Onfroy attended Margate Middle School from which he was later expelled after a series of physical altercations. He was subsequently enrolled into Sheridan House Family Ministries by his mother for over six months. Onfroy began to listen to nu-metal, hard rock and rap during his time at Sheridan House Family Ministries, which led to him to learn the piano and guitar.
              Onfroy attended Piper High School until he dropped out in the tenth grade. He described himself as a "misfit" during that time, citing how quiet he was despite being popular and regularly involved in physical confrontations. Onfroy was not the athletic type and said that he was insecure and depressed during his time in high school.
						</p>

					<!-- <button class="toggle-text-button" toggle-text="1">Read More</button> -->
          <div class="btn-container">
          <button class="toggle-text-button" toggle-text="2">Read More</button>
          </div>
				</div>

					<br>
					<div class="main" id="section3">
					<h2>Career</h2>
					<h5>Career beginnings and "Look at Me" (2013–16)</h5>
					<p>Onfroy's career as a music artist began in June 2013 after the release of his song "News/Flock". While in juvenile detention for gun possession charges,
						Onfroy met Stokeley Clevon Goulbourne, another artist known as Ski Mask the Slump God. During their time together, Onfroy and Goulbourne became good friends and began freestyling. Recalling his time in detention, Onfroy said that he was respectful to the officers and staff and used to protect people from other inmates, including a homosexual cellmate, whom Onfroy later attacked for allegedly staring at him while he was changing clothes.</p>

					<p class="toggle-text" id="toggle-text-3">
						<img id="x-ski-1" src=<?php echo $xxximage8['picture'] ?> alt="XXXTentacion and Ski Mask the Slump God" align="middle">
						<br>
          That same year, following his release from a juvenile detention center, Onfroy and Goulbourne met up again under the belief they were going to commit a string of home invasions for monetary gain though Onfroy eventually bought a Blue Snowball microphone and began recording music, which convinced Stokeley to do the same. After Onfroy adopted the moniker XXXTentacion, he uploaded his first official song, called "Vice City", on SoundCloud. Speaking on his decision to abandon a life of crime for music, Onfroy said that he felt like music was a better outlet for his feelings and then-girlfriend Geneva Ayala was someone who helped him realize that. He would then continue uploading small snippets of his songs that he would either soon release or keep unreleased. Onfroy eventually joined Ski Mask the Slump God's group Very Rare, before breaking off and starting the Members Only collective, which Ski Mask then also joined. The word "tentación" in his stage name is the Spanish word for "temptation".
          <br><br>
          Onfroy released his first official extended play (EP), called The Fall, on November 21, 2014. Onfroy released one collaboration album with Ski Mask the Slump God, called Members Only Vol. 1, before releasing Members Only Vol. 2 in 2015 with several members of the growing Members Only collective. In 2016, he released the EP Willy Wonka Was a Child Murderer, with music heavily inspired by heavy metal and indie music. In 2016, Onfroy quit his job as a call center operator due to his growing music career and moved in with rapper Denzel Curry.

          In July 2016, Onfroy was arrested and charged with robbery and assault with a deadly weapon. After posting $10,000 bail, Onfroy continued to work on his debut independent album, Bad Vibes Forever, which had a slated October 31, 2016, release date. The album missed the release date and was delayed due to Onfroy being arrested in early October on charges of false imprisonment, witness tampering and aggravated battery of his pregnant girlfriend.
        </p>

				<div class="btn-container">
				<button class="toggle-text-button" toggle-text="3">Read More</button>
				</div>
			</div>
				<br>

				<h5>Release from prison, Revenge, 17, and A Ghetto Christmas Carol (2017)</h5>
				<p>In 2017 "Look at Me" gained traction, peaked at number 34 on US Billboard Hot 100 and the top 40 of the Canadian Hot 100. The single helped him gain more popularity due to accusations of Canadian rapper Drake using a similar rap flow in his song "KMT". During his jail stint, Onfroy signed a deal to be managed by Soloman Sobande (who would remain his manager until his death) and despite Onfroy being in jail during "Look at Me"'s initial breakthrough, major-label scouts began offering six-figure contracts and Onfroy eventually signed for Empire Distribution for lower royalty rate, full creative control and a smaller upfront payment.</p>

				<p class="toggle-text" id="toggle-text-4">
					<img id="x-17" src=<?php echo $xxximage2['picture'] ?> alt="XXXTentacion 17 album cover" align="right">
					After his release from prison on April 18, 2017, he released three more songs on SoundCloud. In an interview with WMIB, Onfroy announced that he was working on the studio albums Bad Vibes and 17; as well as a mixtape, I Need Jesus. In an interview three days after his release from prison, Onfroy said to XXL, "I got this really, really, really good album called 17. That's more of an alternative, R&B sound—then I've got this mixtape called I Need Jesus, which is mainly rap and the underground sound I did."
					<br><br>
					Onfroy announced his first nationwide tour on April 28, 2017. The tour, titled "The Revenge Tour", had 26 tour dates overall and generated much media coverage, included that of a rapper being assaulted, Onfroy being knocked out after an altercation on stage, an audience member being stabbed, Onfroy being thrown into a barricade by security, and Onfroy punching a fan. He announced the cancellation of the rest of the tour dates due to his cousin being shot on June 24, 2017, though the final tour date in Broward County, Florida, still went ahead[64] and was later streamed on the watchthemusic (WAV) app.
					<br><br>
					Onfroy was named as the tenth pick on XXL's "2017 Freshman Class".
          Onfroy released his debut commercial project, called Revenge, on May 16, 2017. The mixtape consists of eight previously released songs. The collaborative mixtape, Members Only, Vol. 3, with Members Only, was released on June 26, 2017.
          Onfroy's first opener for a major act happened when rapper DRAM brought Onfroy out at a concert in the Staples Centre during Kendrick Lamar's DAMN. Tour.
          <br><br>
					He released his debut album, 17, on August 25, 2017. The album debuted at number 2 on the US Billboard 200, selling 86,000 album-equivalent units first week. The album received a positive response from critics, some of whom lauded the album for its personal narratives and diverse musical style. On September 3, 2017, Onfroy announced that Bad Vibes Forever, his second album, was still in production. 17 gave Onfroy's seven songs—"Jocelyn Flores", "Revenge", "Fuck Love", "Everybody Dies in Their Nightmares", "Depression & Obsession", "Save Me" and "Carry On"—that debuted in the Billboard Hot 100 at number 31, 77, 41, 54, 91, 94 and 95, respectively. Jocelyn Flores became Onfroy's highest-charting song since "Look at Me", which peaked it at 34. Onfroy then had his ninth song to chart on the Billboard Hot 100, in turn with his being featured on Kodak Black's song "Roll in Peace", taken from Project Baby 2. The song debuted at 52 and peaked at 31, matching "Jocelyn Flores."
          <br><br>
					On September 12, 2017, Onfroy released his first official music video for his 2016 song "Look at Me", as well as sharing a music video with his 2015 song "Riot". The song generated controversy hours after being posted due to the video depicting a white child being hanged by Onfroy, as another black child observed. The music video was removed from YouTube months later. Onfroy's label, Bad Vibes Forever, signed a distribution deal with Capitol Music Group subsidiary, Caroline, on October 19, 2017. The deal, reportedly worth $6 million, was for one album only. Shortly afterwards on October 25, 2017, Onfroy announced he was terminating his contract with Caroline despite a representative confirming he was still signed Two days later, he announced that he was retiring due to negativity and backlash though some publications noted that Onfroy made similar statements before and not followed through. On October 30, 2017, Onfroy announced that he would make music again if fellow Broward rapper and "former best friend," Ski Mask the Slump God, was his friend again. Later, Onfroy answered a fan's question on Instagram Live about his retirement, saying, "Am I quitting? Yes, I'm quitting—I don't know for how long, but I'm just not going to make music right now."
          On September 21, 2017, Noah Cyrus released her single titled "Again", featuring Onfroy's vocals.
          <br><br>
					Onfroy previewed new music on November 2, 2017, signaling a return to making music. Onfroy announced a new album titled Bad Vibes Forever on November 17, 2017, speaking on the album, Onfroy said "It will be a mix of genres you have seen me dabble with, if you are not a fan of me this is not an album for you, it is for core fans only". The album title shares its name with his label. On December 11, 2017, Onfroy released the A Ghetto Christmas Carol EP on SoundCloud. A day before his hearing for witness tampering charges, Onfroy announced that he was preparing three albums to be ready for 2018, and after being released on house arrest, he announced the titles of all three albums, Skins, Bad Vibes Forever and ?.
				</p>
				<div class="btn-container">
				<button class="toggle-text-button" toggle-text="4">Read More</button>
				</div>
				<br>

				<h5>YouTube channel and ? album (2018)</h5>
				<p>On June 22, 2015, Onfroy began to use his long-time YouTube channel "xxxtentacion" (now stylized in all caps), previously used to upload music, to upload gaming videos and vlogs. The channel has 13 million subscribers and 2.6 billion total views as of October 2018. On January 22, 2018, Onfroy announced on Instagram that he and New York rapper Joey Badass had been creating a project together and the two released a freestyle to the song "King's Dead" on SoundCloud on March 9, 2018, in preparation for the collaboration.</p>

				<p class="toggle-text" id="toggle-text-5">

					The "xxxtentacion" YouTube channel uploaded the video "#THEHELPINGHANDCHALLENGE" on the same day. The video included Onfroy donating musical instruments, video game consoles, and other gifts to a foster home. Shortly afterwards, Onfroy declared his album had finished and he was preparing to release it but would only do so after the hashtag #HELPINGHANDCHALLENGE reached one million mentions on Instagram.
          <br><br>
					Onfroy released his first single of 2018 on February 2, <img id="x-helpinghand" src=<?php echo $xxximage3['picture'] ?> alt="XXXTentacion helping hand challenge" align="right">titled "Shining Like the Northstar". He was also featured on long-time collaborator and producer Ronny J's track "Banded Up". Onfroy released the song "Hope" on his SoundCloud account on February 21, 2018, dedicated to the victims of the Stoneman Douglas High School shooting, which had occurred in Parkland, several miles north of Onfroy's native Plantation. Onfroy announced that he was releasing two songs at midnight on March 2, 2018, both the first singles for his upcoming album ?. The lead single for ?, "Sad!", was released several hours later alongside "Changes", which features fellow 2017 XXL "Freshman" PnB Rock. "Sad!" debuted at number 17, becoming his highest-charting song in the United States, and eventually peaked at number 1 after Onfroy's death before releasing its official music video on June 28. "Moonlight" and "Hope" also charted after his death, peaking at number 13 and 70.
					<br><br>
					<!-- <img id="x-questionmark" src="img/x-questionmark.jpg" alt="XXXTentacion ? album" align="right"> -->
					Onfroy announced the release date for his second studio album, ?, on March 12, 2018. He shared the 18 track track-list with features from Joey Bada$$, Travis Barker and PnB Rock. ? was released on March 16, 2018. ? debuted at number one on the Billboard 200, becoming Onfroy's first number one in the country, losing out with his debut album 17 due to Lil Uzi Vert's Luv Is Rage 2. Shortly following the release of ?, Onfroy signed a new album deal with Empire Distribution for his third solo album worth ten million dollars.
				</p>
				<div class="btn-container">
				<button class="toggle-text-button" toggle-text="5">Read More</button>
				</div>
				<br>

				<h5>Posthumous releases</h5>
				<p>On June 21, 2018, the first posthumous song featuring Onfroy was released, "Ghost Busters", with Trippie Redd featuring Quavo and Ski Mask the Slump God, and was uploaded on Trippie Redd's SoundCloud. XXL released a series of freestyles that Onfroy performed as a part of his "2017 Freshman Cypher".
					Ugly God released a song titled "Tear Drop" on June 22, 2018, which featured Onfroy's aforementioned unreleased cypher verses, as a tribute to Onfroy.</p>

					<p class="toggle-text" id="toggle-text-6">
						On August 31, 2018, Houston rapper Sauce Walka released his Drip God mixtape which featured a collaboration with Onfroy titled "Voss" produced by Carnage.
            <br>
            On August 17, 2018, iLoveMakonnen announced a collaboration between Lil Peep and Onfroy titled "Falling Down". A reworking of "Sunlight on Your Skin" made by Makonnen and Peep, the new version features verses by Onfroy that he recorded after Peep's death to pay tribute to Peep. The single was officially released on September 19, 2018.
            <br>
            On September 27, 2018, Kanye West announced Onfroy will be a featured artist on his ninth studio album, Yandhi. The same day, it was reported that Onfroy will also be a featured artist on Lil Wayne's twelfth album, Tha Carter V, which was released the next day. Onfroy was featured on the song, "Don't Cry". A music video was later released on X’s birthday.
            <br>
            On October 22, 2018, Onfroy's manager Soloman Sobande stated in an <img id="x-skins" src=<?php echo $xxximage4['picture'] ?> alt="XXXTentacion Skins album" align="right">interview with Billboard that Onfroy's third album would come "very soon" and that he had more than two album's worth of material. On October 25, 2018, EDM DJ-producer Skrillex released the song "Arms Around You", which is a collaboration he made with Onfroy, Lil Pump, Maluma and Swae Lee. The track was originally recorded in 2017 with Rio Santana, who appeared on Onfroy's ? album, but was later changed to add bigger


						 star co-features. Specifically, Lil Pump contacted Onfroy's mother to ask to use Onfroy's vocals on the track as a tribute. Following the release of "Arms Around You", the song's producer, Mally Mall was interviewed by Power 106's The Cruz Show where he confirmed that nine Onfroy song's were going to be released soon with one having a Rihanna feature and another having a Weeknd feature.
            <br><br>
						On November 8, 2018, Onfroy's first posthumous album and his third studio album Skins release date was announced, being given a December 7, 2018, release date. The first single from Skins, titled "Bad!", was released on November 9, 2018. Onfroy is featured on Lil Wayne and Ty Dolla Sign's track "Scared of the Dark" from the soundtrack album Spider-Man: Into the Spider-Verse.
            On January 23, 2019, the Members Only collective and Onfroy's estate released the collaborative mixtape Members Only Vol. 4.
					</p>
					<div class="btn-container">
					<button class="toggle-text-button" toggle-text="6">Read More</button>
					</div>
					<br>

					<div class="main" id="section4">
					<h2>Death</h2><img id="x-tomb" src=<?php echo $xxximage5['picture'] ?> alt="XXXTentacion tomb" align="right">
					<p>On June 18, 2018, Onfroy was leaving the Riva Motorsports motorcycle dealership in Deerfield Beach, Florida, and, at approximately 3:55 p.m., was blocked from exiting the car park by a black Dodge Journey SUV. Two armed men exited the SUV and approached the rapper while he was sitting in the driver's seat. A brief struggle occurred, and the armed men reached inside Onfroy's vehicle, stole a small Louis Vuitton bag containing $50,000, and shot Onfroy multiple times. The shooters fled the scene in their SUV and Onfroy was transported by paramedics to the nearby Broward Health North hospital in Deerfield Beach, where he was pronounced dead.
          <br>
					Onfroy's death was announced by the Broward County Sheriff's Office at approximately 5:30 p.m. Suspect Dedrick Devonshay Williams of Pompano Beach was arrested two days after the shooting, shortly before 7 p.m. Held in the Broward County jail, he is charged with first degree murder without premeditation. In the weeks following the event, three different people were arrested for their actions involved with the event, including trigger man Michael Boatwright.
          In his will, Onfroy named his mother Cleopatra and brother Aiden as the sole beneficiaries of his estate. Onfroy's future child, with whom his girlfriend at the time of his death was pregnant, was not named in the will as it was written before the pregnancy.
				</p>
			</div>
        <br>

				<div class="main" id="section5">
				<h2>Personal life</h2><img id="x-girl" src=<?php echo $xxximage6['picture'] ?> alt="XXXTentacion tomb" align="right">
				<p>Onfroy had two half siblings – an older sister named Ariana and a younger brother named Aiden. Onfroy lived in Florida and lived with rapper Denzel Curry and producer Ronny J in the past. Before his death, Onfroy was moving into a 6,000-square-foot (560 m2) mansion in Parkland, Florida, which he bought, in November 2017, for US$1.4 million. In February 2018, Onfroy posted on Instagram that he was preparing to return to school and went on to announce in March 2018 that he was going to a community college to get his GED. Onfroy was public about his struggle with depression.
        <br>
				Before his death, Onfroy entered a relationship with Jenesis Sanchez. Three days after his death, Onfroy's mother announced on Instagram that Sanchez was pregnant with his child. The ultrasound of the baby confirmed that it would be expected by November or December 2018 with the due date later being confirmed as January 28, 2019. The baby was confirmed to be a boy on August 22, 2018, and his family had confirmed that it was Onfroy's wishes to call his child "Gekyume" if it were a boy and Xiorra if it were a girl after a word his father made up meaning "a different universe." Gekyume Onfroy was born on January 26, 2019, three days after what would have been his father’s 21st birthday.
			</p>
		</div>
			<br>

			 <div class="main" id="section6">
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
			   <td>17</td>
			   <td><li>Released: August 25, 2017</li><br>
             <li>Label: Bad Vibes Forever, Empire</li><br>
             <li>Format: CD, LP, streaming audio, digital download</li></td>
				 <td>2 (US Billboard 200)<br>
					   2 (US R&B/HH Top R&B/Hip-Hop Albums)<br>
					   29 (AUS ARIA Charts)<br>
					   2 (CAN Canadian Albums Chart)<br>
					   2 (DEN Hitlisten)<br>
					   3 (ITA Federazione Industria Musicale Italiana)<br>
					   1 (NOR VG Lista)<br>
					   2 (NZ Official New Zealand Music Chart)<br>
					   2 (SWE Sverigetopplistan)<br>
					   11 (UK Official Albums Chart)</td>
				 <td>US: 18,000<br>
             UK: 64,863</td>
				 <td>RIAA: Platinum<br>
             BPI: Gold<br>
             IFPI DEN: Platinum<br>
             FIMI: Gold<br>
             MC: Platinum<br>
             RMNZ: Platinum
					 </td>
			  </tr>
				<tr>
					<td>?</td>
					<td><li>Released: March 16, 2018</li><br>
						  <li>Label: Bad Vibes Forever, Empire, Caroline, Capitol</li><br>
							<li>Format: CD, LP, streaming audio, digital download</li></td>
					<td>1 (US Billboard 200)<br>
		 					1 (US R&B/HH Top R&B/Hip-Hop Albums)<br>
		 					2 (AUS ARIA Charts)<br>
		 					1 (CAN Canadian Albums Chart)<br>
		 					1 (DEN Hitlisten)<br>
		 					2 (ITA Federazione Industria Musicale Italiana)<br>
		 					1 (NOR VG Lista)<br>
		 					1 (NZ Official New Zealand Music Chart)<br>
		 					1 (SWE Sverigetopplistan)<br>
		 					3 (UK Official Albums Chart)</td>
					<td>US: 94,000<br>
		          UK: 38,321</td>
					<td>RIAA: Platinum<br>
						  ARIA: Gold<br>
		            BPI: Silver<br>
								FIMI: Gold<br>
								GLF: Platinum<br>
		            IFPI DEN: Gold<br>
								IFPI NOR: 2× Platinum<br>
		            MC: Platinum<br>
		            RMNZ: Gold
		 				</td>
				</tr>
				<tr>
					<td>Skins</td>
					<td><li>Released: December 7, 2018</li><br>
						  <li>Label: Bad Vibes Forever, Empire</li><br>
							<li>Format: CD, LP, streaming audio, digital download</li></td>
					<td>1 (US Billboard 200)<br>
		 					1 (US R&B/HH Top R&B/Hip-Hop Albums)<br>
		 					8 (AUS ARIA Charts)<br>
		 					4 (CAN Canadian Albums Chart)<br>
		 					5 (DEN Hitlisten)<br>
		 					42 (ITA Federazione Industria Musicale Italiana)<br>
		 					1 (NOR VG Lista)<br>
		 					9 (NZ Official New Zealand Music Chart)<br>
		 					1 (SWE Sverigetopplistan)<br>
		 					29 (UK Official Albums Chart)</td>
					<td>US: 52,000</td>
					<td>Unknown
		 				</td>
				</tr>
			 </table>
		 </div>
			 <br>

       <div class="main" id="section7">
			 <h2>Music</h2>

			 <iframe src="https://open.spotify.com/embed/artist/15UsOTVnJzReFVN1VCnxy4" width="389" height="400" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
       <iframe scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=389&height=400&color=e2c07f&layout=dark&size=medium&type=album&id=46787432&app_id=1" width="389" height="400"></iframe>
       <!-- <iframe allow="autoplay *; encrypted-media *;" frameborder="0"  height="400" style="width:100%;max-width:389px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/album/1359292515?app=music"></iframe> -->
			 <iframe width="389" height="400" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/662600949&color=%23e2c07f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>

<div class="video-container">
       <iframe width="480" height="270" align="center" display="block"
			 margin-right="auto" margin-left="auto" src="https://www.youtube.com/embed/iAeYPfrXwk4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
			 <br>

			 <div class="main" id="section8">
       <h2>Social media and merch</h2>

       <iframe src="https://open.spotify.com/follow/1/?uri=spotify:artist:15UsOTVnJzReFVN1VCnxy4&size=detail&theme=dark" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
       <a href="https://geo.itunes.apple.com/us/artist/xxxtentacion/1082533559?mt=1&app=music&ls=1" style="display:inline-block;overflow:hidden;background:url(https://tools.applemusic.com/nl-nl/lockup.svg?kind=artist&bubble=apple_music&style=standard-white) no-repeat;width:170px;height:40px;"></a>
       <a href="https://www.deezer.com/en/artist/9822974" class="deezer" target="_blank">
			 <img src="img/deezer.png" class="deezer" >
		 </a>
			 <br>

			 <a href="https://www.instagram.com/xxxtentacion/" class="fa fa-instagram" target="_blank"></a>
			 <a href="https://www.youtube.com/channel/UCLEyFXOmaIgG6h4_6wqLx7Q" class="fa fa-youtube" target="_blank"></a>
			 <a href="https://twitter.com/lilskies" class="fa fa-twitter" target="_blank"></a>
			 <a href="https://soundcloud.com/lil-skies" class="fa fa-soundcloud" target="_blank"></a>

			 <a href="https://www.xxxtentacion.com/" target="_blank">
			 <img src="img/xxxlogo.jpeg" class="site" align="left">
			 </a>
		 </div>
			 <br><br><br><br>
			 <img src=<?php echo $xxximage7['picture'] ?> id="lilskies_merch" align="center">

			 <br>
			 <div class="main" id="section9">
			 <h2>News articles</h2>
			 <div class="iframely-embed"><div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://www.xxlmag.com/news/2019/06/xxxtentacion-sad-billion-streams/" data-iframely-url="//cdn.iframe.ly/DSCl6Bu?iframe=card-small"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
			 <div class="iframely-embed"><div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://www.theguardian.com/music/2019/jan/27/xxxtentacion-son-born-seven-months-after-rappers-death-gekyume-onfroy" data-iframely-url="//cdn.iframe.ly/6yrlPNr?iframe=card-small"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
			 <div class="iframely-embed"><div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://www.stuff.co.nz/entertainment/celebrities/107478797/video-of-rapper-xxxtentacions-robbery-and-death-shared-by-prosecutors" data-iframely-url="//cdn.iframe.ly/zNQ29YE?iframe=card-small"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
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
