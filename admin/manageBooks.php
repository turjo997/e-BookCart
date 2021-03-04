<?php
   require_once 'header.php';
   require_once 'checklogin.php';
?>

<div class="container">

<div class="div1 bg-success p-4 p-lg-3 m-2 m-lg-4">
    <h3 class="text-black text-center">Welcome to the Admin Panel Arena !</h3>           
</div>


<section>
<div class="row">
                                      
    <div class="col-lg-4 d-block d-lg-flex">
                     
       <div class="card  width: 18rem  text-center">
                                                  
         <img style="width: 310px"  class = 'card-img-top' src="images/addbooks.jpg" alt="card-image"height="200">
                     
           <div class="card-body">
                    
                <a style = "width:100%" class= "btn btn-success card-link stretched-link" target="_blank" href="addBooks.php">Add Books</a>
          </div>
                                                    
                                             
      </div>
                     
   </div>
   <div class="col-lg-4 d-block d-lg-flex">
                     
      <div class="card  width: 18rem text-center">
                                                                
           <img style="width: 310px"  class = 'card-img-top' src="images/viewbooks.png" alt="card-image"height="200">
                                   
               <div class="card-body">
                                   
                  
                    <a style = "width:100%" class= "btn btn-success  card-link stretched-link" target="_blank" href="viewbooks.php">View Books</a>
               </div>
                                                                                                                    
      </div>
   </div>

   <div class="col-lg-4 d-block d-lg-flex">
                     
      <div class="card  width: 18rem text-center">
                                                                               
          <img style="width: 310px" class = 'card-img-top' src="images/removebooks.png" alt="card-image" height="200" >
                                                  
               <div class="card-body">
                   <a style = "width:100%" class= "btn btn-success  card-link stretched-link" target="_blank" href="removebooks.php">Remove Books</a>
              </div>
                                                                                                                                   
        </div>
           
      </div>

   </div>
   </section>

                                             
                             
</div>


<?php
   require_once 'footer.php';
?>
