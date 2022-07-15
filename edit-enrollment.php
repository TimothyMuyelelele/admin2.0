<?php
    $message="";
   require_once('logics/dbconnection.php');
   $queryStudent=mysqli_query($conn,"SELECT * FROM enrollment WHERE no='".$_GET['id']."'  ");
   while($fetchStudent=mysqli_fetch_array($queryStudent))
   
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
                            <div class="row ">
                                <a href="student.php">
                                    <button type="button" class="btn btn-dark ">
                                       <span> <i class="fa fa-arrow-left" > <span>Go back</span> </i> </span>
                                      
                                    </button>
                                </a>
                                <h4 class="text-center col-9 ">Edit student-<?php echo $fullname?></h4>
                                
                            </div>
                            <div class="text-center text-success"><?php echo $message?></div>
                        </div>
                        <div class="card-body">
                             <form action="edit-enrollment.php?id=<?php echo $id ?>" method="POST" class="row g-3 needs-validation " name="no"  novalidate>
                                 
                 
                                 <div class="col-md-5 mx-auto">
                                     <label for="name" class="form-label fw-semibold">Full name</label> 
                                     <input type="text" value="<?php echo $fullname?> " class="form-control form-control-lg shadow-sm p-3 mb-5 bg-body rounded "name="fullname" id="name"  required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                     <div class="invalid-feedback">
                                         please enter your full name.
                                     </div>
                                   
                                 </div>
                                 <div class="col-md-5 mx-auto">
                                     <label for="phone" class="form-label fw-semibold">Phone Number</label>
                                     <input type="tel"  value="<?php echo $phonenumber?>"class="form-control form-control-lg shadow-sm p-3 mb-5 bg-body rounded " name="phonenumber" id="Phone" placeholder="+2547........." required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                     <div class="invalid-feedback">
                                         please enter your phone number.
                                     </div>
                                 </div>
                                 <div class="col-md-5 mx-auto">
                                     <label for="email" class="form-label fw-semibold ">E-mail</label>
                                     <input type="email" value="<?php echo $email?>" class="form-control form-control-lg shadow-sm p-3 mb-5 bg-body rounded " name="email" id="name" placeholder="Please enter your email" required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                     <div class="invalid-feedback">
                                         please enter your email
                                     </div>
                                 </div>
                                 <div class="col-md-5 mx-auto ">
                                     <label for="gender" class="form-label  fw-semibold ">What's your gender?</label>
                                  
                                     <select  name="gender" class="custom-select custom-select-lg shadow-sm " >
                                       <option selected><?php echo $gender?></option>
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                       <option value="Other">Other</option>
                                     </select>
                                     <div class="valid-feedback">
                                         good
                                     </div>
                                     <div class="invalid-feedback">
                                         please choose your gender
                                     </div>
                                 </div>
                                 <div class="col-md-12 pt-5">
                                     <p class="text-center fs-5">
                                         In order to complete your registration to the bootcamp, you are required to select one course you will be <br>
                                         undertaking. Please NOTE that this will be your learning track during the 2-weeks immersion.
                                     </p>
                                 </div>
                                 <div class="col-md-7 pt-2 ms-5">
                                     <label for="courses"class="form-label fw-semibold" >what's your prefered course</label>
                                     <select name="course" class="custom-select custom-select-lg shadow-sm" >
                                         <option selected><?php echo $course?></option>                        
                                         <option value="Web design & development">Web design & development</option>
                                         <option value="Cyber security">Cyber security</option>
                                         <option value="Android application development-Kotlin">Android application development-Kotlin</option>
                                         <option value="Data annotation">Data annotation</option>
                                         <option value="Data analysis">Data analysis </option>
                                         <option value="Software design & development">Software design & development</option>
                                         <option value="Data analysis with python">Data analysis with python</option>
                                     </select>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                     <div class="invalid-feedback">
                                         please choose your course
                                     </div>
                 
                                 </div>
                                 <div class="col-md-12 pt-2">
                                     <p class="text-center mt- fs-5">
                                         You agree by providing your information you understand all our data privacy and protection policy <br>
                                         Outlined in our terms & condition and the Privacy PolIicy statements.
                                     </p>
                                 </div>
                                 <div class="col-12">
                                     <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                       <label class="form-check-label fw-semibold" for="invalidCheck">
                                         Agree to terms and conditions
                                       </label>
                                       <div class="invalid-feedback">
                                         You must agree before submitting.
                                       </div>
                                     </div>
                                 </div>
                                 <br>
                                 <br>
                                 <div class="col-12 mt-2">
                                     <button class="btn btn-primary" name="updateenroll" type="submit">Update records</button>
                                 </div>
                 
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php include('includes/scripts.php') ?>
</body>
</html>