<?php

   require_once('logics/dbconnection.php');
   $queryStudent=mysqli_query($conn,"SELECT * FROM enrollments WHERE no='".$_GET['id']."'  ");
   while($fetchStudent=mysqli_fetch_array($queryStudent))
   {
    $fullname= $fetchStudent['fullname'];
   }
?>



<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Edit student details</title>
    <?php  include('includes/header.php') ?>
</head>
<body>
     <!-- All our code. write here   -->
     <?php include('includes/navbar.php');?>
	 
     <?php include('includes/sidebar.php'); ?>
 
     <div class="main-content">
         <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white ">
                            <h4 class="text-center">Edit student-<?php echo $fullname?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php include('includes/scripts.php') ?>
</body>
</html>