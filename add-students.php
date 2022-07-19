<?php
include("penroll.php")
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
                                <a href="student.php">
                                    <button type="button" class="btn btn-dark ">
                                       <span> <i class="fa fa-arrow-left" > <span>Go back</span> </i> </span>
                                      
                                    </button>
                                </a>
                                <h4 class="text-center col-9 ">Students</h4>
								
                                
                    </div>
	    		</divfw-bold text-cent>
                     <!-- <h1 class="er pb-3">
                         Sign up today ?
                     </h1> -->
                     <form action="add-students.php" method="POST" class="row g-3 needs-validation "   novalidate>
                        <div class="row mx-auto " >
                         <div class="col-md-12 ">
                            <?php if( $enroll) 
                              {
                               include("resenroll.php");
                              }
                                   ?>
                          </div>
                      <!-- </div>
                         <div class="col-md-5 mx-auto">
                             <label for="name" class="form-label fw-semibold" style="font-size:16px">Full name</label> 
                             <input type="text" class="form-control form-control-lg shadow-sm p-3 mb-5 bg-body rounded "name="fullname" id="name" placeholder="Enter your full name" required>
                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 please enter your full name.
                             </div>
                           
                         </div>
                         <div class="col-md-5 mx-auto">
                             <label for="phone" class="form-label fw-semibold "style="font-size:16px">Phone Number</label>
                             <input type="tel" class="form-control form-control-lg shadow-sm p-3 mb-5 bg-body rounded " name="phonenumber" id="Phone" placeholder="+2547........." required>
                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 please enter your phone number.
                             </div>
                         </div>
                         <div class="col-md-5 mx-auto">
                             <label for="email" class="form-label fw-semibold " style="font-size:16px">E-mail</label>
                             <input type="email" class="form-control form-control-lg shadow-sm p-3 mb-5 bg-body rounded " name="email" id="name" placeholder="Please enter your email" required>
                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 please enter your email
                             </div>
                         </div>
                         <div class="col-md-5 mx-auto">
                         <label for="gender" class="form-label  fw-semibold "style="font-size:16px">What's your gender?</label>
                                  
                                  <select  name="gender" class="custom-select custom-select-lg shadow-sm " >
                                    <option selected>--Select your gender</option>
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
                         <label for="courses"class="form-label fw-semibold "style="font-size:16px" >what's your prefered course</label>
                                     <select name="course" class="custom-select custom-select-lg shadow-sm" >
                                         <option selected>--Select your course--</option>                        
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
                             <p class="text-center fs-5 "style="font-size:16px">
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
                         <div class="col-12">
                             <button class="btn btn-primary" name="submit" type="submit">Submit application</button>
                              </div>
         
                     </form>
                 </div>
              </div>
              
      </form>    	
            </div>
          </div>
			
		</div>
	</div> -->
	<?php include('includes/scripts.php') ?>
</body>
</html>