<?php 
          require_once 'logincontroller.php';
          require_once 'header.php';
          //require_once 'checklogin.php';

?>
        
       <div class="container">

         <div class="row">
         
            <div class="col-sm-4">
            
            </div>

            <div class="col-sm-4">
              <br><br>

        <!--    <span id ="validationMessage"></span>-->
            <span><?php echo $error;?></span>

            <br><br><br>

            <form  id = "form" method ="post" action="">
            
            <div class="form-group">
            
            <i class="fa fa-envelope"></i><label for="email">&nbsp;&nbsp; Username</label>
            <input type="text" value=""  id ="username" class="form-control" placeholder="Enter Your User Name"  name="username" required>
            <!--<span id="email-e"> </span>-->
            <span class="text-danger"> <?php echo $username_err ;?></span>
          
            </div>

            <div class="form-group">
            
            <i class="fas fa-unlock-alt"></i><label for="password">&nbsp;&nbsp; Password</label>
            <input type="password" id="password" class="form-control" placeholder="Enter Your Password"  name="password" required>
          <!--  <span id="password-p"> </span>-->
          <span class="text-danger"> <?php echo $password_err;?></span>
          
            </div>

            
           
            <br><br>

            <div class="form-group">
            <input type="submit" style = "width:100%"  name="submit" id ="submitbtn" class="form-control btn btn-success" value="Login"> 
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
      

