
<?php

function dbConnect() {
  try {
  	$pdo = new PDO( 'mysql:host=127.0.0.1;dbname=c3664upload', 'c3664giovanni', '!iWnxJ4mUnL' );
  	$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  	$pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
  } catch ( PDOException $e ) {
  	echo $e->getFile() . ' on line ' . $e->getLine() . ': ' . $e->getMessage();
  	exit();
  }

  return $pdo;
}


function get_page_image($page, $position){

  $connect = dbConnect();
  $sql = "SELECT * FROM `site_images` WHERE page = '" . $page . "' AND position = '". $position ."'";
  $statement = $connect->query($sql);
  $image = $statement->fetch();

  return $image;

}
?>
