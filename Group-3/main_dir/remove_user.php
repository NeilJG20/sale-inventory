

<?php





include 'dbconfig.php';



$link = mysqli_connect("$host", "$username", "$password", "$database");




if($link === false) {


die("ERROR: Could not connect.". mysqli_connect_error());




}




$id = @$_GET['id'];










	    $sql = "DELETE FROM users WHERE ID = $id ";

		
		

		

            $insert = mysqli_query($link, $sql);





            if($insert){



         	echo '<script>alert("Employee has been removed!");window.location="users.php";</script>';

            }





	     else {



                 echo  "<script>alert('Error removing employee!');window.location='users.php';</script>";      

            } 







$link->close();













?>







s