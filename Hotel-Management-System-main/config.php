<?php

$server = "localhost";
$username = "root";
$password = "kishan12";
$database = "staysimplehotel";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>