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
$id = @$_GET['id'];

	    $sql = "UPDATE users SET username = '".$username."', password = '".$password."', branch = '".$branch."', birthday = '".$birthday."', contact = '".$contact."', email = '".$email."', gender = '".$gender."', position = '".$position."' WHERE ID = $id ";

            $insert = mysqli_query($link, $sql);

            if($insert){

         	echo '<script>alert("Information has been updated!");window.location="users.php";</script>';

            }

	     else {

                 echo  "<script>alert('Error updating user!');window.location='users.php';</script>";      

            } 

$link->close();
?>