<?php
   require_once '../config.php';
   require_once 'header.php';
   require_once 'checklogin.php';
   require_once 'functions.php';

   $status = "";

   if(isset($_POST['dlt'])){

   
      $bookId = check_input($_POST['Book_Id']);
      $sql = "DELETE FROM books where book_id = '$bookId'";
      //$result = mysqli_query($link , $sql);

      if(mysqli_query($link , $sql)){
         $status = '<div class="alert alert-success ">Deleted Successfully</div>';
      }else{
         $status = '<div class="alert alert-danger ">Try Again</div>';

      }

   }

    
   function check_input($data){
   
      $data =  trim($data);
      $data =  stripcslashes($data);
      $data =  htmlspecialchars($data);    
  
      return $data;
  
  
     }

?>
<div class="container">

<br><br>
<div class="row">

  <div class="col-lg-2"> 
  </div>

  <div class="col-lg-10">
  <form class="form-inline" method="post">
  <input class="form-control mr-sm-2" type="text" name="Book_Id" placeholder="Enter Book Id" aria-label="Search">&nbsp; &nbsp;
  <button class="btn btn-outline-success my-2 my-sm-0" name = "dlt" type="submit">Delete</button> 
  
 </form>

     <br><br>

      <?php echo $status; ?>


  </div>



</div>



</div>
<?php
   require_once 'footer.php';
?>
