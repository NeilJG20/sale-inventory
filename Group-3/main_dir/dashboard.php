
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
            <a onclick="dashboard()">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
		  
		  
		  
          <li>
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
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
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
if(adminid == null ||adminid == "null" || adminid != '.$id.' ) {
	window.location = "index.php";
}
</script>
';


if(!isset($_GET['id']))
{
echo '
<script>
var adminid = localStorage.getItem("administrator");
window.location = "dashboard.php?id="+adminid;
</script>
';
}
$mysqli -> close();
?>	
    
	  
      <div class="content">
	  
	  	      <!------------------------------------------ START CONTENT --------------------------------------->  
	  
	  
	  
	  
	  		
		      <!------------------------------------------ ROW 2 --------------------------------------->  	
		
        <div class="row" style="display: block;">
		
		
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Sales Performance</h5>
                <p class="card-category">7 day analytics</p>
              </div>
			  			  
            </div>
          </div>
		  
		  
		  
        </div>
		

<section id="chartjs-line-charts">

 
    <div class="row">
        <div class="col-12">
            <div class="card">
 
 


                <div class="card-content collapse show">
                    <div class="card-body chartjs">
                            <div class="height-100%">



<?php

include 'dbconfig.php';

$link = mysqli_connect("$host", "$username", "$password", "$database");

if($link === false) {
die("ERROR: Could not connect.". mysqli_connect_error());
}

?>


<?php

$mysqli = new mysqli("$host", "$username", "$password", "$database");

if($sqldata = $mysqli->query('SELECT * FROM sales')) {

while($row = $sqldata->fetch_assoc()){

$transaction_ID = $row["transaction_ID"];
$date = $row["date"];
$total_price = $row["total_price"];
$transactions;

if($rec = $mysqli->query('SELECT * FROM sales')) {
$transactions = mysqli_num_rows($rec);
}

echo "

";


 }

}

else{ 

   echo ' <b><p style="color:red;" class="text-size-20 text-yellow text-center center text-uppercase">No Data Available</p>';

 } 


?>





<style>
.chart {
  border: 3px solid #6BD098;
}
</style>


<div class="chart" id="chart2" style="display: block;">
		<canvas id="myChart" width="400" height="200"></canvas>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
<script>

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
	
	type: 'line', 
	



	data: {
		labels: [
        
<?php
$mysqli = new mysqli("$host", "$username", "$password", "$database");
if($sqldata = $mysqli->query('SELECT * FROM sales')) {
while($row = $sqldata->fetch_assoc()){
$transaction_ID = $row["transaction_ID"];
$date = $row["date"];
$total_price = $row["total_price"];


echo '
            "'.$date.'", 
';
 }
}

?>
            ],
    

    datasets: [{
			label: "Sales Performance",
			backgroundColor: '#FCC468',
			borderColor: '#F17E5D',
			data: [


<?php
$mysqli = new mysqli("$host", "$username", "$password", "$database");
if($sqldata = $mysqli->query('SELECT * FROM sales')) {
while($row = $sqldata->fetch_assoc()){
$transaction_ID = $row["transaction_ID"];
$date = $row["date"];
$total_price = $row["total_price"];


echo '
           '.$total_price.', 
        
';

 }


}









?>              
                
                ],
		},
  
        
        ]
	},

	options: {
    layout: {
      padding: 10,
    },
		legend: {
			position: 'bottom',
		},
		title: {
			display: true,
			text: 'Sales Statistics'
		},
		scales: {
			yAxes: [{
				scaleLabel: {
					display: true,
					labelString: 'Amount',
                     
				},

                ticks: { }

			}],
			xAxes: [{
				scaleLabel: {
					display: false,
					labelString: 'Date Recorded'
				}
			}]
		}
	}
});



</script>






	  
	  
	  <hr><hr>
	  
	  
	  
	      <!------------------------------------------ ROW 1 --------------------------------------->  
	  
        <div class="row">
		
		
		
	
		
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Inventory</p>
                      <p class="card-title"><font id="product_count"></font> products<p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
		  
		  
		  
		  
		  
		  
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Revenue</p>
                      <p class="card-title">Php <font id="revenue"></font><p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
		  
		  
		  

		  
		  
		  	  
		  
		  
        </div>
		
		

		
			      <!------------------------------------------ ROW 3 --------------------------------------->  
		
		
        <div class="row">
		
		
          <div class="col-md-12">

            </div>
          </div>
		          </div>
		
	
        <div class="col-md-12 col-sm-12">
            <div class="card">

<script>



<?php

$mysqli = new mysqli("$host", "$username", "$password", "$database");
if($sqldata = $mysqli->query('SELECT * FROM product_category')) {
while($row = $sqldata->fetch_assoc()){

$id = $row["ID"];
$sandwich = $row["sandwich"];
$fries = $row["fries"];
$drinks = $row["drinks"];
$others = $row["others"];

   
echo '
var canvas = document.getElementById("pie");
var ctx = canvas.getContext("2d");
var lastend = 0;
var data = [
    
    '.$sandwich.', 
    
    '.$fries.', 
    
    '.$drinks.',
    
    '.$others.',
    
    
    ]; 
    
    ';

}
}

    ?>
    
var myTotal = 0; 
var myColor = ['#F17E5D', '#6BD098', '#FCC468','#1E9FF2']; 

for (var e = 0; e < data.length; e++) {
  myTotal += data[e];
}

for (var i = 0; i < data.length; i++) {
  ctx.fillStyle = myColor[i];
  ctx.beginPath();
  ctx.moveTo(canvas.width / 2, canvas.height / 2);
  
  ctx.arc(canvas.width / 2, canvas.height / 2, canvas.height / 2, lastend, lastend + (Math.PI * 2 * (data[i] / myTotal)), false);
  ctx.lineTo(canvas.width / 2, canvas.height / 2);
  ctx.fill();
  lastend += Math.PI * 2 * (data[i] / myTotal);
}

</script>


                        </div>
                    </div>
                </div>
            </div>
        </div>












		
			      <!------------------------------------------ END CONTENTS --------------------------------------->  
		
      </div>
	  
	  
	  
			      <!------------------------------------------ PHP STARTS --------------------------------------->  
	  
<?php

include 'dbconfig.php';

$link = mysqli_connect("$host", "$username", "$password", "$database");

if($link === false) {
die("ERROR: Could not connect.". mysqli_connect_error());
}


$mysqli = new mysqli("$host", "$username", "$password", "$database");


if($sqldata = $mysqli->query('SELECT sum(stock) as Totals FROM inventory')) {



while($row = $sqldata->fetch_assoc()){


$stockss = $row["Totals"];

   
   echo ' 
   <script>

   document.getElementById("product_count").innerHTML = '. $stockss.'; 
   
   </script>
   ';

if($sandwichs = $mysqli->query('SELECT * FROM inventory WHERE category = "sandwich"')) {
$sandwichcount = mysqli_num_rows($sandwichs);

	    $sql = "UPDATE product_category SET sandwich = $sandwichcount";
           $insert = mysqli_query($link, $sql);
            if($insert){            }
			else {            } 
}

if($sandwichs = $mysqli->query('SELECT * FROM inventory WHERE category = "drinks"')) {
$sandwichcount = mysqli_num_rows($sandwichs);

	    $sql = "UPDATE product_category SET drinks = $sandwichcount";
           $insert = mysqli_query($link, $sql);
            if($insert){            }
			else {            } 
}

if($sandwichs = $mysqli->query('SELECT * FROM inventory WHERE category = "fries"')) {
$sandwichcount = mysqli_num_rows($sandwichs);

	    $sql = "UPDATE product_category SET fries = $sandwichcount";
           $insert = mysqli_query($link, $sql);
            if($insert){            }
			else {            } 
}

if($sandwichs = $mysqli->query('SELECT * FROM inventory WHERE category = "others"')) {
$sandwichcount = mysqli_num_rows($sandwichs);

	    $sql = "UPDATE product_category SET others = $sandwichcount";
           $insert = mysqli_query($link, $sql);
            if($insert){            }
			else {            } 
}

}

}

else{ 

   echo ' 
      <script>

   document.getElementById("product_count").innerHTML = "0"; 
   
   </script>
   ';

 } 




if($sqldata = $mysqli->query('SELECT SUM(total_price) As Total FROM sales')) {

while($row = $sqldata->fetch_assoc()){


$reveune = $row["Total"];

   echo ' 
   <script>

   document.getElementById("revenue").innerHTML = '.$reveune.'; 
   
   </script>
   ';




}

}


if($sqldata = $mysqli->query('SELECT * FROM product_category')) {
while($row = $sqldata->fetch_assoc()){


   
   echo ' 
   <script>

   
   </script>
   ';
   
}

}





?>

	  
	   <!------------------------------------------ PHP ENDS --------------------------------------->  

	  
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
