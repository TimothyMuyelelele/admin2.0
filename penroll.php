<?php
 $enroll="";

$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);
if(isset ($_POST["submit"] ) )
{
    //1.Fetch form data
    $fullname=$_POST["fullname"];
    $phone=$_POST["phonenumber"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $course=$_POST["course"];
    
    //Submit form data
    $insert_data= mysqli_query($conn,"INSERT INTO 
    enrollment(fullname,phonenumber,email,gender,course)
    VALUES('$fullname','$phone','$email','$gender','$course')
    ");  
if($insert_data){
    $enroll="SUCCESS";
}
else{
    $enroll="failure" .mysqli_error($conn);
}
}
?>