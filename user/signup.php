<?php 
          require_once 'signupcontroller.php';
          require_once 'header.php'

?>
        
       <div class="container">

         <div class="row">
         
            <div class="col-sm-4">
            
            </div>

            <div class="col-sm-4">
              <br><br>

        <!--    <span id ="validationMessage"></span>-->
            <span><?php echo $status;?></span>

            <br><br><br>

            <form  id = "form" method ="post" action="">
            
            <div class="form-group">
            
            <i class="fa fa-envelope"></i><label for="email">&nbsp;&nbsp; Email</label>
            <input type="email" value=""  id ="email" class="form-control" placeholder="Enter Your Email"  name="email" required>
            <!--<span id="email-e"> </span>-->
            <span class="text-danger"> <?php echo $email_error;?></span>
          
            </div>

            <div class="form-group">
            
            <i class="fas fa-unlock-alt"></i><label for="password">&nbsp;&nbsp; Password</label>
            <input type="password" id="password" class="form-control" placeholder="Enter Your Password"  name="password" required>
          <!--  <span id="password-p"> </span>-->
          <span class="text-danger"> <?php echo $pass_error;?></span>
          
            </div>

            <div class="form-group">
            
            <i class="fas fa-key"></i> <label for="confirmPassword">&nbsp;&nbsp; Confirm Password</label>
            <input type="password" id="confirmPass" class="form-control" placeholder="Confirm Your Password"  name="confirmPassword" required>
            <!--<span id="cpassword-p"> </span>-->
            <span class="text-danger"> <?php echo $conpass_error;?></span>
          
            </div>

            <div class="form-group">
            
            <i class="fa fa-user"></i> <label for="fullname">&nbsp;&nbsp; Full Name</label>
            <input type="text" id = "name" class="form-control" placeholder="Enter Your Full Name"  name="fullname" required>
            <!--<span id="fullname-nm"> </span>-->
            <span class="text-danger"> <?php echo $name_error;?></span>
          
            </div>

            <div class="form-group">
            
            <i class="fas fa-mobile-alt"></i><label for="cell">&nbsp;&nbsp; Cell</label>
            <input type="text" id="cell" class="form-control" placeholder="Enter Your Cell Number"  name="cell" required>
            <!--<span id="cell-cl"></span>-->
            <span class="text-danger"> <?php echo $phn_error;?></span>

           
          
            </div>

           
            <br><br>

            <div class="form-group">
            <input type="submit" style = "width:100%"  name="submit" id ="submitbtn" class="form-control btn btn-success" value="let me join"> 
            </div>
         

          </form>
            
            </div>

            <div class="col-sm-4"></div>
             
         
         </div>
       
    
        </div>

        <?php
        require_once 'footer.php';
        ?>

         

         <!--<script src="validation.js"></script>-->
      

