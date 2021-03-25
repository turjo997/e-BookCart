<?php
   require_once '../config.php';
   
   $username = $password ="";
   $username_err = $password_err = $error ="";

   $verifypass ="";
   
   if(isset($_POST['submit'])){
     
      if(empty($_POST['username'])){
        $username_err  = "Please Enter Username" ; 
      }else{
       // $username = check_input($_POST['username']);
        $username = mysqli_real_escape_string($link , $_POST['username']);
      }

      if(empty($_POST['password'])){
        $password_err  = "Please Enter Password" ; 
      }else{
        $password= mysqli_real_escape_string($link , $_POST['password']);
        //$password= check_input($_POST['password']);
      }

      //echo $password . $username; 

      if(empty($username_err) && empty($password_err)){
        //user_password = '$password'
        $sql = "SELECT * FROM registration where user_name = '$username'";

        $result = mysqli_query($link , $sql);
       // $verifypass = "pass asf";
         $res = mysqli_num_rows($result) ; 
       // echo $res ; 
        if(mysqli_num_rows($result)>0){

            while($row = mysqli_fetch_array($result)){

                $verifypass = password_verify($password , $row['user_password']);

               // echo $row['user_password'];
             if(password_verify($password , $row['user_password'])){
               
                  session_start(); 
                $_SESSION['loggedin'] = true;
               // $_SESSION['user_name'] = $row['user_id'];
                $_SESSION['user_name'] = $username;
                header('location: userprofile.php');
             }
             else{

                $error = "Invalid login credentials";
            }

            }

          // session_start();
            
        }
        else{
             
          $error = "Invalid login credentials";

        }

      }

      

   }


   function check_input($data){

    $data =  trim($data);
    $data =  stripcslashes($data);
    $data =  htmlspecialchars($data);    

    return $data;


   }
?>
