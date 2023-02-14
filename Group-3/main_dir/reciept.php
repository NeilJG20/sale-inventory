
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
          <li class="active ">
            <a onclick="cashierUI()">
              <i class="nc-icon nc-bank"></i>
              <p>Transact</p>
            </a>
          </li>
		  
		  
		  
          <li >
            <a onclick="cashierinventory()">
              <i class="nc-icon nc-bullet-list-67"></i>
              <p>Inventory</p>
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
            <a class="navbar-brand" href="javascript:;">Ordering Interface</a>
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

      <div class="content">
	  
	  	      <!------------------------------------------ START CONTENT --------------------------------------->  
	  
	  
	  
	 

		  
	  
	  
	      <!------------------------------------------ ROW 1 --------------------------------------->  
	  		  		
	
		
		
		
		<center>
          <div class="col-md-6">
            <div class="card ">
              <div class="card-header ">
				
			
				  
						<div class="col-md-12">
                          <button class="btn btn-success btn-block">ORDER RECEIPT</button>
                        </div>
                </div>
				
				
                <h5 class="card-title">Angel's Burger - Antipolo Branch <br><font style="font-size: 11pt;">Transaction ID: <font style="color: green;" id="custID"></font>
				Cashier: <font style="color: green;" id="cashiers"></font><br>
				Time & Date: <font style="color: green;" id="timedate"></font>
				</h5>
				
				
				 
    
				
				  <p class="card-title">&nbsp;&nbsp;SKU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price</p>
				  <hr>
				  
				  
				  
		
	  
	  
			      <!------------------------------------------ PHP STARTS --------------------------------------->  
	  
<?php

include 'dbconfig.php';

$custID = @$_GET['custID'];

   
$link = mysqli_connect("$host", "$username", "$password", "$database");

if($link === false) {
die("ERROR: Could not connect.". mysqli_connect_error());
}


$mysqli = new mysqli("$host", "$username", "$password", "$database");

	
$totalall = 0;

	
if($sqldata = $mysqli->query("SELECT * FROM sales WHERE customer_ID = $custID")) {


while($row = $sqldata->fetch_assoc()){


$transaction_ID = $row["transaction_ID"];
$SKU = $row["SKU"];
$product_names = $row["product_name"];
$quantity = $row["quantity"];
$total_price = $row["total_price"];
$time = $row["time"];
$date = $row["date"];
$cashier = $row["cashier"];
$cashierID = $row["cashierID"];


   echo ' 

   
     <p class="card-title"><font id="skusum0">'.$SKU.'</font> &nbsp;&nbsp; <font id="namesum0">'.$product_names.'</font> &nbsp;&nbsp; <font id="quans0">'.$quantity.'</font> &nbsp;&nbsp; <font id="pricsum0">'.$total_price.'</font> </p>
   
<script>

document.getElementById("custID").innerHTML = "'.$custID.'";
document.getElementById("cashiers").innerHTML = "'.$cashier.' ID: '.$cashierID.'";
document.getElementById("timedate").innerHTML = "'.$date.' / '.$time.'";
document.getElementById("total").innerHTML = "'.$totalall.'";

</script>
   ';

$totalall = $totalall + $total_price;

}




}

else{ 



 } 

?>

	  
	   <!------------------------------------------ PHP ENDS --------------------------------------->  

	  
	  
				  
		
		
		
             
				  
     	  
					<hr>
					<h4 align="center" class="card-title text-center">Total: Php <font id="total">0</font></h4>
					<p align="center">THANK YOU!</p>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-success btn-round" onclick="cashierUI()">DONE</button>
                    </div>
	
		  
			
              </div>

            </div>
          </div>
		  
		  

<?php

echo '

<script>

document.getElementById("total").innerHTML = "'.$totalall.'";

</script>
';

?>	  		  
		  

					
<script>



document.getElementById("cashier").innerHTML = localStorage.getItem("useronlyname");
document.getElementById("cashierid").innerHTML = localStorage.getItem("useronly");

if (localStorage.getItem("counter") === null) {
	
localStorage.setItem("counter", 0);

}





</script>
		  
		
		  	  
		  
		  
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
