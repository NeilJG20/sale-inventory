<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Sales and Inventory</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./style.css">

    <style>
        h3 {

            font-family: arial;
            color: white;
        }

    </style>

</head>

<body>
    <br><br>

    <h3 align="center">ANGELS BURGER SALES AND INVENTORY SYSTEM</h3>

    <br><br>

    <div id="users" style="display: block;">
        <div id="login-form-wrap">
            <h2>Login</h2>
            <p id="nosuch" style="color: white; font-size: 10pt; display: none;">INVALID CREDENTIALS</p>
            <form id="login-form" action="index.php" method="get">
                <p>
                    <input type="text" id="username" name="username" placeholder="Username" required autofocus style="border: 2px solid black; font-size: 15pt;"><i class="validation"><span></span><span></span></i>
                </p>
                <p>
                    <input type="password" id="password" name="password" placeholder="&nbsp;Password" required style="font-size: 15pt;"><i class="validation"><span></span><span></span></i>
                </p>
                <p>
                    <input type="submit" id="login" onclick="login()" value="Login">
                </p>
            </form>
            <div id="create-account-wrap">
                <p><a onclick="openadmin()">LOGIN AS ADMIN</a>
                <p>
            </div>
        </div>
    </div>
    </div>


    <div id="adminss" style="display: none;">
        <div id="login-form-wrap">
            <h2>Admin Login</h2>
            <p id="nosuch2" style="color: white; font-size: 10pt; display: none;">INVALID CREDENTIALS</p>
            <form id="login-form">
                <p>
                    <input type="text" id="username2" name="username" placeholder="Username" required autofocus style="border: 2px solid black; font-size: 15pt;"><i class="validation"><span></span><span></span></i>
                </p>
                <p>
                    <input type="password" id="password2" name="password" placeholder="&nbsp;Password" required style="font-size: 15pt;"><i class="validation"><span></span><span></span></i>
                </p>
                <p>
                <p align="center" style="padding: 10px 10px 10px 10px ;background-color: green; font-size: 15pt; color: white; border-radius: 5px;" onclick="adminlogin()">LOGIN ADMIN</p>
                </p>
            </form>
            <div id="create-account-wrap">
                <p><a onclick="openuser()">LOGIN AS USER</a>
                <p>
            </div>
        </div>

        <script>
            function login() {

                var user = document.getElementById("username").value;
                var pass = document.getElementById("password").value;

                window.location = "index.php?user=" + user + "&pass=" + pass;

            }

            function adminlogin() {

                var user2 = document.getElementById("username2").value;
                var pass2 = document.getElementById("password2").value;

                window.location = "adminlogin.php?user=" + user2 + "&pass=" + pass2;

            }


            function openadmin() {

                document.getElementById("adminss").style.display = "block";
                document.getElementById("users").style.display = "none";


            }

            function openuser() {

                document.getElementById("users").style.display = "block";
                document.getElementById("adminss").style.display = "none";

            }

        </script>

        <!------------------------------------------ PHP STARTS --------------------------------------->

        <?php

include 'dbconfig.php';

$link = mysqli_connect("$host", "$username", "$password", "$database");

if($link === false) {
die("ERROR: Could not connect.". mysqli_connect_error());
}


$mysqli = new mysqli("$host", "$username", "$password", "$database");


$username1 = @$_GET["username"];
$password1 = @$_GET["password"];



if($sqldata = $mysqli->query('SELECT * FROM users')) {


while($row = $sqldata->fetch_assoc()){


$ID = $row["ID"];
$username = $row["username"];
$password = $row["password"];
$position = $row["position"];

   

if ($username1 == $username && $password1 == $password && $position == "Cashier") {

   echo ' 
   <script>
   
	localStorage.setItem("useronlyname", "'.$username.'");
	localStorage.setItem("useronly", '.$ID.');

   window.location = "cashierUI.php?id='.$ID.'"
   
   </script>
   ';

}

if ($username1 != $username && $password1 != $password) {

	
	echo ' 
   <script>
   
   document.getElementById("nosuch").style.display = "block";
   document.getElementById("nosuch").style.color = "red";
   
   
   </script>
   ';

	
}



}



}



if(!isset($_GET['username']) && !isset($_GET['password']))
{
 
	echo ' 
   <script>
   
   document.getElementById("nosuch").style.display = "none";
   document.getElementById("nosuch").style.color = "red";
   
   
   </script>
   ';
	   
}

	

?>


        <!------------------------------------------ PHP ENDS --------------------------------------->



</body>

</html>
