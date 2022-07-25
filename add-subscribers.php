
<?php

require_once('logics/subscribers1.php')

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
                                <a href="index.php">
                                    <button type="button" class="btn btn-dark ">
                                       <span> <i class="fa fa-arrow-left" > <span>Go back</span> </i> </span>
                                      
                                    </button>
                                </a>
                                <h4 class="text-center col-9 ">Students</h4>
								
                                
                    </div>
	    		</div>
                <?php
                 echo
                 '<span class="alert alert-success mx-auto">
                    '.$insert_data.'       
                 </span>   ';
                 
                 ?>
            </div>
          </div>
			
		</div>
	</div>
	<?php include('includes/scripts.php') ?>
</body>
</html>