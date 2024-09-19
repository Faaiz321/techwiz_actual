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
  
if (isset($_POST['add_variant'])){

$products = $_FILES['product_image']['name'];
$tempname = $_FILES['product_image']['tmp_name'];
$folder = 'assets/images' .$products;

$query = mysqli_query($conn, "Insert into products (file) values ('$products') ") ;

if(move_uploaded_file($tempname, $folder)) {

    echo "file uploaded successfully";
}  else{

    echo "file not uploaded successfully";
}
 
}

?>