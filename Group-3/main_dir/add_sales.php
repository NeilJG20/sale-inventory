<?php
include 'dbconfig.php';
$link = mysqli_connect("$host", "$username", "$password", "$database");
if($link === false) {
die("ERROR: Could not connect.". mysqli_connect_error());

}
$time = @$_GET['time'];
$date = @$_GET['date'];
$cashier = @$_GET['cashier'];
$cashierID = @$_GET['cashierid'];
$custID = @$_GET['custID'];

$sku0 = @$_GET['sku0'];
$productname0 = @$_GET['productname0'];
$price0 = @$_GET['price0'];
$quantity0 = @$_GET['quantity0'];

$sku1 = @$_GET['sku1'];
$productname1 = @$_GET['productname1'];
$price1 = @$_GET['price1'];
$quantity1 = @$_GET['quantity1'];

$sku2 = @$_GET['sku2'];
$productname2 = @$_GET['productname2'];
$price2 = @$_GET['price2'];
$quantity2 = @$_GET['quantity2'];

$sku3 = @$_GET['sku3'];
$productname3 = @$_GET['productname3'];
$price3 = @$_GET['price3'];
$quantity3 = @$_GET['quantity3'];

$sku4 = @$_GET['sku4'];
$productname4 = @$_GET['productname4'];
$price4 = @$_GET['price4'];
$quantity4 = @$_GET['quantity4'];


$sku5 = @$_GET['sku5'];
$productname5 = @$_GET['productname5'];
$price5 = @$_GET['price5'];
$quantity5 = @$_GET['quantity5'];

$sku6 = @$_GET['sku6'];
$productname6 = @$_GET['productname6'];
$price6 = @$_GET['price6'];
$quantity6 = @$_GET['quantity6'];

$sku7 = @$_GET['sku7'];
$productname7 = @$_GET['productname7'];
$price7 = @$_GET['price7'];
$quantity7 = @$_GET['quantity7'];

$sku8 = @$_GET['sku8'];
$productname8 = @$_GET['productname8'];
$price8 = @$_GET['price8'];
$quantity8 = @$_GET['quantity8'];



$sku9 = @$_GET['sku9'];
$productname9 = @$_GET['productname9'];
$price9 = @$_GET['price9'];
$quantity9 = @$_GET['quantity9'];


if (@$_GET['sku0'] != null) {

	
	    $sql = "INSERT INTO sales (customer_ID, SKU, product_name ,quantity ,total_price ,time, date, cashier, cashierID) VALUES (".$custID.",'".$sku0."','".$productname0."',".$quantity0.",".$price0.",'".$time."','".$date."','".$cashier."','".$cashierID."')";


            $insert = mysqli_query($link, $sql);

            if($insert){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 


	    $sql = "INSERT INTO sales (customer_ID, SKU, product_name ,quantity ,total_price ,time, date, cashier, cashierID) VALUES (".$custID.",'".$sku1."','".$productname1."',".$quantity1.",".$price1.",'".$time."','".$date."','".$cashier."','".$cashierID."')";


            $insert = mysqli_query($link, $sql);

            if($insert){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 

	
	    $sql = "INSERT INTO sales (customer_ID, SKU, product_name ,quantity ,total_price ,time, date, cashier, cashierID) VALUES (".$custID.",'".$sku2."','".$productname2."',".$quantity2.",".$price2.",'".$time."','".$date."','".$cashier."','".$cashierID."')";


            $insert = mysqli_query($link, $sql);

            if($insert){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 

	
	    $sql = "INSERT INTO sales (customer_ID, SKU, product_name ,quantity ,total_price ,time, date, cashier, cashierID) VALUES (".$custID.",'".$sku3."','".$productname3."',".$quantity3.",".$price3.",'".$time."','".$date."','".$cashier."','".$cashierID."')";


            $insert = mysqli_query($link, $sql);

            if($insert){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 

	
	    $sql = "INSERT INTO sales (customer_ID, SKU, product_name ,quantity ,total_price ,time, date, cashier, cashierID) VALUES (".$custID.",'".$sku4."','".$productname4."',".$quantity4.",".$price4.",'".$time."','".$date."','".$cashier."','".$cashierID."')";


            $insert = mysqli_query($link, $sql);

            if($insert){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 

	
	    $sql = "INSERT INTO sales (customer_ID, SKU, product_name ,quantity ,total_price ,time, date, cashier, cashierID) VALUES (".$custID.",'".$sku5."','".$productname5."',".$quantity5.",".$price5.",'".$time."','".$date."','".$cashier."','".$cashierID."')";


            $insert = mysqli_query($link, $sql);

            if($insert){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 

	
	    $sql = "INSERT INTO sales (customer_ID, SKU, product_name ,quantity ,total_price ,time, date, cashier, cashierID) VALUES (".$custID.",'".$sku6."','".$productname6."',".$quantity6.",".$price6.",'".$time."','".$date."','".$cashier."','".$cashierID."')";


            $insert = mysqli_query($link, $sql);

            if($insert){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 

	
	    $sql = "INSERT INTO sales (customer_ID, SKU, product_name ,quantity ,total_price ,time, date, cashier, cashierID) VALUES (".$custID.",'".$sku7."','".$productname7."',".$quantity7.",".$price7.",'".$time."','".$date."','".$cashier."','".$cashierID."')";


            $insert = mysqli_query($link, $sql);

            if($insert){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 

	
	    $sql = "INSERT INTO sales (customer_ID, SKU, product_name ,quantity ,total_price ,time, date, cashier, cashierID) VALUES (".$custID.",'".$sku8."','".$productname8."',".$quantity8.",".$price8.",'".$time."','".$date."','".$cashier."','".$cashierID."')";


            $insert = mysqli_query($link, $sql);

            if($insert){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 
	
	
	    $sql = "INSERT INTO sales (customer_ID, SKU, product_name ,quantity ,total_price ,time, date, cashier, cashierID) VALUES (".$custID.",'".$sku9."','".$productname9."',".$quantity9.",".$price9.",'".$time."','".$date."','".$cashier."','".$cashierID."')";


            $insert = mysqli_query($link, $sql);

            if($insert){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 


	    $sql0 = "UPDATE inventory SET stock = stock - $quantity0 WHERE SKU = $sku0";


            $insert0 = mysqli_query($link, $sql0);

            if($insert0){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 
			
			
	    $sql1 = "UPDATE inventory SET stock = stock - $quantity1 WHERE SKU = $sku1";


            $insert1 = mysqli_query($link, $sql1);

            if($insert1){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 

	    $sql2 = "UPDATE inventory SET stock = stock - $quantity2 WHERE SKU = $sku2";


            $insert2 = mysqli_query($link, $sql2);

            if($insert2){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 
			
	    $sql3 = "UPDATE inventory SET stock = stock - $quantity3 WHERE SKU = $sku3";


            $insert3 = mysqli_query($link, $sql3);

            if($insert3){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 

	    $sql4 = "UPDATE inventory SET stock = stock - $quantity4 WHERE SKU = $sku4";


            $insert4 = mysqli_query($link, $sql4);

            if($insert4){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 



	    $sql5 = "UPDATE inventory SET stock = stock - $quantity5 WHERE SKU = $sku5";


            $insert5 = mysqli_query($link, $sql5);

            if($insert5){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 
			
			
			

	    $sql6 = "UPDATE inventory SET stock = stock - $quantity6 WHERE SKU = $sku6";


            $insert6 = mysqli_query($link, $sql6);

            if($insert6){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 
			
			
			
	    $sql7 = "UPDATE inventory SET stock = stock - $quantity7 WHERE SKU = $sku7";


            $insert7 = mysqli_query($link, $sql7);

            if($insert7){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 


	    $sql8 = "UPDATE inventory SET stock = stock - $quantity8 WHERE SKU = $sku8";


            $insert8 = mysqli_query($link, $sql8);

            if($insert8){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 			
			
			
	    $sql9 = "UPDATE inventory SET stock = stock - $quantity9 WHERE SKU = $sku9";


            $insert9 = mysqli_query($link, $sql9);

            if($insert9){

         	echo '<script></script>';

            }

			else {

                 echo  "<script> </script>";      

            } 			
	
echo '<script>alert("Success!");window.location="reciept.php?custID='.$custID.'";</script>';
}
else {

echo '<script>alert("ERROR!");window.location="cashierUI.php?id='.$cashierID.'";</script>';

}	

$link->close();
?>