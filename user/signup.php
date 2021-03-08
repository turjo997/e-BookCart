<!DOCTYPE html>

<html lang="en">
     <head>
	 
	        <title>SignUp</title>
			
			<link rel = "stylesheet" href="userStyle.css"/>	

            
     <!--font awsome-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>

     <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">
      <!---bootstrapt cdn--->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">	

 

				<style>
	
	            </style>
			      <meta charset = "UTF-8">
            <meta name="viewport" content="width = device-width , initial-scale = 1.0">
            <meta http-equiv="X-UA-compatible" >



       
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>		
	 </head>
   
	 
	 <body>


  <div class="container-fluid">

     <nav class="navbar navbar-expand-md">
                   
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                     <span><i class="fas fa-bars navbar-icon"></i></span>
                   </button>

                   <a class="navbar-brand" href="profile.php">
                         <img src="images/bookLogo.png" alt="logo">
                  
                   </a>


                   <div class="collapse navbar-collapse"  id="navbarNavDropdown">
                     <ul class="navbar-nav ml-auto">

                     <?php
              
                     
                          echo'
                          <li class="nav-item active">
                          <a class="nav-link text-center text-md-left" href="login.php">Login</a>
                          </li>
                         
                          <li class="nav-item active">
                          <a class="nav-link text-center text-md-left" href="signup.php">Signup</a>
                          </li>' ;
                            
                     ?>
                           
                     </ul>
                   </div>
                 </nav>
                
    </div>       


       <div class="container">

         <div class="row">
         
            <div class="col-sm-4">
            
            </div>

            <div class="col-sm-4">

            <br><br><br>

            <form  id = "form" class = "" method = "post" action="">
            
            <div class="form-group">
            
            <i class="fa fa-envelope"></i><label for="email">&nbsp;&nbsp; Email</label>
            <input type="email" value=""  id ="email" class="form-control" placeholder="Enter Your Email"  name="email" required>
            <span id="email-e"> </span>
          
            </div>

            <div class="form-group">
            
            <i class="fas fa-unlock-alt"></i><label for="password">&nbsp;&nbsp; Password</label>
            <input type="password" id="password" class="form-control" placeholder="Enter Your Password"  name="password" required>
            <span id="password-p"> </span>
          
            </div>

            <div class="form-group">
            
            <i class="fas fa-key"></i> <label for="confirmPassword">&nbsp;&nbsp; Confirm Password</label>
            <input type="password" id="confirmPass" class="form-control" placeholder="Confirm Your Password"  name="confirmPassword" required>
            <span id="cpassword-p"> </span>
          
            </div>

            <div class="form-group">
            
            <i class="fa fa-user"></i> <label for="fullname">&nbsp;&nbsp; Full Name</label>
            <input type="text" id = "name" class="form-control" placeholder="Enter Your Full Name"  name="fullname" required>
            <span id="fullname-nm"> </span>
          
            </div>

            <div class="form-group">
            
            <i class="fas fa-mobile-alt"></i><label for="cell">&nbsp;&nbsp; Cell</label>
            <input type="text" id="cell" class="form-control" placeholder="Enter Your Cell Number"  name="cell" required>
            <span id="cell-cl"> </span>
          
            </div>
            <div class="form-group">
            <br><br>

            <div class="form-group">
            <input type="submit" style = "width:100%"  name="submit" id = "submit" class="form-control btn btn-success" value="let me join"> 

            </div>

          </form>
            
            </div>

            <div class="col-sm-4"></div>
             
         
         </div>
       
    
        </div>

        <?php
        require_once 'footer.php';
        ?>

         <script src="validation.js"></script>
      



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
			

	 </body>



</html> 