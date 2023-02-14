<?php
include 'dbconfig.php';
$link = mysqli_connect("$host", "$username", "$password", "$database");
if($link === false) {
die("ERROR: Could not connect.". mysqli_connect_error());
}

$username = @$_GET['username'];
$password = @$_GET['password'];
$position = @$_GET['position'];
$branch = @$_GET['branch'];
$birthday = @$_GET['birthday'];
$contact = @$_GET['contact'];
$email = @$_GET['email'];
$gender = @$_GET['gender'];


	    $sql = "INSERT INTO users (username, password, position ,branch ,birthday ,contact, email, gender) VALUES ('".$username."','".$password."','".$position."','".$branch."','".$birthday."','".$contact."','".$email."','".$gender."')";  
		
            $insert = mysqli_query($link, $sql);


            if($insert){


         	echo '<script>alert("Employee has been added!");window.location="users.php";</script>';

            }

	     else {

                 echo  "<script>alert('Error adding employee!');window.location='users.php';</script>";      

            } 


$link->close();


?>
