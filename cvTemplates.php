<?php

require_once('dbconnection.php');
session_start();
?>




<!DOCTYPE html>
<html lang="en">
 
<head>
 
    <meta charset="UTF-8">
    <link  rel="stylesheet" type= "text/css" href="cs/cvForm.css">	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="cs/bootstrap.min.css"  rel="stylesheet">
    <link href ="cs/font-awesome.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="js/bootstrap.bundle.min.js"></script>  
      



</head>

<!-- Sticky navbar-->
<header class="header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <div class="container"><a class="navbar-brand" href="#">
            <strong class="h6 mb-0 font-weight-bold text-uppercase">Cybernet</strong></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">LogOut</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

 

<!-- Second Section-->
<section class="py-5 section-2" id ="serv">
   
   <div class = "secHeader">
     <h2 style = "text-align: center; "></h2>
     <br>
   </div>
             
   
   <!-- Page Content -->
   <div class="container">
     <div class="row">
       <!-- Team Member 1 -->
       <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-0 shadow">
         <a class= "a1" href="cvStyle1.php"><img src="images/cvStyle1.PNG" href="#" class="card-img-top" alt="..."> </a>
         </div>
       </div>
       <!-- Team Member 2 -->
       <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-0 shadow">
         <a class= "a1" href="cvStyle2.php"><img src="images/cvT2.jpg" href="#" class="card-img-top" alt="..."> </a>
         </div>
       </div>
       <!-- Team Member 3 -->
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-0 shadow">
         <a class= "a1" href="cvStyle3.php"><img src="images/cvT3.jpg" href="#" class="card-img-top" alt="..."> </a>
         </div>
       </div>
       <!-- Team Member 4 -->
       <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-0 shadow">
         <a class= "a1" href="cvStyle4.php"><img src="images/cvT4.jpg" href="#" class="card-img-top" alt="..."> </a>
         </div>
       </div>
     <!-- /.row -->
   
    
    
     <!-- Page Content -->
   <div class="container">
     <div class="row">
       <!-- Team Member 1 -->
       <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-0 shadow">
         <a class= "a1" href="cvstyle1.php"><img src="images/cvT1.jpg" href="#" class="card-img-top" alt="..."> </a>
         </div>
       </div>
       <!-- Team Member 2 -->
       <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-0 shadow">
         <a class= "a1" href="cvstyle1.php"><img src="images/cvT1.jpg" href="#" class="card-img-top" alt="..."> </a>
         </div>
       </div>
       <!-- Team Member 3 -->
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-0 shadow">
         <a class= "a1" href="cvstyle1.php"><img src="images/cvT1.jpg" href="#" class="card-img-top" alt="..."> </a>
         </div>
       </div>
       <!-- Team Member 4 -->
       <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-0 shadow">
         <a class= "a1" href="cvstyle1.php"><img src="images/cvT1.jpg" href="#" class="card-img-top" alt="..."> </a>
         </div>
       </div>
     <!-- /.row -->

   </div>




</html>