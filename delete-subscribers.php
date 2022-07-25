<?php
//database connection
require_once('logics/dbconnection.php');
$sqlDeleteStudent= mysqli_query($conn,"DELETE FROM subscribers where no ='".$_GET['id']."'");
if($sqlDeleteStudent)
{
    echo "user deleted successfully";
    header('location:subscribers.php');
}
else
{
    echo"Fatal error occured. please try again";
}
?>