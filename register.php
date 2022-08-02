<?php

require_once('dbconnection.php')

?>


<!DOCTYPE html>
<html lang="en">
 
<head>
 
    <meta charset="UTF-8">
    <link  rel="stylesheet" type= "text/css" href="cs/register.css">	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="cs/bootstrap.min.css"  rel="stylesheet">
    <link href ="cs/font-awesome.css"  rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="js/bootstrap.bundle.min.js"></script>  
    <script src="js/register.js"></script> 
    
</head>
 

<?php



     
     //inserting data to the database

     if(isset($_POST['register']))
     {
       
          $name = $_POST['firstname'] ;  
          $surname = $_POST['lastname'] ;
		  $email	= $_POST['email'] ;
	      $contact = $_POST['phone'] ;
          $password = $_POST['password'] ;
          $confirm = $_POST['passwordConfirmation'] ;
		  
		  
		  $ret= mysqli_query($db,"SELECT * FROM users WHERE email = '$email'"); 
		  $num=mysqli_fetch_array($ret);
		
		
		  if($num  > 0){
		   
		   
            echo "<script>alert('User Already Registered Use Forgot Password to Retrieve Account');</script>";
		  
			  
		  }	
          else
		  {
			 
             
            if($password == $confirm){
             $sql=mysqli_query($db,"insert into users (name,surname,email,contact,pass)values('$name','$surname','$email','$contact','$password')");
          
             echo "<script>alert('Registration successfully');</script>";
             
            }else{

                echo "<script>alert('password dont match');</script>";
            }
              

		  }


         



          
     }
     
    





?>







<!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <!-- Navbar Brand -->
            <a href="index.php" class="navbar-brand">
            <strong class="h6 mb-0 font-weight-bold text-uppercase">Cybernet</strong></a>
            </a>
        </div>
    </nav>
</header>


<div class="container">
    <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="images/clip1.jpg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <strong class="h6 mb-0 font-weight-bold text-uppercase">Create an Account</strong></a>
            <p class="font-italic text-muted mb-0">Join us on our new online journey </p>
            <p class="font-italic text-muted"><a href="https://bootstrapious.com" class="text-muted">
                </a>
            </p>
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
        <form action = "Register.php" method = "post" >
                <div class="row">

                    <!-- First Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="firstname" placeholder="First Name" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <!-- Last Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="lastName" type="text" name="lastname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <!-- Phone Number -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-phone-square text-muted"></i>
                            </span>
                        </div>
                       
                        <input class= "form-control" placeholder="Contact number" type="tel" name="phone" title="number must be in this format 078 589 8585" pattern = "(\+27|0)[6-8][0-9]{8}" minlength="10" maxlength="10" required value="<?php if(isset($_POST['submit']))
                         { echo htmlentities(($_POST['phone']));   } ?>">
                    </div>


                    <!-- Job -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-black-tie text-muted"></i>
                            </span>
                        </div>
                        <select id="job" name="jobtitle" class="form-control custom-select bg-white border-left-0 border-md" required>
                            <option value="">Choose your Preffered Method of Contact</option>
                            <option value="">Whatsapp</option>
                            <option value="">Email</option>
                            
                        </select>
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <!-- Password Confirmation -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="passwordConfirmation" type="text" name="passwordConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                    <Button class="btn btn-primary btn-block py-2" type="submit" name="register"><span class="font-weight-bold">Create your account</span></button>
                    </div>



                   

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>

                    

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Already Registered? <a href="login.php" class="text-primary ml-2">Login</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


</html>