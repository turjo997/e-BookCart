<?php
   require_once '../config.php';
   require_once 'header.php';
   require_once 'checklogin.php';

   $resu = "" ;
   $users = "";
   
   if(isset($_POST['se'])){

    $username = check_input($_POST['username']);
    $sql = "SELECT * FROM registration where user_name = '$username'";


        $result = mysqli_query($link , $sql);

        if(mysqli_num_rows($result)>0){
            
            while($row = mysqli_fetch_array($result)){
                $resu = '<table class="table table-striped table-bordered table-hover table-success text-center">
                   <thead>
                    <tr>
                    <th>User_ID</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Mobile</th>                         
                  </tr>
                  </thead>
                
                <tbody>
                <tr>
                 <td>'.$row['user_id'].'</td>
                 <td>'.$row['user_name'].'</td>
                 <td>'.$row['name'].'</td>
                 <td>'.$row['user_mobile'].' </td>
                </tr>
                </tbody>
             </table>';

            }

        }else{
      
            $resu = '<div class="alert alert-danger ">No record found</div>';
        }
   }

   if(isset($_POST['vl'])){

    $sql = "SELECT * FROM registration";
    $result = mysqli_query($link , $sql);
    $users = mysqli_num_rows($result);
      
    if(mysqli_num_rows($result)>0){

      $resu .= '
      <h4 class = "bg-success">Total Users: '.$users.'</h4>
      <table class="table table-striped table-bordered table-hover table-success text-center">
      <thead>
       <tr>
       <th>User_ID</th>
       <th>Username</th>
       <th>Name</th>
       <th>Mobile</th>                         
     </tr>
     </thead>';
            
      while($row = mysqli_fetch_array($result)){
          $resu .= '<tbody>
          <tr>
           <td>'.$row['user_id'].'</td>
           <td>'.$row['user_name'].'</td>
           <td>'.$row['name'].'</td>
           <td>'.$row['user_mobile'].' </td>
          </tr>
          </tbody>';
      }
      $resu .= '</table>';

  }
  else{    
    $resu = '<div class="alert alert-danger ">No record found</div>';
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
    <input class="form-control mr-sm-2" type="text" name="username" placeholder="Enter Username" aria-label="Search">
    <input class="btn btn-outline-success my-2 my-sm-0" name="se" type="submit" value="Search"> &nbsp; &nbsp;
    <button class="btn btn-outline-success my-2 my-sm-0" name="vl" type="submit">View All</button>
   </form>

   <br><br>

   <?php echo $resu; ?>


    </div>



  </div>



</div>

<?php
   require_once 'footer.php';
?>
