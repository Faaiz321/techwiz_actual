<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "techwiz";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn){
    echo "<h1>Connected</h1>";
}
else{
    die("Connection Failed");
}

?>