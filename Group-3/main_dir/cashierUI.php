
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
				
				<a class="dropdown-item" id="admintag">Cashier</a>
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
	  
	  
	  
	  
	
	  		 
				 
  <p align="center" class="card-title">
  
  Cashier: <font style="color: red;" id="cashier">Cahier</font> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  Cashier ID: <font style="color: red;" id="cashierid">0</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  Time: <font style="color: blue;" id="times">04:56 PM</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  Date: <font style="color: blue;" id="dates">Jan 7, 2021</font></p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
	  

	   	  
	  
	  
	      <!------------------------------------------ ROW 1 --------------------------------------->  
	  
        <div class="row">
		
		
		
	
		
          <div class="col-lg-6 col-md-4 col-sm-4">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
				
			
      
				  
						<div class="col-md-12">
                          <button class="btn btn-warning btn-block">PROCESS ITEM</button>
                        </div>
                </div>
				
			
			
			
			
                <h5 class="card-title">Check Item</h5>
				
		
				
				 
				 
                <form action="cashierUI.php" method="get">
    
				  
                  <div class="row">
				  
				  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>SKU</label>
                        <input type="number" class="form-control" placeholder="SKU" name="sku" id="sku" required>
                      </div>
                    </div>
					
					  <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" placeholder="Product Name" id="productname" name="productname" required readonly>
                      </div>
                    </div>
					
					
					<div class="col-md-12">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" placeholder="Price" id="price" name="price" required readonly>
                      </div>
                    </div>
					
					<div class="col-md-12">
                      <div class="form-group">
                        <label>Stocks</label>
                        <input type="text" class="form-control" placeholder="Stocks" id="stocks" name="stocks" required readonly>
                      </div>
                    </div>
             
			 		<div class="col-md-12">
                      <div class="form-group">
                        <label>Category</label>
                        <input type="text" class="form-control" placeholder="Category" id="category" name="category" required readonly>
                      </div>
                    </div>
             
			 
                  </div>
				  
 					

                  	  
				  
		
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-warning btn-round">Check Item</button>
                    </div>
					      </form>
						  
						  
					 <div class="update ml-auto mr-auto">
                      <p class="btn btn-primarys btn-round" onclick="addOrder()">Add to Order</p>
                    </div>
                  </div>
				  
				  
				  
				  
          
   
                            

<hr>

 <div class="row">
 <div class="form-group">

	<h4 style="margin: 20px; margin-bottom: 0px; margin-top: 0px;">Change Calculator</h4>

								<div class="form-group">
									<label for="" class="sr-only">Enter Amount</label>
									<input type="number" min="0" max="1000000000" step="any" id="amtss" placeholder="Enter Amount Received" required="" value="0" style="width: 65%; font-size: 15pt; margin: 20px; margin-bottom: 0px; margin-top: 0px;">

                                    <button type="submit" class="btn btn-outline-success" onclick="checkchange()">CHECK</button>
		
								</div>


<p align="left" style="color: black; margin: 20px; margin-bottom: 5px; margin-top: 0px; font-size: 15pt;">Change: Php <font id="amtval" style="color: #000;">--------</font> </p>

                    
</div>            
                    
					
					
              </div>
			  
			  
			  

            </div>
          </div>
		  </div>



					
<script>



document.getElementById("cashier").innerHTML = localStorage.getItem("useronlyname");
document.getElementById("cashierid").innerHTML = localStorage.getItem("useronly");
document.getElementById("admintag").innerHTML = localStorage.getItem("useronlyname") + " - Antipolo";

if (localStorage.getItem("counter") === null) {
	
localStorage.setItem("counter", 0);

}


var count = eval(localStorage.getItem("counter"));
var adds = 1;



const sku = [];	
const prname = [];	
const pric = [];	
const quan = [];	

var newcount;

function addOrder() {

var quantity = prompt("Enter Quantity") ;


if (quantity != null) {
            if(quantity>=0||quantity<0){
                
				
				
				

		
		
if (quantity < 1) {
	
	alert("INVALID QUANTITY!");
}

else {

if ( document.getElementById("sku").value < 1) {
	
	
	alert("INVALID SKU!");
}

else {

var skuval = document.getElementById("sku").value ;
var productnames = document.getElementById("productname").value ;
var prices = document.getElementById("price").value ;


sku[count] = skuval;
prname[count] = productnames;
quan[count] = quantity;
pric[count] = prices * quantity;




localStorage.setItem("skusum"+count, sku[count]);
localStorage.setItem("namesum"+count, prname[count]);
localStorage.setItem("quans"+count, quan[count]);
localStorage.setItem("pricsum"+count, pric[count]);


document.getElementById("skusum"+count).innerHTML = sku[count];
document.getElementById("namesum"+count).innerHTML = prname[count];

document.getElementById("quans"+count).innerHTML = quan[count];
document.getElementById("pricsum"+count).innerHTML = pric[count];

	
newcount = eval(count + adds);

count = newcount;

localStorage.setItem("counter", newcount);



	
	document.getElementById("total").innerHTML = pric.reduce((partial_sum, a) => partial_sum + a, 0);
	location.reload();
	

}

}

            }else{
            alert('Only Number is Allowed');
            addOrder()
            }
        }

}



var date = new Date();
    var day = ((date.getMonth() > 8) ? (date.getMonth() + 1) : ('0' + (date.getMonth() + 1))) + '/' + ((date.getDate() > 9) ? date.getDate() : ('0' + date.getDate())) + '/' + date.getFullYear();


document.getElementById("dates").innerHTML = day;


function formatAMPM(date) {
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var ampm = hours >= 12 ? 'pm' : 'am';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  minutes = minutes < 10 ? '0'+minutes : minutes;
  var strTime = hours + ':' + minutes + ' ' + ampm;
  return strTime;
}

document.getElementById("times").innerHTML = formatAMPM(new Date);



function clearLocal() {
	
	var voids = prompt("Enter key to void orderd");
	
	if (voids != "key") {
		alert("INVALID KEY!");
	}
	
	else {
	
	localStorage.clear();
	window.location = "cashierUI.php";
	localStorage.setItem("useronlyname", document.getElementById('cashier').textContent);
	localStorage.setItem("useronly", document.getElementById('cashierid').textContent);
	
	}
}



</script>
		  
		
		  
		  		
	
		
          <div class="col-lg-6 col-md-4 col-sm-4">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
				
			
				  
						<div class="col-md-12">
                          <button class="btn btn-success btn-block">ORDER RECEIPT</button>
                        </div>
                </div>
				
				
                <h5 class="card-title">Order Summary <font style="font-size: 11pt;">ID: <font style="color: green;" id="custID">3562</font></h5>
				
				
				 
    
				
				  <p class="card-title">&nbsp;&nbsp;SKU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price</p>
				  <hr>
				  
				  <p class="card-title"><font id="skusum0"></font> &nbsp;&nbsp; <font id="namesum0"></font> &nbsp;&nbsp; <font id="quans0"></font> &nbsp;&nbsp; <font id="pricsum0"></font> </p>
				  
				  <p class="card-title"><font id="skusum1"></font> &nbsp;&nbsp; <font id="namesum1"></font> &nbsp;&nbsp; <font id="quans1"></font> &nbsp;&nbsp; <font id="pricsum1"></font> </p>
				  
				  <p class="card-title"><font id="skusum2"></font> &nbsp;&nbsp; <font id="namesum2"></font> &nbsp;&nbsp; <font id="quans2"></font> &nbsp;&nbsp; <font id="pricsum2"></font> </p>
				  
				  <p class="card-title"><font id="skusum3"></font> &nbsp;&nbsp; <font id="namesum3"></font> &nbsp;&nbsp; <font id="quans3"></font> &nbsp;&nbsp; <font id="pricsum3"></font> </p>
				  
				  <p class="card-title"><font id="skusum4"></font> &nbsp;&nbsp; <font id="namesum4"></font> &nbsp;&nbsp; <font id="quans4"></font> &nbsp;&nbsp; <font id="pricsum4"></font> </p>
				  
				  <p class="card-title"><font id="skusum5"></font> &nbsp;&nbsp; <font id="namesum5"></font> &nbsp;&nbsp; <font id="quans5"></font> &nbsp;&nbsp; <font id="pricsum5"></font> </p>
				  
				  <p class="card-title"><font id="skusum6"></font> &nbsp;&nbsp; <font id="namesum6"></font> &nbsp;&nbsp; <font id="quans6"></font> &nbsp;&nbsp; <font id="pricsum6"></font> </p>
				  
				  <p class="card-title"><font id="skusum7"></font> &nbsp;&nbsp; <font id="namesum7"></font> &nbsp;&nbsp; <font id="quans7"></font> &nbsp;&nbsp; <font id="pricsum7"></font> </p>
				  
				  <p class="card-title"><font id="skusum8"></font> &nbsp;&nbsp; <font id="namesum8"></font> &nbsp;&nbsp; <font id="quans8"></font> &nbsp;&nbsp; <font id="pricsum8"></font> </p>
				  
				  <p class="card-title"><font id="skusum9"></font> &nbsp;&nbsp; <font id="namesum9"></font> &nbsp;&nbsp; <font id="quans9"></font> &nbsp;&nbsp; <font id="pricsum9"></font> </p>

				  
		
             
				  
     	  
				    <h5 class="card-title text-right">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
					<hr>
					<h5 class="card-title text-right">Php <font id="total">0</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-success btn-round" onclick="placeOrder()">Place Order</button>
                    </div>
					      
						  
						 <div class="update ml-auto mr-auto">
                      <p class="btn btn-primarys btn-round" onclick="clearLocal()">Void Order</p>
                    </div>	  
			
				  
				  
			
              </div>

            </div>
          </div>
		  
		  

		  		  
		  

		  <script>
		  
		  const totpric = [];	
		  
		  for (let i = 0; i < 10; i++) {
			  
			  if (localStorage.getItem("skusum"+i) != null && localStorage.getItem("namesum"+i) != null && localStorage.getItem("quans"+i) != null && localStorage.getItem("pricsum"+i) != null ) {
				  
				  
			document.getElementById("skusum"+i).innerHTML = localStorage.getItem("skusum"+i) ;
			document.getElementById("namesum"+i).innerHTML = localStorage.getItem("namesum"+i) ;
			document.getElementById("quans"+i).innerHTML = localStorage.getItem("quans"+i) ;
			document.getElementById("pricsum"+i).innerHTML = localStorage.getItem("pricsum"+i) ;
			  
			  
			totpric[i] = eval(localStorage.getItem("pricsum"+i)) ;
			
			document.getElementById("total").innerHTML = totpric.reduce((partial_sum, a) => partial_sum + a, 0);
			
			  }
			  
			  
			  	
		  }
		  
		  
var dates = new Date();
var components = [
    dates.getYear(),
    dates.getMonth(),
    dates.getDate(),
    dates.getHours(),
    dates.getMinutes(),
    dates.getSeconds(),
    dates.getMilliseconds()
];

var ids = components.join("");

document.getElementById("custID").innerHTML = ids;


		function placeOrder() {
	
		
		var sk0 = document.getElementById("skusum0").textContent;
		var na0 = document.getElementById("namesum0").textContent;
		var qu0 = document.getElementById("quans0").textContent;
		var pr0 = document.getElementById("pricsum0").textContent;
			
		var sk1 = document.getElementById("skusum1").textContent;
		var na1 = document.getElementById("namesum1").textContent;
		var qu1 = document.getElementById("quans1").textContent;
		var pr1 = document.getElementById("pricsum1").textContent;
		
		var sk2 = document.getElementById("skusum2").textContent;
		var na2 = document.getElementById("namesum2").textContent;
		var qu2 = document.getElementById("quans2").textContent;
		var pr2 = document.getElementById("pricsum2").textContent;
			
		var sk3 = document.getElementById("skusum3").textContent;
		var na3 = document.getElementById("namesum3").textContent;
		var qu3 = document.getElementById("quans3").textContent;
		var pr3 = document.getElementById("pricsum3").textContent;
		
		var sk4 = document.getElementById("skusum4").textContent;
		var na4 = document.getElementById("namesum4").textContent;
		var qu4 = document.getElementById("quans4").textContent;
		var pr4 = document.getElementById("pricsum4").textContent;
		
		var sk5 = document.getElementById("skusum5").textContent;
		var na5 = document.getElementById("namesum5").textContent;
		var qu5 = document.getElementById("quans5").textContent;
		var pr5 = document.getElementById("pricsum5").textContent;
		
		var sk6 = document.getElementById("skusum6").textContent;
		var na6 = document.getElementById("namesum6").textContent;
		var qu6 = document.getElementById("quans6").textContent;
		var pr6 = document.getElementById("pricsum6").textContent;
		
		var sk7 = document.getElementById("skusum7").textContent;
		var na7 = document.getElementById("namesum7").textContent;
		var qu7 = document.getElementById("quans7").textContent;
		var pr7 = document.getElementById("pricsum7").textContent;
		
		var sk8 = document.getElementById("skusum8").textContent;
		var na8 = document.getElementById("namesum8").textContent;
		var qu8 = document.getElementById("quans8").textContent;
		var pr8 = document.getElementById("pricsum8").textContent;
		
		var sk9 = document.getElementById("skusum9").textContent;
		var na9 = document.getElementById("namesum9").textContent;
		var qu9 = document.getElementById("quans9").textContent;
		var pr9 = document.getElementById("pricsum9").textContent;
		
		var time = document.getElementById("times").textContent;
		var date = document.getElementById("dates").textContent;
		var cashier = document.getElementById("cashier").textContent;
		var cashierID = document.getElementById("cashierid").textContent;
		var custID = document.getElementById("custID").textContent;
		
	
		window.location = "add_sales.php?time="+time+"&date="+date+"&cashier="+cashier+"&cashierid="+cashierID+"&custID="+custID+"&sku0="+sk0+"&productname0="+na0+"&price0="+pr0+"&quantity0="+qu0+"&sku1="+sk1+"&productname1="+na1+"&price1="+pr1+"&quantity1="+qu1+"&sku2="+sk2+"&productname2="+na2+"&price2="+pr2+"&quantity2="+qu2 ;
		
		localStorage.clear();
		localStorage.setItem("useronlyname", document.getElementById('cashier').textContent);
		localStorage.setItem("useronly", document.getElementById('cashierid').textContent);
		
		}

function checkchange() {
	
	var totals = document.getElementById("total").textContent ;
	var recieved = document.getElementById("amtss").value ;
	
	if (eval(recieved) > eval(totals)) {
	document.getElementById("amtval").innerHTML = eval(recieved - totals);
	}
	else {
		alert("Enter a valid amount");
	}
}
		  </script>
		  
		  	  
		  
		  
        </div>
		
		





		
			      <!------------------------------------------ END CONTENTS --------------------------------------->  
		
      </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
			      <!------------------------------------------ PHP STARTS --------------------------------------->  
	  
<?php

include 'dbconfig.php';

$sku = @$_GET['sku'];

$link = mysqli_connect("$host", "$username", "$password", "$database");

if($link === false) {
die("ERROR: Could not connect.". mysqli_connect_error());
}


$mysqli = new mysqli("$host", "$username", "$password", "$database");


	
if($sqldata = $mysqli->query("SELECT * FROM inventory WHERE SKU = $sku")) {


while($row = $sqldata->fetch_assoc()){


$itemID = $row["item_ID"];
$SKU = $row["SKU"];
$product_names = $row["product_name"];
$supplier = $row["supplier"];
$stock = $row["stock"];
$price = $row["price"];
$expiration = $row["expiration"];
$category = $row["category"];


   echo ' 
   <script>
   
	document.getElementById("sku").value = "'.$sku.'"; 
   document.getElementById("productname").value = "'.$product_names.'"; 
   document.getElementById("price").value = "'. $price.'"; 
   document.getElementById("stocks").value = "'. $stock.'"; 
   document.getElementById("category").value = "'. $category.'"; 
   
   </script>
   ';

}




}

else{ 

   echo ' 
      <script>

   document.getElementById("productname").value = "0"; 
   
   </script>
   ';

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
