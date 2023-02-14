
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Angel's Burger Sales and Inventory System
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  
  
  
 
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>




<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://angelsburger.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
		  
		  
          <!-- <p>CT</p> -->
        </a>
		
        <a href="https://angelsburger.com" class="simple-text logo-normal">
         Angel's Burger
		  
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
		  
		  
        </a>
      </div>
  
       <div class="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a onclick="dashboard()">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
		  
		  
		  
          <li  class="active ">
            <a onclick="inventory()">
              <i class="nc-icon nc-bullet-list-67"></i>
              <p>Inventory</p>
            </a>
          </li>
		  
          <li>
            <a onclick="sales()">
              <i class="nc-icon nc-money-coins"></i>
              <p>Sales</p>
            </a>
          </li>
          </li>
          <li>
            <a onclick="employee()">
              <i class="nc-icon nc-touch-id"></i>
              <p>Employees</p>
            </a>
          </li>		  
	
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Inventory</a>
          </div>
		  
		  
		  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
		  
		  
		  
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
		  
	
			
			
            <ul class="navbar-nav">
			
	
			  
			  
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
				
				<a class="dropdown-item" id="admintag">Admin</a>
                  <a class="dropdown-item" onclick="logout()">Logout</a>
                  
                 
                </div>
              </li>
  
		
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
	  
<script src="mainscript.js"></script>
  	  
<?php
include 'dbconfig.php';
$id = $_GET["id"];
$mysqli = new mysqli("$host", "$username", "$password", "$database");
if($sqldata = $mysqli->query('SELECT * FROM users WHERE ID ='.$id.' AND position = "Admin"')) {
while($row = $sqldata->fetch_assoc()){
$ID = $row["ID"];
$username = $row["username"];
$password = $row["password"];
$position = $row["position"];
$branch = $row["branch"];
echo '
<script>
		document.getElementById("admintag").innerHTML = "'.$username.' - '.$branch.'";
</script>
';
}
}
echo '
<script>
var adminid = localStorage.getItem("administrator");
if(adminid == null || adminid == "null" || adminid != '.$id.' ) {
	window.location = "index.php";
}
</script>
';


if(!isset($_GET['id']))
{
echo '
<script>
var adminid = localStorage.getItem("administrator");
window.location = "inventory.php?id="+adminid;
</script>
';
}
$mysqli -> close();
?>	
    
	  
	  
      <div class="content">
	  
	  	      <!------------------------------------------ START CONTENT --------------------------------------->  
	  
	  
	  
	  
	
	  
	  
	  
	  
	  
	      <!------------------------------------------ ROW 1 --------------------------------------->  
	  
        <div class="row">
		
		
		
	
		
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
				
			
                  <div class="col-5 col-md-2">
                    <div class="icon-big text-right icon-success">
                      <i class="nc-icon nc-simple-add text-success"></i>
                    </div>
                  </div>
				  
						<div class="col-md-10">
                          <button class="btn btn-primary btn-block" onclick="openAdd()">ADD TO INVENTORY</button>
                        </div>
                </div>
				
			
              </div>

            </div>
          </div>
		  
		  

		  
		
	
		
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
				
			
                  <div class="col-5 col-md-2">
                    <div class="icon-big text-right icon-warning">
                      <i class="nc-icon nc-refresh-69 text-warning"></i>
                    </div>
                  </div>
				  
						<div class="col-md-10">
                          <button class="btn btn-warning btn-block" onclick="openUpdate()">UPDATE INVENTORY</button>
                        </div>
                </div>
				
			
              </div>

            </div>
          </div>
		  
		  		
	
		
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
				
			
                  <div class="col-5 col-md-2">
                    <div class="icon-big text-right icon-danger">
                      <i class="nc-icon nc-simple-remove text-danger"></i>
                    </div>
                  </div>
				  
						<div class="col-md-10">
                          <button class="btn btn-danger btn-block" onclick="openRemove()">REMOVE ON INVENTORY</button>
                        </div>
                </div>
				
			
              </div>

            </div>
          </div>
		  
		  

		  		  
		  

		  
		  
		  	  
		  
		  
        </div>
		
		



	
<!------------------------------------------ ROW 2 ADD INVENTORY hidden --------------------------------------->  	
		
        <div class="row" id="add_inventory" style="display: none;">
		
		
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
			  <i class="nc-icon nc-simple-remove text-danger" style="float: right;" onclick="closeAdd()"></i>
                <h5 class="card-title">Add to Inventory</h5>
				
				 
				 
				 
				 
                <form action="add_inventory.php" method="get">
    
				  
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>SKU</label>
                        <input type="number" class="form-control" placeholder="SKU" name="sku" required>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" placeholder="Product Name" name="productname" required>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Supplier</label>
                        <input type="text" class="form-control" placeholder="supplier" name="supplier" required>
                      </div>
                    </div>
                  </div>
				  
                  <div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Stocks</label>
                        <input type="number" class="form-control" placeholder="Stocks" name="stock" required>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" placeholder="Price in Peso" name="price" required>
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Expiration Date</label>
                        <input type="date" class="form-control" placeholder="Expiration" name="expiration" required>
                      </div>
                    </div>
					<div class="form-group">
                        <label>Category</label>
                        <input type="text" class="form-control" placeholder="Category" name="category" required>
                      </div>
                  </div>
				  				  
				  
		
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-success btn-round">Add To Inventory</button>
                    </div>
                  </div>
				  
				  
				  
				  
                </form>
              
                    
					
              </div>
			  
	
			  
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  
                </div>
              </div>
            </div>
          </div>
		  
		  
		  
        </div>




	
<!------------------------------------------ ROW 3 UPDATE INVENTORY hidden --------------------------------------->  	
		
        <div class="row" id="update_inventory" style="display: none;">
		
		
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
			  <i class="nc-icon nc-simple-remove text-danger" style="float: right;" onclick="closeUpdate()"></i>
                <h5 class="card-title">Update Inventory</h5>
				
				 
				 
				 
				 
                <form action="update_inventory.php" method="get">
    
				  
                  <div class="row">
				  <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Item ID</label>
                        <input type="number" class="form-control" placeholder="Item ID" name="id" required>
                      </div>
                    </div>
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>SKU</label>
                        <input type="number" class="form-control" placeholder="SKU" name="sku" required>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" placeholder="Product Name" name="productname" required>
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Supplier</label>
                        <input type="text" class="form-control" placeholder="supplier" name="supplier" required>
                      </div>
                    </div>
                  </div>
				  
                  <div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Stocks</label>
                        <input type="number" class="form-control" placeholder="Stocks" name="stock" required>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" placeholder="Price in Peso" name="price" required>
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Expiration Date</label>
                        <input type="date" class="form-control" placeholder="Expiration" name="expiration" required>
                      </div>
                    </div>
					
				<div class="form-group">
                        <label>Category</label>
                        <input type="text" class="form-control" placeholder="Category" name="category" required>
                      </div>
                    </div>
                  </div>
				  				  
				  
		
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-success btn-round">Update Inventory</button>
                    </div>
                  </div>
				  
				  
				  
				  
                </form>
              
                    
					
              </div>
			  
	
			  
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  
                </div>
              </div>
            </div>
          </div>
		  
		  
		  
        </div>





	
<!------------------------------------- ROW 4 REMOVE FROM INVENTORY hidden --------------------------------------->  	
		
        <div class="row" id="remove_inventory" style="display: none;">
		
		<center>
          <div class="col-md-6">
            <div class="card ">
              <div class="card-header ">
			  <i class="nc-icon nc-simple-remove text-danger" style="float: right;" onclick="closeRemove()"></i>
                <h5 class="card-title">Remove From Inventory</h5>
				
				 
				 
				 
				 
                <form action="remove_inventory.php" method="get">
    
				 
                  <div class="row">
				  <div class="col-md-12">
                      <div class="form-group">
                        <label>Item ID</label>
                        <input type="number" class="form-control" placeholder="Item ID" name="id" required>
                      </div>
                    </div>
                   
				  </div>
		
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-danger btn-round">Remove</button>
                    </div>
                  </div>
				  
				  
				  
				  
                </form>
              
                    
					
              </div>
			  
	
			  
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  
                </div>
              </div>
            </div>
          </div>
		  
		  </center>
		  
        </div>


  		
	  <script>
	  
	  function openAdd() {
		  
		  document.getElementById("add_inventory").style.display = "block";
		  document.getElementById("update_inventory").style.display = "none";
		  document.getElementById("remove_inventory").style.display = "none";
	  }
	  
	  
	  function closeAdd() {
		  
		  document.getElementById("add_inventory").style.display = "none";
		  document.getElementById("update_inventory").style.display = "none";
		  document.getElementById("remove_inventory").style.display = "none";
	  }
	  
	  function openUpdate() {
		  
		  document.getElementById("add_inventory").style.display = "none";
		  document.getElementById("update_inventory").style.display = "block";
		  document.getElementById("remove_inventory").style.display = "none";
	  }
	  
	  
	  function closeUpdate() {
		  
		  document.getElementById("add_inventory").style.display = "none";
		  document.getElementById("update_inventory").style.display = "none";
		  document.getElementById("remove_inventory").style.display = "none";
	  }	  

	  function openRemove() {
		  
		  document.getElementById("add_inventory").style.display = "none";
		  document.getElementById("update_inventory").style.display = "none";
		  document.getElementById("remove_inventory").style.display = "block";
	  }
	  
	  
	  function closeRemove() {
		  
		  document.getElementById("add_inventory").style.display = "none";
		  document.getElementById("update_inventory").style.display = "none";
		  document.getElementById("remove_inventory").style.display = "none";
	  }	 	  
	  
	  </script>
	  		
	
		      <!------------------------------------------ ROW 5 --------------------------------------->  	
		
        <div class="row">
		
		
		
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Inventory Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Item ID
                      </th>
                      <th>
                        SKU
                      </th>
                      <th>
                        Product Name
                      </th>
                      <th>
                        Supplier
                      </th>
					  <th>
                        Stock
                      </th>
					  <th>
                        Price
                      </th>
					  <th>
                        Expiration
                      </th>
					  <th>
                        Category
                      </th>
					  <th>
                        Status
                      </th>
                    </thead>
					
					
					
                    <tbody>
					


	  
			      <!------------------------------------------ PHP STARTS --------------------------------------->  
	  
<?php

include 'dbconfig.php';

$link = mysqli_connect("$host", "$username", "$password", "$database");

if($link === false) {
die("ERROR: Could not connect.". mysqli_connect_error());
}


$mysqli = new mysqli("$host", "$username", "$password", "$database");


if($products = $mysqli->query('SELECT * FROM inventory')) {

$product = mysqli_num_rows($products);

   echo ' 
   <script>

   document.getElementById("product_count").innerHTML = '. $product.'; 
   
   </script>
   ';

}

else{ 

   echo ' 
      <script>

   document.getElementById("product_count").innerHTML = "0"; 
   
   </script>
   ';

 } 




if($sqldata = $mysqli->query('SELECT * FROM inventory')) {

while($row = $sqldata->fetch_assoc()){


$itemID = $row["item_ID"];
$SKU = $row["SKU"];
$product_name = $row["product_name"];
$supplier = $row["supplier"];
$stock = $row["stock"];
$price = $row["price"];
$expiration = $row["expiration"];
$category = $row["category"];

$status = "<font color='green'>In Stock</font>" ;

if ($stock < 100) {
	$status = "<font color='orange'>Critical Stock</font>";
}

if ($stock == "0") {
	$status = "<font color='red'>Out Of Stock</font>";
}
   echo ' 
 
                       <tr>
                        <td>
                          '.$itemID.'
                        </td>
                        <td>
                          '.$SKU.'
                        </td>
                        <td>
                         '.$product_name.'
                        </td>
                        <td>
                          '.$supplier.'
                        </td>
						<td>
                          '.$stock.'
                        </td>
						<td>
                          '.$price.'
                        </td>
						<td>
                          '.$expiration.'
                        </td>
						<td>
                          '.$category.'
                        </td>
						<td>
                          '.$status.'
                        </td>
                      </tr>
					  
 
 
   ';




}

}
?>

	  
	   <!------------------------------------------ PHP ENDS --------------------------------------->  


					

					  

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
		  
		  
        </div>
		
			      <!------------------------------------------ END CONTENTS --------------------------------------->  
		
      </div>
	  
	  

	  
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                
              </ul>
            </nav>
            <div class="credits ml-auto">

            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
