<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "techwiz";

$conn = mysqli_connect($server , $username , $password , $database );

if( ! $conn){
//  echo "success";
// }

// else{

die ("error" ) ;

}

?>