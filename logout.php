<?php 
 //start session
 session_start();
 //database connection
 
$server="localhost";
$username="root";
$password="";
$database="zalego";


$conn=mysqli_connect($server,$username,$password,$database);



 //unset session
 unset($_SESSION['login']);
 //destroy session
 session_destroy();
 //redirect the user to login page
 header('location:login.php');
?>