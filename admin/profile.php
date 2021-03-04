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
                                                  
         <img class = 'card-img-top' src="images/users.png" alt="card-image"height="200">
                     
           <div class="card-body">
                     
                <h4 class="card-title">Registered Users</h4>
                <a style = "width:100%" class= "btn btn-primary card-link stretched-link" target="_blank" href="registeredUsers.php">View Users</a>
          </div>
                                                    
                                             
      </div>
                     
   </div>
   <div class="col-lg-4 d-block d-lg-flex">
                     
      <div class="card  width: 18rem text-center">
                                                                
           <img  class = 'card-img-top' src="images/books.jpg" alt="card-image"height="200">
                                   
               <div class="card-body">
                                   
                   <h4 class="card-title">Books</h4>
                    <a style = "width:100%" class= "btn btn-primary card-link stretched-link" target="_blank" href="manageBooks.php">Manage Books</a>
               </div>
                                                                                                                    
      </div>
   </div>

   <div class="col-lg-4 d-block d-lg-flex">
                     
      <div class="card  width: 18rem text-center">
                                                                               
          <img style="width: 330px" class = 'card-img-top' src="images/orders-history.png" alt="card-image" height="200" >
                                                  
               <div class="card-body">
                                                  
                   <h4 class="card-title">Orders History</h4>
                   <a style = "width:100%" class= "btn btn-primary card-link stretched-link" target="_blank" href="orders.php">View Orders</a>
              </div>
                                                                                                                                   
        </div>
           
      </div>

   </div>
   </section>

                                             
                             
</div>
<?php
   require_once 'footer.php';
?>
