<?php
  // require_once 'checklogin.php';
   require_once '../config.php';

   $email_error = $pass_error = $conpass_error = $name_error = $phn_error = "";
   $email = $pass = $confirmpass = $name= $phn = $status = "" ;

   if(isset($_POST['submit'])){

    $pass = $_POST['password'];
    $confirmpass = $_POST['confirmPassword'];

 
    if(empty($_POST['email'])){
      $email_error  = "Please enter your email" ; 
    }else{
      $email = $_POST['email'];
    // $email_pattern = '/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/';
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_error  = "Please Enter Valid Email"; 
        }else{
          $emailquery = "select * from registration where user_name = '$email'";
          $query = mysqli_query($link , $emailquery);
        
          $emailcount = mysqli_num_rows($query);
          if($emailcount > 0 ){
            $email_error = "email already exist";
          }
        }
    }
    if(empty($_POST['password'])){
        $pass_error  = "Please enter the password" ; 
    }else if(strlen($pass)< 5 ){
        $pass_error  = "Your password length must be greater than 5 character" ; 
    }
    
    if(empty($_POST['confirmPassword'])){
        $conpass_error  = "Please enter the confirm password" ; 
    }else{
        if($pass != $confirmpass){
            $conpass_error = "password not matched";
        }
    }


    if(empty($_POST['fullname'])){
      $name_error  = "Please enter your fullname" ; 
    }else{
      $name= $_POST['fullname'];
      $name_pattern = '/^[a-zA-Z ]+$/';
        if(!preg_match($name_pattern ,  $name)){
          $name_error  = "Please enter valid naming" ; 
        }
    }
    if(empty($_POST['cell'])){
        $phn_error  = "Please enter your cell number" ; 
      }else{
        $phn= $_POST['cell'];
        $cell_pattern = '/^([01]|\+88)?\d{11}$/';
          if(!preg_match($cell_pattern ,  $phn)){
            $phn_error  = "Please enter valid phone number" ; 
          }
      }

      if(empty($email_error) && empty($pass_error) && empty($conpass_error) && empty($name_error) && empty($phn_error)){
        // echo 'success';
        /*
        $passHash = password_hash($pass , PASSWORD_BCRYPT);
        $cpassHash = password_hash($confirmpass , PASSWORD_BCRYPT);
   
        $sql = "INSERT INTO  login(user_id , user_name , name , user_password ,user_mobile) values('','$email','$name','$passHash','$phn')";
        if (!$link) {
           die("Connection failed: " . mysqli_connect_error());
            }
            if (mysqli_query($link, $sql)) {
              $status = '<div class="alert alert-success ">Successfully Register</div>';
            } else {
              $status = '<div class="alert alert-danger ">Failed Registration</div>' ; //. $sql . "<br>" . mysqli_error($link);
           }
           mysqli_close($link);   */
   
   
   
        
   
           $sql = "INSERT INTO  registration(user_id , user_name , name , user_password ,user_mobile) values(?,?,?,?,?)";
           //values('$email', '$name1' , '$password' ,'$cell')
     
           $statement = mysqli_prepare($link , $sql);
           mysqli_stmt_bind_param($statement , 'issss' , $param_user_id , $param_user_name, $param_name , $param_user_password  , $param_user_mobile);
           
           $param_id = '';
           $param_user_name = $email ; 
           $param_user_password  = password_hash($pass , PASSWORD_DEFAULT);
           $param_name = $name ;
           $param_user_mobile = $phn; 
     
           //mysqli_close($link);
           if(mysqli_stmt_execute($statement)){
             $status = '<div class="alert alert-success ">Successfully Register</div>';
           }else{
             
             $status = '<div class="alert alert-danger ">Failed Registration</div>' ; 
           }   
           mysqli_close($link);
          

    }

    }

    

  function check_input($data){
    $data =  trim($data);
    $data =  stripcslashes($data);
    $data =  htmlspecialchars($data);      
    return $data;

   }

?>



