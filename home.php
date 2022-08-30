<?php

require_once('dbconnection.php');
session_start();
?>




<!DOCTYPE html>
<html lang="en">
 
<head>
 
    <meta charset="UTF-8">
    <link  rel="stylesheet" type= "text/css" href="cs/styles.css">	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="cs/bootstrap.min.css"  rel="stylesheet">
    <link href ="cs/font-awesome.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="js/bootstrap.bundle.min.js"></script>  
    <script src="cs/jq.js"></script> 
    <script src="myscripts.js"></script> 
</head>

<!-- Sticky navbar-->
<header class="header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <div class="container"><a class="navbar-brand" href="#">
            <strong class="h6 mb-0 font-weight-bold text-uppercase">Cybernet</strong></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                
                    <li class="nav-item"><a class="nav-link" href="#serv">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fot12">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

</section>





<!-- Second Section-->
<section class="py-5 section-2" id = "serv">
   
<div class = "secHeader">
  <h3 style = "text-align: center; ">Welcome 
  <?php 
               //accessing data from the datanase using session

                echo $_SESSION['name'];
                echo " ";
                echo $_SESSION['surname1']; 

             
  ?>
  to our online Services
 </h3>
  <br>
</div>
          

<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
      <img src="images/serv1.png" class="card-img-top" alt="...">
        <div class="card-body text-center">
         <a href = "cvTemplates.php"> <h5 class="card-title mb-0">Create CV</h5></a>
          <div class="card-text text-black-50"></div>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
      <img src="images/serv2.png" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <a href = "quoteForm.php"><h5 class="card-title mb-0">Create Quotation</h5></a>
          <div class="card-text text-black-50"></div>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
      <img src="images/serv3.png" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <a href = "scan.php"><h5 class="card-title mb-0">Scan Documents</h5></a>
          <div class="card-text text-black-50"></div>
        </div>
      </div>
    </div>
    <!-- Team Member 4 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
      <img src="images/serv4.png" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <a href = "letter.php"> <h5 class="card-title mb-0">create a cover letter</h5></a>
          <div class="card-text text-black-50"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->

 <!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="images/serv5.png" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <a><h5 class="card-title mb-0">Website Design</h5></a>
          <div class="card-text text-black-50"></div>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
      <img src="images/serv6.png" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <a><h5 class="card-title mb-0">video Invitations</h5></a>
          <div class="card-text text-black-50"></div>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
      <img src="images/serv7.png" class="card-img-top"  alt="...">
        <div class="card-body text-center">
          <a><h5 class="card-title mb-0">Logo Design</h5></a>
          <div class="card-text text-black-50"></div>
        </div>
      </div>
    </div>
      <!-- Team Member 4 -->
        <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
      <img src="images/serv8.png" class="card-img-top"  alt="...">
        <div class="card-body text-center">
          <a><h5 class="card-title mb-0">Poster Design</h5></a>
          <div class="card-text text-black-50"></div>
        </div>
      </div>
    </div>

</div>
  <!-- /.row -->
 
</div>



</div>




<section class="py-5 section-3">
    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h3>Watch Our Video To Learn About Our Online Service</h3>
                
  
                <div class="embed-responsive embed-responsive-21by9">
                 <iframe class="embed-responsive-item" src="images/explain2.mp4"></iframe>
              </div>

            </div>
        </div>
    </div>
</section>





<!-- Footer -->
<footer class="bg-dark text-center text-white" id = "fot12">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-whatsapp" aria-hidden="true"></i></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-facebook" aria-hidden="true"></i></i></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-google" aria-hidden="true"></i></i></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-twitter" aria-hidden="true"></i></i
      >
      </a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-github" aria-hidden="true"></i></i></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-envelope" aria-hidden="true"></i>
      </a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Contact Admin</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Message</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Submit
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
      

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Address</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a  class="text-white">19668 Tsamaya Road</a>
            </li>
            <li>
              <a  class="text-white">Mamelodi East</a>
            </li>
            <li>
              <a class="text-white">0122</a>
            </li>
            
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contact Details</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a class="text-white">cybernetinternetcafe555@gmail.com</a>
            </li>
            <li>
              <a  class="text-white">073 166 4529</a>
            </li>
           
          </ul>
        </div>
        <!--Grid column-->


           <!--Grid column-->
           <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Connect with us</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">facebook</a>
            </li>
            <li>
              <a href="#!" class="text-white">twitter</a>
            </li>
           
          </ul>
        </div>
        <!--Grid column-->


         <!--Grid column-->
         <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Quick Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">privacy policy</a>
            </li>
            <li>
              <a href="#!" class="text-white">about us</a>
            </li>
           
            <li>
              <a href="#!" class="text-white">covid19</a>
            </li>
           
          </ul>
        </div>
        <!--Grid column-->
       
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">cybernet.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

