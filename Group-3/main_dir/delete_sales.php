<?php

include 'dbconfig.php';

$link = mysqli_connect("$host", "$username", "$password", "$database");

if($link === false) {

die("ERROR: Could not connect.". mysqli_connect_error());

}

$id = @$_GET['id'];
$customerID = @$_GET['customerID'];

	    $sql = "DELETE FROM sales WHERE transaction_ID = $id AND customer_ID = $customerID";

            $insert = mysqli_query($link, $sql);

            if($insert){

         	echo '<script>alert("Record has been deleted from inventory!");window.location="sales.php";</script>';

            }

	     else {

                 echo  "<script>alert('Error deleting record!');window.location='sales.php';</script>";      
            } 

$link->close();
?>    