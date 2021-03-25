<?php 
         
 require_once 'header.php';
 require_once '../config.php';
 $status = "";
 //session_start();
 /*                    
 if(!isset($_SESSION['aloggedin'])){
*/
if(isset($_POST['add2'])){     
    $status = '<div class="alert alert-danger ">Please login</div>' ;
 }

?>

<div class="container-fluid">

         
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
   
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><b>Contact</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php"><b>About Us</b></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <b> Categories </b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#bestseller"><b>Best Sellers</b></a>
          <a class="dropdown-item" href="#">Novels</a>
          <a class="dropdown-item" href="#actions">Actions & Adventures</a>
          <a class="dropdown-item" href="#comics">Comics</a>
          <a class="dropdown-item" href="#">Detactive</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
           
</div>       


<h2>Shopping Cart</h2>

<span><?php echo $status;?></span>
<div id = "bestseller"class="row">
           
           <div class="col-lg-3">
           </div>
 
           <div class="col-lg-9">
                 <br><br>
                 <div class="tag">Best Sellers</div>
                 <div class="row">
        <?php

        
        //Cart.php? 
        //<input type="hidden" name="hidden_name" value="<?php echo $row["book_name"]; 
        //<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; 
            $query = "select * from books where category = 'Novel' order by book_id ASC"; 
            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="">

                            <div class="product">
                            
                                <img src="<?php echo $row["img"]; ?>" class="img-responsive" style="width: 100px; height:100px">
                                <h5 class="text-success"><?php echo 'Book id : ' . $row["book_id"]; ?></h5>
                                <h5 class="text-success"><?php echo 'Book Name : ' . $row["book_name"]; ?></h5>
                                <h5 class="text-success"><?php echo 'Book Price : ' . $row["price"]; ?></h5>
                                <!--<input type="text" name="quantity" class="form-control" value="1">-->
                                
                               <input type="submit" name="add1" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                       
                   
                            </div>

                        </form>

                       
                        <?php
                        // if(isset($_POST['add2'])){     
                          //  $status = '<div class="alert alert-danger ">Please login</div>' ;
                        // }
                         ?>

                  
                    </div>
            
                    <?php
                }
                
            }
            
    ?>

</div>
 
 </div>

</div>  

<br><br>

<div id = "actions"class="row">
           
           <div class="col-lg-3">
 
 
           </div>
 
           <div class="col-lg-9">
                 <br><br>
                 <div class="tag">Actions</div>
                 <div class="row">
        <?php
            $query = "select * from books where category = 'Action' order by book_id ASC"; 
            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action=" action=add&id=<?php echo $row["book_id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["img"]; ?>" class="img-responsive" style="width: 100px; height:100px">
                                <h5 class="text-success"><?php echo 'Book id : ' . $row["book_id"]; ?></h5>
                                <h5 class="text-success"><?php echo 'Book Name : ' . $row["book_name"]; ?></h5>
                                <h5 class="text-success"><?php echo 'Book Price : ' . $row["price"]; ?></h5>
                                <!--<input type="text" name="quantity" class="form-control" value="1">-->
                                <input type="hidden" name="hidden_name" value="<?php echo $row["book_name"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                        <?php
                        ?>
                    </div>
                    <?php
                }
            }
        ?>



</div>
<br><br>
 </div>
    
</div>  

<div id = "comics"class="row">
           
           <div class="col-lg-3">
 
 
           </div>
 
           <div class="col-lg-9">
                 <br><br>
                 <div class="tag">Comics</div>
                 <div class="row">
        <?php
            $query = "select * from books where category = 'Comics' order by book_id ASC"; 
            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action=" action=add&id=<?php echo $row["book_id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["img"]; ?>" class="img-responsive" style="width: 100px; height:100px">
                                <h5 class="text-success"><?php echo 'Book id : ' . $row["book_id"]; ?></h5>
                                <h5 class="text-success"><?php echo 'Book Name : ' . $row["book_name"]; ?></h5>
                                <h5 class="text-success"><?php echo 'Book Price : ' . $row["price"]; ?></h5>
                                <!--<input type="text" name="quantity" class="form-control" value="1">-->
                                <input type="hidden" name="hidden_name" value="<?php echo $row["book_name"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>



</div>
 
 </div>

</div>  





<br><br><br><br><br><br>
<?php 
         
 require_once 'footer.php'

?>

