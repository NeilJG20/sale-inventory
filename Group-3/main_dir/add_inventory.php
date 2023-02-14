<?php

include 'dbconfig.php';

$link = mysqli_connect("$host", "$username", "$password", "$database");

if($link === false) {

die("ERROR: Could not connect.". mysqli_connect_error());

}

$sku = @$_GET['sku'];
$productname = @$_GET['productname'];
$supplier = @$_GET['supplier'];
$stock = @$_GET['stock'];
$price = @$_GET['price'];
$expiration = @$_GET['expiration'];
$categorys = @$_GET['category'];


	    $sql = "INSERT INTO inventory (SKU, product_name, supplier ,stock ,price ,expiration, category) VALUES (".$sku.",'".$productname."','".$supplier."',".$stock.",".$price.",'".$expiration."','".$categorys."')";


            $insert = mysqli_query($link, $sql);

            if($insert){

         	echo '<script>alert("Product has been added to inventory!");window.location="inventory.php";</script>';

            }

	     else {

                 echo  "<script>alert('Error adding product!');window.location='inventory.php';</script>";      

            } 

$link->close();

?>