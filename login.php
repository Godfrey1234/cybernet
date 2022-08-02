<?php

require_once('dbconnection.php');
session_start();
?>




<!DOCTYPE html>
<html lang="en">
 
<head>
 
    <meta charset="UTF-8">
    <link  rel="stylesheet" type= "text/css" href="cs/logins.css">	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="cs/bootstrap.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrap.bundle.min.js"></script> 
     
    
</head>
 
 
<?php
     
  //log in code

       if(isset($_POST['login']))
        {
            $password=$_POST['password'];
            $username=$_POST['email'];
            $ret= mysqli_query($db,"SELECT * FROM users WHERE email ='$username' and pass ='$password'");
            $num=mysqli_fetch_array($ret);


           if($num>0)
             {
               //header is a command used for redirecting to another page
        
                $extra="home.php";
                header("location:$extra");

              
              //session is used to store value from the database
                $_SESSION['name'] = $num['name'];
                $_SESSION['surname1'] = $num['surname'];
				$_SESSION['email1'] = $num['email'];
               
				
             }
           else
             {
                echo "<script>alert('invalid username or Password');</script>";
             }
        }
     
	 
	 

 ?>












<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
<div class="container">
            <div class="row">
                <div class="col-md-11 mt-60 mx-md-auto">
                    <div class="login-box bg-white pl-lg-5 pl-0">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-6">
                                <div class="form-wrap bg-white">
                                    <h4 class="btm-sep pb-3 mb-5">Login</h4>
                                    <form action = "login.php" method = "post" >
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group position-relative">
                                                    <span class="zmdi zmdi-account"></span>
                                                    <input type="email"  name = "email" class="form-control" placeholder="Email Address" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group position-relative">
                                                    <span class="zmdi zmdi-email"></span>
                                                    <input type="password"   name="password" class="form-control" placeholder="Password" required>
                                                </div>
                                            </div>
                                            <div class="col-12 text-lg-right">
                                                <a href="forgotpassword.php" class="c-black">Forgot password ?</a>
                                            </div>
                                            <div class="col-12 mt-30">
                                                
                                                <Button class="btn btn-primary btn-block py-2" type="submit" name="login"><span class="font-weight-bold">Sign in</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content text-center">
                                    <div class="border-bottom pb-5 mb-5">
                                        <h3 class="c-black">First time here?</h3>
                                        <a href="register.php" class="btn btn-custom">Sign up</a>
                                    </div>
                                    
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</html>