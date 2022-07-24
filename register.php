<!DOCTYPE html>
<html lang="en">
 
<head>
 
    <meta charset="UTF-8">
    <link  rel="stylesheet" type= "text/css" href="cs/login.css">	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="cs/bootstrap.min.css"  rel="stylesheet">
    <link href ="cs/font-awesome.css"  rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="js/bootstrap.bundle.min.js"></script>  
    <script src="cs/jq.js"></script> 
    
</head>
  
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" style = "margin-top:0%;padding-top:0%;">
            <a href="login.php"><h3 style = "margin-top:2%;">login</h3></a>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Name">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Surname">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Email">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Contact">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password">
				</div>
               
				<button class="button login__submit">
					<span class="button__text">Create Account</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>		
                
                
			</form>
			
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>

</html>