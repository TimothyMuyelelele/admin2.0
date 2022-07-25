
<?php
    $message="";
   require_once('logics/dbconnection.php');
   $queryStudent=mysqli_query($conn,"SELECT * FROM subscribers WHERE no='".$_GET['id']."'  ");
   while($fetchStudent=mysqli_fetch_array($queryStudent))
   {
    
    $id=$fetchStudent['no'];
    $email=$fetchStudent['email'];
    
  
  

   }
  require_once('logics/subscribers1.php');
   
   
?>

<!DOCTYPE html>

<html>
<head>
	<title>Students</title>
	<?php  include('includes/header.php') ?>
	
</head>
<body>
	 <!-- All our code. write here   -->
	 <?php include('includes/navbar.php');?>
	 
	 <?php include('includes/sidebar.php'); ?>

	<div class="main-content">
		<div class="container-fluid">
		  <div class="card">
            <div class="card-body">
				<div class="card-header bg-dark text-white ">
					<div class="row ">
                                <a href="subscribers.php">
                                    <button type="button" class="btn btn-dark ">
                                       <span> <i class="fa fa-arrow-left" > <span>Go back</span> </i> </span>
                                      
                                    </button>
                                </a>
                                <h4 class="text-center col-9 ">Students</h4>
								
                    </div>
                   
                </div>
                <form action="edit-subscribers.php?id=<?php echo $id ?>" method="POST" class="pt-3" > 
                        <div class="row d-flex justify-content-center pb-3 mx-auto">
                          <p class="fw-lighter fs-4 text-center">Subscribe to get information, latest news about <br>Zalego Academy
                        <br>Make changes to the email.
                    </p>
                               <div class=" col-lg-4 justify-content-center pl-5 ml-5 align-items-center ">
                                  <label for="email" class="form-label fw-semibold ">Email</label>
                                  <input type="email" class="form-control " name="email" placeholder="<?php echo $email?>">     
                                </div>
                           <div class=" mt-4 p-2 col-lg-3 pb-5">
                <button class="btn btn-primary" name="subscribe">Subscribe</button>  
            </div>   
           </form>    
            </div>
          </div>
			
		</div>
	</div>
	<?php include('includes/scripts.php') ?>
</body>
</html>