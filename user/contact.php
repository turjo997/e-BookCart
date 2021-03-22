<?php
     require_once 'header.php';
     require_once 'contactController.php';
?>
   <div class="container">

<div class="row">

   <div class="col-sm-4">
   
   </div>

   <div class="col-sm-4">
     
   <br><br><br>

   <form  id = "form" method ="post" action="">
   <br>
   <span><?php echo $result;?></span>
        <div class="form-group">
        
        <i class="fa fa-user"></i> <label for="fullname">&nbsp;&nbsp; Full Name</label>
        <input type="text" id = "name" class="form-control" placeholder="Enter Your Full Name"  name="fullname" required>
        </div>

        <div class="form-group">
        
        <i class="fa fa-envelope"></i><label for="email">&nbsp;&nbsp; Email</label>
        <input type="email" value=""  id ="email" class="form-control" placeholder="Enter Your Email"  name="email" required>
        
        </div>

        <div class="from-group">

        <i class="fas fa-envelope-open-text"></i><label for="subject">&nbsp;&nbsp;Subject</label>
        <input type="text" class="form-control" name="subject">


        </div>


      <div class="from-group">
          <br>

      <i class="fas fa-comments"></i><label for="message">&nbsp;&nbsp;Message</label>
        <textarea style = "resize: none;" name="message" class = "form-control" id="" cols="30" rows="6"></textarea>

        </div>

  
   <br><br>

   <div class="form-group">
   <input type="submit" style = "width:100%"  name="submit" class="form-control btn btn-success" value="Add Feedback"> 
   </div>


 </form>
   
   </div>

   <div class="col-sm-4"></div>
    

</div>


</div>



<?php
     require_once 'footer.php';
?>