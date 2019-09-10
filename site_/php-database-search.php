<?php
$search=$_GET['search'];
echo $search;
?>
<!DOCTYPE html>
<html>
  <head>

    <style>
    table{
      font-size: 15;
margin-left: auto;
margin-right: auto;
border: 2px solid black;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;

}

tr:nth-child(even) {
  background-color: white;
}
    </style>
    </head>
    </html>
    <?php

//load database connection
    $host = "127.0.0.1";
    $user = "c3664giovanni";
    $password = "!iWnxJ4mUnL";
    $database_name = "c3664upload";

    $con = mysqli_connect($host,$user,$password,$database_name);
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $sql="SELECT * FROM articles WHERE title LIKE '$search%'";
    // echo $sql;//debug
    $result = mysqli_query($con,$sql);
    echo "<table>
    <tr>

    <th>TITLE</th>
    <th>TEXT</th>
    <th>LINK</th>

    </tr>";

    while($row = mysqli_fetch_array($result)) {
      ?>
      <tr>

      <!-- <td><?php echo $row['id']?></td> -->
      <td><?php echo $row['title'] ?></td>
      <td><?php echo $row['text']?></td>
      <td><a href="<?php echo $row['Link']?>"><?php echo $row['Link'];?></a></td>
      </tr>
      <?php
    }
    echo "</table>";

//

/*

    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table

$query = $pdo->prepare("select * from articles where title LIKE '%$search%' OR author LIKE '%$search%'  LIMIT 0 , 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
*/



/*
// Display search result
         if (!$query->rowCount() == 0) {
		 		echo "Search found :<br/>";
				echo "<table style=\"font-family:arial;color:#333333;\">";
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">title</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">text</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;
            while ($results = $query->fetch()) {
				echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['title'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['text'];
				echo "</td></tr>";
            }
				echo "</table>";
        } else {
            echo 'Nothing found';
        }

*/
?>
