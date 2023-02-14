<?php

include 'dbconfig.php';

$link = mysqli_connect("$host", "$username", "$password", "$database");

if($link === false) {

die("ERROR: Could not connect.". mysqli_connect_error());

}

$id = @$_GET['id'];
$sku = @$_GET['sku'];
$productname = @$_GET['productname'];
$costumer_ID = @$_GET['costumername'];
$quantity = @$_GET['quantity'];
$totalprice = @$_GET['totalprice'];
$time = @$_GET['time'];
$date = @$_GET['date'];

	    $sql = "UPDATE sales SET customer_ID = '".$costumer_ID."', SKU = '".$sku."', product_name = '".$productname."', quantity = ".$quantity.", total_price = ".$totalprice.", time = '".$time."' , date = '".$date."' WHERE transaction_ID = $id ";

            $insert = mysqli_query($link, $sql);

            if($insert){

         	echo '<script>alert("Record has been updated from sales!");window.location="sales.php";</script>';

            }

	     else {

                 echo  "<script>alert('Error updating record!');window.location='sales.php';</script>";      

            } 

$link->close();
?>