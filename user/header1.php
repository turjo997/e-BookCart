<?php

  session_start();

?>
<!DOCTYPE html>

<html lang="en">
     <head>
	 
	        <title>User</title>
	        <link rel = "shortcut icon" type="image" href="images/bookLogo.png"/>	
			
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


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	-->	

  <!--
       <script src = "jquery1.js"></script>
       <script src = "jquery.js"></script>
      

  -->

	 </head>
   
	 
	 <body>

  


  <div class="container-fluid">

     <nav class="navbar navbar-expand-md">
                   
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                     <span><i class="fas fa-bars navbar-icon"></i></span>
                   </button>

                   <a class="navbar-brand" href="userprofile.php">
                         <img src="images/bookLogo.png" alt="logo">
                  
                   </a>


                   <div class="collapse navbar-collapse"  id="navbarNavDropdown">
                     <ul class="navbar-nav ml-auto">

                  

                   <?php

            
                  //  if(!isset($_SESSION['loggedin'])){
                      echo '<a class="nav-link" href="orders.php"><b>Bag<i class="fas fa-shopping-cart"></i><span class="badge badge-warning" style="border-radius:50%; height:30px;"></span></a></b>
                      
                      
                      <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Account
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="myprofile.php"><i class="fas fa-user"></i>  <b>My Profile</a>
                        <a class="dropdown-item" href="changepass.php"><i class="fas fa-key"></i>  <b>Change Password</a>
                        <a class="dropdown-item" href="orders.php"><i class="fas fa-cube"></i>  <b>Orders</a>
                        <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i>  <b>Logout</a>
                      </div>
                    </li>
                      
                      
                      
                      ';
                   
                     ?>

 
                     </ul>
                   </div>
                 </nav>
                
    </div>       




         <!--<script src="validation.js"></script>-->
      



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
			

	 </body>



</html> 
