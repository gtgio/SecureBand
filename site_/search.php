<?php
require 'functions.php';

$melogo = get_page_image('me', 'logo');
$aboutbanner = get_page_image('aboutme', 'header');
 ?>

<!DOCTYPE HTML>
<html>
<head>
<title> search test </title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="style/style.css" />
<link rel="icon" href="img/logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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

tr:nth-child(even) {
    background-color: #19191c;
}
#txtHint {

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
      <!-- <input type="submit" value="<i class="material-icons">&#xe8b6;</i>" /> -->

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
                <!-- <button style="font-size:15px"> <i class="material-icons">search</i></button> -->
  						</ul>
  					</nav>

            <!-- Main -->
    					<div id="main">
    						<div class="inner">
    							<h1 id="title_aboutme">Search</h1>
    							<span class="image main"><img  src=<?php echo $aboutbanner['picture'] ?> alt="" /></span>
                  	<button class="button" onclick="topFunction()" id="myBtn" title="Go to top">&uarr;</button>
                    <br>
                    <p>This is the search page. Here you can look up information about the artists by typing in keywords in the search bar below. But also by viewing the table below the search bar.</p>
<form >
Search: <input type="text" id="question" placeholder=" Search here ... "/>
<!-- <input type="submit" value="Submit" /> -->

</form>
You searched for words which start with the letter:
<div id =  "txtHint"> </div>


<!-- PAGINATION -->
<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('127.0.0.1', 'c3664giovanni', '!iWnxJ4mUnL', 'c3664upload');

// Get the total number of records from our table "page".
$total_pages = $mysqli->query('SELECT * FROM pagina')->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 10;

if ($stmt = $mysqli->prepare('SELECT * FROM pagina ORDER BY title LIMIT ?,?')) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute();
	// Get the results...
	$result = $stmt->get_result();
	?>
<br>
  <style>

  .pagination {
    list-style-type: none;
    padding: 10px 0;
    display: inline-flex;
    justify-content: space-between;
    box-sizing: border-box;
  }
  .pagination li {
    box-sizing: border-box;
    padding-right: 10px;
  }
  .pagination li a {
    box-sizing: border-box;
    background-color: #e2e6e6;
    padding: 8px;
    text-decoration: none;
    font-size: 12px;
    font-weight: bold;
    color: #616872;
    border-radius: 4px;
  }
  .pagination li a:hover {
    /* background-color: #e2c07f; */
    color: #fff;
  }
  .pagination .next a, .pagination .prev a {
    text-transform: uppercase;
    font-size: 12px;
    background-color: #585858;
        color: #fff;
  }
  .pagination .currentpage a {
    background-color: #e2c07f;
    color: #fff;
  }
  .pagination .currentpage a:hover {
    background-color: #518acb;
  }
  </style>

  <body>
    <h2>Search alphabetically</h2>
    <p>You can also search for words via the table below. these are in alphabetical order.</p>
    <table>
      <tr>
        <th>TITLE</th>
        <th>TEXT</th>
        <th>LOCATION</th>
      </tr>
      <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['text']; ?></td>
        <td><a href="<?php echo $row['location']?>"><?php echo $row['location'];?></a></td>
      </tr>
      <?php endwhile; ?>
    </table>
    <?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
    <ul class="pagination">
      <?php if ($page > 1): ?>
      <li class="prev"><a href="search.php?page=<?php echo $page-1 ?>">Prev</a></li>
      <?php endif; ?>

      <?php if ($page > 3): ?>
      <li class="start"><a href="search.php?page=1">1</a></li>
      <li class="dots">...</li>
      <?php endif; ?>

      <?php if ($page-2 > 0): ?><li class="page"><a href="search.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
      <?php if ($page-1 > 0): ?><li class="page"><a href="search.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

      <li class="currentpage"><a href="search.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

      <?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="search.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
      <?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="search.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

      <?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
      <li class="dots">...</li>
      <li class="end"><a href="search.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
      <?php endif; ?>

      <?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
      <li class="next"><a href="search.php?page=<?php echo $page+1 ?>">Next</a></li>
      <?php endif; ?>
    </ul>
    <?php endif; ?>
  </body>
</html>
<?php
$stmt->close();
}
?>
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
<script>
    let question = document.getElementById("question");//text invoer
    let txtHint = document.getElementById("txtHint");//antwoord
    question.addEventListener('keyup', ajax);
    question.addEventListener('focus', clear);

    function ajax() {
      let str = question.value;
      console.log(str);//debug
      if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
      }
      let xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          txtHint.innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "php-database-search.php?search="+str,true);
      xmlhttp.send();
    }
    function clear(){
      question.value = "";
      	txtHint.innerHTML = "";
      }
</script>
</body>
</html>
