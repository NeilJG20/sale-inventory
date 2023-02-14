
var adminid = localStorage.getItem("administrator");
var userid = localStorage.getItem("useronly");

function logout() {

window.location = "index.php";
localStorage.setItem("administrator", null)
localStorage.setItem("useronly", null)

}

function dashboard() {


window.location = "dashboard.php?id="+adminid;


}

function inventory() {


window.location = "inventory.php?id="+adminid;


}

function sales() {


window.location = "sales.php?id="+adminid


}

function employee() {


window.location = "users.php?id="+adminid


}


function cashierUI() {


window.location = "cashierUI.php?id="+userid


}


function cashierinventory() {


window.location = "cashierinventory.php?id="+userid


}