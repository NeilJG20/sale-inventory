

<?php





include 'dbconfig.php';



$link = mysqli_connect("$host", "$username", "$password", "$database");




if($link === false) {


die("ERROR: Could not connect.". mysqli_connect_error());




}




$id = @$_GET['id'];
$sku = @$_GET['sku'];
$productname = @$_GET['productname'];
$supplier = @$_GET['supplier'];
$stock = @$_GET['stock'];
$price = @$_GET['price'];
$expiration = @$_GET['expiration'];
















	    $sql = "DELETE FROM inventory WHERE item_ID = $id ";

		
		

		

            $insert = mysqli_query($link, $sql);





            if($insert){



         	echo '<script>alert("Product has been deleted from inventory!");window.location="inventory.php";</script>';

            }





	     else {



                 echo  "<script>alert('Error deleting product!');window.location='inventory.php';</script>";      

            } 







$link->close();













?>







s