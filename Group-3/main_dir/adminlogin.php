<?php

include 'dbconfig.php';

$link = mysqli_connect("$host", "$username", "$password", "$database");

if($link === false) {
die("ERROR: Could not connect.". mysqli_connect_error());
}

$mysqli = new mysqli("$host", "$username", "$password", "$database");

$username1 = $_GET["user"];
$password1 = $_GET["pass"];


if($sqldata = $mysqli->query('SELECT * FROM users WHERE position = "Admin"')) {

while($row = $sqldata->fetch_assoc()){

$ID = $row["ID"];
$username = $row["username"];
$password = $row["password"];
$position = $row["position"];

if ($username1 == $username && $password1 == $password) {

   echo ' 
   <script>
	localStorage.setItem("administrator", '.$ID.');
   window.location = "dashboard.php?id='.$ID.'"
   
   </script>
   ';
}

else {
	
	echo ' 
   <script>
   
	window.location = "index.php?"
   
   </script>
   ';	
}
}
}

?>
