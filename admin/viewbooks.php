<?php
   require_once '../config.php';
   require_once 'header.php';
   require_once 'checklogin.php';
   //require_once 'functions.php';

   $resu = "" ;
   $books = "";
   
   if(isset($_POST['se'])){

    $bookId = check_input($_POST['Book_Id']);
    $sql = "SELECT * FROM books where book_id = '$bookId'";


        $result = mysqli_query($link , $sql);

        if(mysqli_num_rows($result)>0){
            
            while($row = mysqli_fetch_array($result)){
                $resu = '<table class="table table-striped table-bordered table-hover table-success text-center">
                   <thead>
                    <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Price</th>       
                    <th>Category</th>   
                    <th>Image</th>                
                  </tr>
                  </thead>
                
                <tbody>
                <tr>
                 <td>'.$row['book_id'].'</td>
                 <td>'.$row['book_name'].'</td>
                 <td>'.$row['author'].'</td>
                 <td>'.$row['price'].' </td>
                 <td>'.$row['category'].' </td>
                 <td><img src = "'.$row["img"].'" height="100" width="100"></td>
                </tr>
                </tbody>
             </table>';

            }

        }else{
      
            $resu = '<div class="alert alert-danger ">No record found</div>';
        }
      }

      if(isset($_POST['vl'])){
   
       $sql = "SELECT * FROM books";
       $result = mysqli_query($link , $sql);
       $books = mysqli_num_rows($result);
         
       if(mysqli_num_rows($result)>0){
   
         $resu .= '
         <h4 class = "bg-success">Total Books: '.$books.'</h4>
         <table class="table table-striped table-bordered table-hover table-success text-center">
         <thead>
          <tr>
          <th>Book ID</th>
          <th>Book Name</th>
          <th>Author</th>
          <th>Price</th>       
          <th>Category</th>   
          <th>Image</th>                         
        </tr>
        </thead>';
               
         while($row = mysqli_fetch_array($result)){
             $resu .= '<tbody>
             <tr>
              <td>'.$row['book_id'].'</td>
              <td>'.$row['book_name'].'</td>
              <td>'.$row['author'].'</td>
              <td>'.$row['price'].' </td>
              <td>'.$row['category'].'</td>
              <td><img src = "'.$row["img"].'" height="100" width="100"></td>
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
  <input class="form-control mr-sm-2" type="text" name="Book_Id" placeholder="Enter Book Id" aria-label="Search">
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
