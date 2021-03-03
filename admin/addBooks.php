<?php
   require_once 'header.php';
   require_once 'checklogin.php';
?>


<div class="container-fluid">
	 
     <div class="form-section bg-primary text-white p-3 my-3">

               <div class="title text-center mb-3">
                  <h3 class="font-weight-bolder">Provide all the details to add the book</h3>
                </div>
                <br><br>

                    
                        <form method = "post" action="" class="w-50 m-auto ">

                        

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
