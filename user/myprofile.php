<?php
   require_once 'header1.php';
   require_once '../config.php';


   $data = $_SESSION['user_name'];

   //echo $data;


   $sql = "SELECT * FROM registration where user_name = '$data'";


   $result = mysqli_query($link , $sql);

      
       while($row = mysqli_fetch_array($result)){
           echo ' 
           <div class="row">
           
             <div class="col-lg-3">
             </div>
             <div class="col-lg-6">
             <br><br>

             <table class="table table-striped table-bordered table-hover table-danger text-center">
             <thead>
              <tr>
              <th>My ID</th>
              <td>'.$row['user_id'].'</td>
              </tr>
              <tr>
              <th>My User name</th>
              <td>'.$row['user_name'].'</td>
              </tr>
              <tr>
              <th>My Full Name</th>
              <td>'.$row['name'].'</td>
              </tr>
              <tr>
              <th>Mobile</th>      
              <td>'.$row['user_mobile'].' </td>                   
            </tr>
            </thead>
          
      
          </table>
             
             </div>
           
           </div>';
       }
    
?>






<?php
   require_once 'footer.php';
?>
