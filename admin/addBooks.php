<?php
   require_once 'header.php';
   require_once 'checklogin.php';
   require_once '../index.php';

   $bookname_error = $author_error = $price_error = $category_error = $uploadbook_error = "";
   $book_name = $author = $price = $category = $upload_book = $status = "" ;

   if(isset($_POST['submit'])){
 
    if(empty($_POST['book_name'])){
      $bookname_error  = "Please Enter Book Name" ; 
    }else{
      $book_name = check_input($_POST['book_name']);
      $bookname_pattern = '/^[a-zA-Z ]+$/';
        if(!preg_match($bookname_pattern ,  $book_name )){
          $bookname_error  = "Please Enter Valid Book Name" ; 
        }
    }
    if(empty($_POST['author'])){
      $author_error  = "Please Enter The Author" ; 
    }else{
      $author = check_input($_POST['author']);
      $authorname_pattern = '/^[a-zA-Z ]+$/';
        if(!preg_match($authorname_pattern ,  $author)){
          $author_error  = "Please Enter Valid Author Name" ; 
        }
    }
    if(empty($_POST['price'])){
      $price_error  = "Please Enter The Price" ; 
    }else{
      $price = check_input($_POST['price']);
      $price_pattern = '/^[0-9]+$/';
        if(!preg_match($price_pattern ,  $price)){
          $price_error  = "Please Enter Valid Price" ; 
        }
    }
    if(empty($_POST['category'])){
      $category_error  = "Please Enter The Book's Category" ; 
    }else{
      $category= check_input($_POST['category']);
      $category_pattern = '/^[a-zA-Z]+$/';
        if(!preg_match($category_pattern ,  $category)){
          $category_error  = "Please Enter Valid Category" ; 
        }
    }
    if(!isset($_FILES['upload_book'])){
      $uploadbook_error  = "Please Select An Image" ; 
    }else{
       $target = "images/";
       $file_name = $_FILES['upload_book']['name'];
       $file_type = $_FILES['upload_book']['type'];
       $file_size = $_FILES['upload_book']['size'];
       $tmp_name = $_FILES['upload_book']['tmp_name'];

       $valid  = array('jpg' =>'image/jpg' , 'jpeg' =>'image/jpeg' , 'png' =>'image/png');

       if(!in_array($file_type  , $valid )){
        $uploadbook_error  = "Please Select jpg/jpeg/png file" ; 
       }

       $maxsize = 1 * 1024 * 1024 ;
       if($file_size > $maxsize){
        $uploadbook_error = "File size is greater than 1MB" ; 
       }

       if(in_array($file_type  , $valid ) && $file_size < $maxsize && $_FILES['upload_book']['error'] == 0){
      
         $new_name = rand().$file_name;
         $target = $target.$new_name;
         $upload_book = $target;

         move_uploaded_file($tmp_name , $target);


       }else{

        $uploadbook_error = "Some error occured"; 
       }

    }
    
    if(empty($bookname_erro) && empty($author_error) && empty($price_error) && empty($category_error) && empty($uploadbook_error)){
           
      $sql = "INSERT into books values('','$book_name', '$upload_book' , '$author' , '' ,'$price','$category')";

      if(mysqli_query($link , $sql)){
         $status = '<div class="alert alert-success ">Successfully Added Books</div>';
        
      }
      else{

        $status = '<div class="alert alert-danger ">Failed to Added Books</div>';
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


<div class="container-fluid">
	 
     <div class="form-section bg-primary text-white p-3 my-3">

               <div class="title text-center mb-3">
                  <h3 class="font-weight-bolder">Provide all the details to add the book</h3>
                  <span><?php echo $status;?></span>
                </div>
                <br><br>

                    
                        <form method = "post" action="" class="w-50 m-auto " enctype="multipart/form-data">

                          <div class="from-group">

                            <label for="book_name">Book Name</label>
                            <input type="text" class="form-control" name="book_name">
                            <span class="text-danger"> <?php echo $bookname_error;?></span>

                            
                          </div>

                          <div class="from-group">

                            <label for="author">Author</label>
                            <input type="text" class="form-control" name="author">
                            <span class="text-danger"> <?php echo $author_error;?></span>

                            
                          </div>
                          <div class="from-group">

                          <label for="price">Price</label>
                          <input type="text" class="form-control" name="price">
                          <span class="text-danger"> <?php echo $price_error;?></span>


                          </div>

 
                        <div class="from-group">

                        <label for="category">Category</label>
                        <input type="text" class="form-control" name="category">
                        <span class="text-danger"> <?php echo $category_error;?></span>


                        </div>

                        <div class="from-group">

                        <label for="upload_book">Upload Book</label>
                        <input type="file" class="form-control" name="upload_book">
                        <span class="text-danger"> <?php echo $uploadbook_error;?></span>
                        </div>


                          <div class="form-group mt-3">

                          <input type="submit" name= "submit" class= "btn btn-secondary" value="Add Book">
                          <input type="reset"  class= "btn btn-secondary ml-3"  value="reset">

                        
                          </div>

						
                        </form>

						
                        
                        
</div>


<?php

   require_once 'footer.php';
?>
