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
    
    $data .='  
    
    <!DOCTYPE html>
    <html lang="en">
   
    <div style=" text-align:center; padding-top:2%; font-size:2em; text-transform:uppercase; color:grey; ">Curriculum vitae of '.$name.' '.$surname. '</div>
    
    
    <br>
    <div style = "width:100%; background-color:grey; padding-left:1%; padding-top:0.5%; padding-bottom:0.5%">
     <strong style="color:white; ">
     Personal Details
     </strong>
     <br>
    </div>
    <div class="2">
    <table style="width:100%;">
     <tr>
      <th style="text-align:left; width:40%;">Surname</th>
      <th style="text-align:left; width:60%;"> : '.$surname.'</th>
     </tr>

     <tr>
      <th style="text-align:left;">Name</th>
      <th style="text-align:left;"> : '.$name.'</th>
     </tr>

     <tr>
      <th style="text-align:left;">Gender</th>
      <th style="text-align:left;">: '.$gender.'</th>
     </tr>
    
    </table>  
    </div>

    <br>
    <div style = "width:100%; background-color:grey; padding-left:1%; padding-top:0.5%; padding-bottom:0.5%">
     <strong style="color:white;">
     Contact Details
     </strong>
     <br>
    </div>
    <div class="2">
    <br>
    <table style="width:100%;">
     <tr>
      <th style="text-align:left; width:40%;">Residential Address</th>
      <th style="text-align:left; width:60%; "> : '.$street.'</th>
     </tr>

     <tr>
      <th style="text-align:left;"></th>
      <th style="text-align:left; padding-left:1.5%;">  '.$town.'</th>
     </tr>

     <tr>
      <th style="text-align:left;"></th>
      <th style="text-align:left;padding-left:1.5%;"> '.$code.'</th>
     </tr>
    <br>
     <tr>
     <th style="text-align:left;">Contact Number</th>
     <th style="text-align:left;"> : '.$tel.'</th>
    </tr>
    <tr>
     <th style="text-align:left;">Contact Number</th>
     <th style="text-align:left;"> : '.$email.'</th>
    </tr>
    <br>
    </table>
    <br>
    <div style = "width:100%; background-color:grey; padding-left:1%; padding-top:0.5%; padding-bottom:0.5%">
    <strong style="color:white;">
    Educational Background
    </strong>
    <br>
   </div>

    ';

     //education section for pdf document

    $numFields =$_POST['numEduFields'];

    for ( $x = 1; $x <= $numFields; $x++) 
    {
      
      // add higher education html if educational background is greater than 2
      if($x == 2 ){
      $data.='
      
      <div style = "width:100%; background-color:grey; padding-left:1%; padding-top:0.5%; padding-bottom:0.5%">
      <strong style="color:white;">
      Tertiary Education
      </strong>
       <br>
       </div>
      
      ';
      }
 
      //creating a single string value to be used on declared variables 
      $insti = 'institution'.''.$x;
      $qua ='qualification'.''.$x;
      $yea ='year'.''.$x;
  
  
      //insterting input field values into our declared variables
      $institution = $_POST[$insti];
      $qualification = $_POST[$qua];
      $year=$_POST[$yea];


      $data .='
     
      
      <br>
      <table style="width:100%;">
      
      <tr>
        <th style="text-align:left; width:40%;">Institution</th>
        <th style="text-align:left; width:60%; "> : '.$institution.'</th>
       </tr>
  
      <tr>
      <th style="text-align:left; width:40%;">Qualification</th>
      <th style="text-align:left; width:60%; "> : '.$qualification.'</th>
      </tr>
     <br>

      <tr>
      <th style="text-align:left; width:40%;">Year</th>
        <th style="text-align:left; width:60%; "> : '.$year.'</th>
     </tr>
  
     </table> <br>';

    }

   
    
//experience section for pdf document


   $numFields =$_POST['numExpFields'];

   for ( $x = 1; $x <= $numFields; $x++) 
   {
     
     // add higher education html if educational background is greater than 2
     if($x == 1 ){
     $data.='
     
     <div style = "width:100%; background-color:grey; padding-left:1%; padding-top:0.5%; padding-bottom:0.5%">
     <strong style="color:white;">
     Work Experience
     </strong>
      <br>
      </div>
     
     ';
     }

     //creating a single string value to be used on declared variables 
     $comp = 'company'.''.$x;
     $posi ='position'.''.$x;
     $yea ='expYear'.''.$x;
 
 
     //insterting input field values into our declared variables
     $company = $_POST[$comp];
     $position = $_POST[$posi];
     $expYear=$_POST[$yea];


     $data .='
    
     
     <br>
     <table style="width:100%;">
     
     <tr>
       <th style="text-align:left; width:40%;">Company Name</th>
       <th style="text-align:left; width:60%; "> : '.$company.'</th>
      </tr>
 
     <tr>
     <th style="text-align:left; width:40%;">Position</th>
     <th style="text-align:left; width:60%; "> : '.$position.'</th>
     </tr>
    <br>

     <tr>
     <th style="text-align:left; width:40%;">Duration</th>
       <th style="text-align:left; width:60%; "> : '.$expYear.'</th>
    </tr>
 
    </table> <br>';

    }


 //References section for pdf document

   

 $numFields =$_POST['numRefFields'];

 for ( $x = 1; $x <= $numFields; $x++) 
 {
   
   // add higher education html if educational background is greater than 2
   if($x == 1 ){
   $data.='
   
   <div style = "width:100%; background-color:grey; padding-left:1%; padding-top:0.5%; padding-bottom:0.5%">
   <strong style="color:white;">
   References
   </strong>
    <br>
    </div>
   
   ';
   }

   //creating a single string value to be used on declared variables 
   $comp = 'refCompany'.''.$x;
   $posi ='refPosition'.''.$x;
   $refN ='refName'.''.$x;
   $refCon ='refContact'.''.$x;

   //insterting input field values into our declared variables
   $refCompany = $_POST[$comp];
   $refPosition = $_POST[$posi];
   $refName=$_POST[$refN];
   $refContact =$_POST[$refCon];


   $data .='
  
  
   <table style="width:100%;">
   
   <tr>
     <th style="text-align:left; width:40%;">Company Name</th>
     <th style="text-align:left; width:60%; "> : '.$refCompany.'</th>
    </tr>

   <tr>
   <th style="text-align:left; width:40%;">Contact Person</th>
   <th style="text-align:left; width:60%; "> : '.$refName.'</th>
   </tr>
  <br>

   <tr>
   <th style="text-align:left; width:40%;">Position</th>
     <th style="text-align:left; width:60%; "> : '.$refPosition.'</th>
  </tr>
<tr>
  <th style="text-align:left; width:40%;">Contact</th>
  <th style="text-align:left; width:60%; "> : '.$refContact.'</th>
</tr>
  </table> <br>';

  }






    $html .='</div>

    </html>
    ';

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
<form action = "cvStyle1.php" method = "post" >
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