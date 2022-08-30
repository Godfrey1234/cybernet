<?php

require_once('dbconnection.php');
require_once __DIR__ . '/vendor/autoload.php';
session_start();
?>




<!DOCTYPE html>
<html lang="en">
 
<head>
 
    <meta charset="UTF-8">
    <link  rel="stylesheet" type= "text/css" href="cs/cvStyle.css">	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="cs/bootstrap.min.css"  rel="stylesheet">
    <link href ="cs/font-awesome.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="js/bootstrap.bundle.min.js"></script>  
      
    <?php

      

     
//Creating pdf document (download button)

if(isset($_POST['download']))
{
     // Declaring variables
     $name = $_POST['name'] ;  
     $surname = $_POST['surname'] ;
     $email	= $_POST['email'] ;
     $tel = $_POST['tel'] ;
     $street = $_POST['street'] ;
     $town = $_POST['town'] ;
     $gender = $_POST['gender'];
     $code = $_POST['code'];
     
   
     //creating a new pdf instance
     $mpdf = new \Mpdf\Mpdf();
     $mpdf->tabSpaces = 6;

     //create a variable that will store all pdf file information
     $data ='';

     //create our pdf
    
   



     $data .='<html>

     <head>
     <link  rel="stylesheet" type= "text/css" href="css/cvForm.css">	
     </head>
     
     <div style=" text-align:center; background-color:black; padding-top:2%; font-size:2em; text-transform:uppercase; color:white; ">Curriculum vitae of '.$name.' '.$surname. '</div>
     <br>
     <div>
     <table style =" width:100%;">
     <tr>
     <th style ="background-color:black; width:15%; height:100px; color:white;"></h3>Personal Details</h3></th>
     <th style =" width:25%; text-align:left; font-size:14px; padding-left:5%;">

      <p>Name   </p>
      <p>Surname </p>
      <p>Gender  </p>
      <p>Name   </p>
      <p>Surname </p>
      <p>Gender  </p>
     
     </th>
     <th style =" width:30%; text-align:left; font-size:14px; ">

     <p>: '.$name.'</p>
     <p>: </p>
     <p>:  </p>
     <p>Name   </p>
      <p>Surname </p>
      <p>Gender  </p>
    
    </th>
     </tr>
     </table>
     </div>

        <br>
        <br>
      <div>
     <table style =" width:100%;">
     <tr>
     <th style ="background-color:black; width:19%; height:100px; color:white;"></h3>Contact Details</h3></th>
     <th style =" width:25%; text-align:left; font-size:14px; padding-left:5%;">

      <p>Address </p>
      <p><br> </p>
      <p> <br></p>
      <p><br> </p>
      
      <p>Contact Number </p>
      <p>Email </p>
      
     
     </th>
     <th style =" width:30%; text-align:left; font-size:14px; ">

     <p>: '.$name.'</p>
     <p>: </p>
     <p>:  </p>
     <p>Name   </p>
      <p>Surname </p>
      <p>Gender  </p>
    
    </th>
     </tr>
     </table>
     </div>
     
     </html> ';
    

    //write Pdf
    $mpdf->WriteHTML($data);

    
    //output pdf
    $mpdf->Output('CV of '.$name.' '.$surname.'.pdf','D');
 }

?>
<!-- End of php for creating a pdf file-->

</head>

<!-- Sticky navbar-->
<header class="header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <div class="container"><a class="navbar-brand" href="#">
            <a><strong class="h6 mb-0 font-weight-bold text-uppercase">Cybernet</strong></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="CvTemplates.php">Change Template</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">LogOut</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body>

<div class="container1">
<form action = "cvStyle2.php" method = "post" >
    <div class="row">
      
    <h4 style ="font-size:1.2em;">PERSONAL DETAILS</h4>
       
      <div class="input-group input-group-icon">
        <input placeholder="Name" type="text" name="name"  required value="<?php if(isset($_POST['download']) || isset($_POST['eduAdd']) || isset($_POST['expAdd']) || isset($_POST['refAdd']))
       { echo htmlentities(($_POST['name']));   } ?>">
        <div class="input-icon"><i class="fa fa-user"></i></div>
       </div>

      <div class="input-group input-group-icon">
        <input type="text" placeholder="Surname" name = "surname" required value="<?php if(isset($_POST['download']) || isset($_POST['eduAdd'])  || isset($_POST['expAdd']) || isset($_POST['refAdd']))
       { echo htmlentities(($_POST['surname']));   } ?>">
        <div class="input-icon"><i class=" fa fa-user-plus"></i></div>
      </div>

      <div class="input-group input-group-icon">
        <input type="email" placeholder="Email" name ="email" required value="<?php if(isset($_POST['download']) || isset($_POST['refAdd']) || isset($_POST['eduAdd'])  || isset($_POST['expAdd']))
       { echo htmlentities(($_POST['email']));   } ?>">
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      
      <div class="input-group input-group-icon">
        <input type="tel" placeholder="Contact" name= "tel" required value="<?php if(isset($_POST['download']) || isset($_POST['refAdd']) || isset($_POST['eduAdd']) || isset($_POST['expAdd']))
       { echo htmlentities(($_POST['tel']));   } ?>">

        <div class="input-icon"><i class="fa fa-phone"></i></div>
      </div>

   </div>
   
<!-- **************End Personal Details**************************-->



<!-- *****************************Residential address************************-->
    <div class="row">
      <div class="col-half">
        <h4 style ="font-size:1.2em;">RESIDENTIAL ADDRESS</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="Street Name" name="street" required value="<?php if(isset($_POST['download']) || isset($_POST['refAdd']) || isset($_POST['eduAdd']) || isset($_POST['expAdd']))
       { echo htmlentities(($_POST['street']));   } ?>">
          </div>
          <div class="col-third">
            <input type="text" placeholder="Town/City" name="town" required value="<?php if(isset($_POST['download'])|| isset($_POST['refAdd'])  || isset($_POST['eduAdd'])  || isset($_POST['expAdd']))
       { echo htmlentities(($_POST['town']));   } ?>">
          </div>
          <div class="col-third">
            <input type="text" placeholder="Code" name="code"  required value="<?php if(isset($_POST['download']) || isset($_POST['eduAdd']) || isset($_POST['refAdd'])  || isset($_POST['expAdd']))
       { echo htmlentities(($_POST['code']));   } ?>">
          </div>
        </div>
      </div>
      <div class="col-half">
        <h4 style ="font-size:1.2em;">GENDER</h4>
        <div class="input-group">
          <input id="gender-male" type="radio" name="gender" value="Male"  required="required"
           <?php 
           //if statement for selected radio button
            
           if (isset($_POST['eduAdd']) && $_POST['gender'] == 'Male')
           { 
             $html ='checked="checked"' ;
            
             echo $html;
                     
           }
           else  if (isset($_POST['expAdd']) && $_POST['gender'] == 'Male')
           
           { 
             $html ='checked="checked"' ;
            
             echo $html;

           }else  if (isset($_POST['refAdd']) && $_POST['gender'] == 'Male')
           
           { 
             $html ='checked="checked"' ;
            
             echo $html;

           }
           ?>
           
           />
          <label for="gender-male">Male</label>
          <input id="gender-female" type="radio" name="gender" value="Female" 

          <?php 
           //if statement for selected radio button

           if (isset($_POST['eduAdd'])  && $_POST['gender'] == 'Female')
           { 
            $html ='checked="checked"' ;
             
            echo $html;

           }else  if (isset($_POST['expAdd']) && $_POST['gender'] == 'Female')
           
           { 
             $html ='checked="checked"' ;
            
             echo $html;

           }else  if (isset($_POST['refAdd']) && $_POST['gender'] == 'Female')
           
           { 
             $html ='checked="checked"' ;
            
             echo $html;

           }
           
           ?>
          />
          <label for="gender-female">Female</label>
        </div>
      </div>
    </div>
    
<!-- ************************************End Residential address & Gender *********************************-->


<!--*********************** Educational Details************************************************************-->
    <div class="row">
      <h4 style ="font-size:1.2em;">EDUCATIONAL BACKGROUND</h4>

      <div class="input-group">
          <div class="col-third">
            <input type="number" placeholder="Number of Qualifications" name="numEduFields"  style = "width:175%;"  value="<?php if(isset($_POST['download'])  || isset($_POST['refAdd']) || isset($_POST['eduAdd']) || isset($_POST['expAdd']))
            { echo htmlentities(($_POST['numEduFields']));   } ?>">
          </div>
          
          &nbsp<button  type ="submit" name="eduAdd" class="btn btn-primary" style = "margin-left:25%;">Add Fields</button>
        
      </div>


       <?php
         
          
            if(isset($_POST['eduAdd']) || isset($_POST['refAdd']) || isset($_POST['expAdd']))
              { 
                $numFields =  $_POST['numEduFields'];

                 
                
                 for ( $x = 1; $x <= $numFields; $x++) 
                 {

                  //declaring variables
                  $institution ='';
                  $qualification ='';
                  $year='';

                  //if statement to store input fields to our declared variables 
                  if(isset($_POST['expAdd'])  || isset($_POST['refAdd'])){

                    $insti = 'institution'.''.$x; // creating a single string value with a number eg institution1
                    $institution=$_POST[$insti];

                    $qua = 'qualification'.''.$x; // creating a single string value with a number eg year1
                    $qualification=$_POST[$qua];

                    $yea = 'year'.''.$x; // creating a single string value with a number eg year1
                    $year=$_POST[$yea];

                  }
                  
                  
                 //if statement to separate high school level and tertiary educational background
                  $html ='';
                  $html ='<div>';
                  if($x == 1)
                  {
                    $html.='<strong style="margin-left:2%;color:skyblue;"> High School Level </strong>';
                  }
                  else
                  {
                    
                    $html.='<strong style="margin-left:2%;color:skyblue;"> Tertary Level Qualification </strong>';
                  }


                  $html .='

                  <div class="input-group input-group-icon">
        
                  <div class="input-group input-group-icon">
                  <input placeholder="Institution" type="text" name="institution'.$x.'" required value ="'.$institution.'">

                    <div class="input-icon"><i class="fa fa-university"></i></div>
                  </div>
           
                  <div class="input-group input-group-icon">
                  <input placeholder="Qualification" type="text" name="qualification'.$x.'" required value ="'.$qualification.'">
                   <div class="input-icon"><i class="fa fa-certificate"></i></div>
                  </div>
           
                   <div class="input-group input-group-icon">
                   <input placeholder="Year" type="text" name="year'.$x.'" required value ="'.$year.'">
                   <div class="input-icon"><i class="fa fa-calendar"></i></div>
                  </div>
                  </div>
                  
                 
                  ';
                  
                 

                  echo $html;
                 
               
                }


              } 

             
            ?>
<!--**********************************end of education details*********************************************-->









<!--**********************************Working experience*********************************************-->  
      <h4 style ="font-size:1.2em;">WORK EXPERIENCE</h4>

      <div class="input-group">
          <div class="col-third">
            <input type="number" placeholder="Number of Work Experiences" name="numExpFields"  style = "width:175%;"  value="<?php if(isset($_POST['download']) || isset($_POST['refAdd']) || isset($_POST['eduAdd']) || isset($_POST['expAdd']))
            { echo htmlentities(($_POST['numExpFields']));   } ?>">
          </div>
          
          &nbsp<button type ="submit" name="expAdd" class="btn btn-primary" style = "margin-left:25%;">Add Fields</button>
            
      </div>
      
      <?php
         
          
         if(isset($_POST['expAdd']) || isset($_POST['refAdd']))
           { 
             $numFields =  $_POST['numExpFields'];

              
             
              for ( $x = 1; $x <= $numFields; $x++) 
              {

               //declaring variables
               $company ='';
               $position='';
               $expYear='';

               //if statement to store input fields to our declared variables 
               if(isset($_POST['download']) || isset($_POST['refAdd']) ){

                 $comp = 'company'.''.$x; // creating a single string value with a number eg company1
                 $company=$_POST[$comp];

                 $posi = 'position'.''.$x; // creating a single string value with a number eg position1
                 $position=$_POST[$posi];

                 $yea = 'expYear'.''.$x; // creating a single string value with a number eg year1
                 $expYear=$_POST[$yea];

               }
               
               
              //if statement to separate high school level and tertiary educational background
               $html ='';
               $html ='<div>';
       
               $html .='

               <strong style="margin-left:2%;color:skyblue;">Work Experience '.$x.'</strong>

               <div class="input-group input-group-icon">
     
               <div class="input-group input-group-icon">
               <input placeholder="Company Name" type="text" name="company'.$x.'" required value ="'.$company.'">

                 <div class="input-icon"><i class="fa fa-building"></i></div>
               </div>
        
               <div class="input-group input-group-icon">
               <input placeholder="Position" type="text" name="position'.$x.'" required value ="'.$position.'">
                <div class="input-icon"><i class="fa fa-black-tie"></i></div>
               </div>
        
                <div class="input-group input-group-icon">
                <input placeholder="Duration" type="text" name="expYear'.$x.'" required value ="'.$expYear.'">
                <div class="input-icon"><i class="fa fa-calendar"></i></div>
               </div>
               </div>
               
              
               ';
               
              

               echo $html;
              
            
             }


           } 

          
         ?>

<!--************************************end  of  working experience section*******************************-->
     





 <!--*********************************************** Reference Section**************************************-->   
    <h4 style ="font-size:1.2em;">REFERENCES</h4>

<div class="input-group">
    <div class="col-third">
      <input type="number" placeholder="Number of References" name="numRefFields"  style = "width:175%;"  value="<?php if(isset($_POST['download']) || isset($_POST['eduAdd']) || isset($_POST['expAdd']) || isset($_POST['refAdd']))
      { echo htmlentities(($_POST['numRefFields']));   } ?>">
    </div>
    
    &nbsp<button type ="submit" name="refAdd" class="btn btn-primary" style = "margin-left:25%;">Add Fields</button>
      
</div>

<?php
   
    
   if(isset($_POST['refAdd'])  || isset($_POST['download']) )
     { 
       $numFields =  $_POST['numRefFields'];

        
       
        for ( $x = 1; $x <= $numFields; $x++) 
        {

         //declaring variables
         $refCompany ='';
         $refPosition='';
         $refContact='';
         $refName='';

         //if statement to store input fields to our declared variables 
         if(isset($_POST['download'])  ){

           $refc = 'refCompany'.''.$x; // creating a single string value with a number eg company1
           $refCompany=$_POST[$refc];

           $refposi = 'refPosition'.''.$x; // creating a single string value with a number eg position1
           $refPosition=$_POST[$refposi];

           $refCon = 'refContact'.''.$x; // creating a single string value with a number eg year1
           $refContact=$_POST[$refCon];

           $refN = 'refName'.''.$x; // creating a single string value with a number eg year1
           $refName=$_POST[$refN];

         }
         
         
        //if statement to separate high school level and tertiary educational background
         $html ='';
         $html ='<div>';
 
         $html .='

         <strong style="margin-left:2%; color:skyblue;">Reference '.$x.'</strong>

         <div class="input-group input-group-icon">

         <div class="input-group input-group-icon">
         <input placeholder="Company Name" type="text" name="refCompany'.$x.'" required value ="'.$refCompany.'">

           <div class="input-icon"><i class="fa fa-building"></i></div>
         </div>
  
         <div class="input-group input-group-icon">
         <input placeholder="Contact Person" type="text" name="refName'.$x.'" required value ="'.$refName.'">
          <div class="input-icon"><i class="fa fa-user"></i></div>
         </div>
  
          <div class="input-group input-group-icon">
          <input placeholder="Position" type="text" name="refPosition'.$x.'" required value ="'.$refPosition.'">
          <div class="input-icon"><i class="fa fa-black-tie"></i></div>
         </div>
         
         <div class="input-group input-group-icon">
          <input placeholder="Contact" type="text" name="refContact'.$x.'" required value ="'.$refContact.'">
          <div class="input-icon"><i class="fa fa-phone"></i></div>
         </div>


         </div>
         
        
         ';
         
        

         echo $html;
        
      
       }


     } 

    
   ?>


</div><!--******************************************* End of References***************************************************************************-->
  
     
</div><!--******************************* row of edu exp and ref*********************-->
 
<br>

<Button  class="btn btn-primary btn-block py-2" type="submit" name="download"><span class="font-weight-bold">Download CV</span></button>
     
</form>

</div>

</body>

</html>