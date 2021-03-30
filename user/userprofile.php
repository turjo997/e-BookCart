<?php
//$totalcart = 0;
require_once 'header1.php';
require_once '../config.php';


if (isset($_POST["add"])){
    if (isset($_SESSION["cart"])){
        $item_array_id = array_column($_SESSION["cart"],"book_id");
        if (!in_array($_GET["id"],$item_array_id)){
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'product_id' => $_GET["id"],
                 'item_category' => $_POST["hidden_category"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][$count] = $item_array;
            echo '<script>window.location="userprofile.php"</script>';
        }else{
            echo '<script>alert("Product is already Added to Cart")</script>';
            echo '<script>window.location="userprofile.php"</script>';
        }
    }else{
        $item_array = array(
            'product_id' => $_GET["id"],
            'item_category' => $_POST["hidden_category"],
            'item_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])){
    if ($_GET["action"] == "delete"){
        foreach ($_SESSION["cart"] as $keys => $value){
            if ($value["product_id"] == $_GET["id"]){
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Product has been Removed...!")</script>';
                echo '<script>window.location="userprofile.php"</script>';
            }
        }
    }
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
          <a class="dropdown-item" href="#detactive">Detactive</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
           
   



<h2 style="text-align: center;  color: #66afe9; background-color: #efefef;  padding: 2%;">Shopping Cart</h2>
<div id = "bestseller"class="row">
           
           <div class="col-lg-3">
 
 
           </div>

           <div class="col-lg-9">
                 <br><br>
                 <div style="color: white; font-weight: bold;text-align: center; width: 100%;display: inline-table;height: 25%;background-color: #df5887;" class="tag">Best Sellers</div>
                 <br><br>
                 <div class="row">
                  
        <?php
            $query = "select * from books where category = 'Novel' order by book_id ASC"; 
            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="userprofile.php?action=add&id=<?php echo $row["book_id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["img"]; ?>" class="img-responsive" style="width: 100px; height:100px">
                                <h5 class="text-success"><?php echo 'Book id : ' . $row["book_id"]; ?></h5>
                                <h5 class="text-success"><?php echo 'Book Name : ' . $row["book_name"]; ?></h5>
                                <h5 class="text-success"><?php echo 'Book Price : ' . $row["price"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_category" value="<?php echo $row["category"]; ?>">
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

<br><br>


<div style="clear: both"></div>
<br><br><br><br><br>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
              
                <th width="30%">Product Name</th>
                 <th width="30%">Product Category</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    $totalcart = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_category"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td><?php echo $value["product_price"]; ?></td>
                            <td>
                                <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?> TK</td>
                            <td><a href="userprofile.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $totalcart = $totalcart + $value["item_quantity"] ;
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }

                   // $totalcart =  
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right"><?php echo number_format($total, 2); ?> TK</th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>


<div id = "actions"class="row">
           
           <div class="col-lg-3">
 
 
           </div>
 
           <div class="col-lg-9">
                 <br><br>
                 <div style="color: white; font-weight: bold;text-align: center; width: 100%;display: inline-table;height: 25%;background-color: #df5887;"class="tag">Actions</div>
                  <br><br>
                 <div class="row">
        <?php
            $query = "select * from books where category = 'Action' order by book_id ASC"; 
            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="userprofile.php?action=add&id=<?php echo $row["book_id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["img"]; ?>" class="img-responsive" style="width: 100px; height:100px">
                                <h5 class="text-success"><?php echo 'Book id : ' . $row["book_id"]; ?></h5>
                                <h5 class="text-success"><?php echo 'Book Name : ' . $row["book_name"]; ?></h5>
                                <h5 class="text-success"><?php echo 'Book Price : ' . $row["price"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_category" value="<?php echo $row["category"]; ?>">
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

<br><br>
 </div>

</div>  

<div style="clear: both"></div>
<br><br><br><br><br>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                 <th width="30%">Product Category</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    $totalcart = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_category"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td><?php echo $value["product_price"]; ?></td>
                            <td>
                                <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?> TK</td>
                            <td><a href="userprofile.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $totalcart = $totalcart + $value["item_quantity"] ;
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }

                   // $totalcart =  
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right"><?php echo number_format($total, 2); ?> TK</th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>


<div id ="comics"class="row">
           
           <div class="col-lg-3">
 
           </div>
 
           <div class="col-lg-9">
                 <br><br>
                 <div style="color: white; font-weight: bold;text-align: center; width: 100%;display: inline-table;height: 25%;background-color: #df5887;"class="tag">Comics</div>
                  <br><br>
                 <div class="row">
        <?php
            $query = "select * from books where category = 'Comics' order by book_id ASC"; 
            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="userprofile.php? action=add&id=<?php echo $row["book_id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["img"]; ?>" class="img-responsive" style="width: 100px; height:100px">
                                <h5 class="text-success"><?php echo 'Book id : ' . $row["book_id"]; ?></h5>
                                <h5 class="text-success"><?php echo 'Book Name : ' . $row["book_name"]; ?></h5>
                                <h5 class="text-success"><?php echo 'Book Price : ' . $row["price"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_category" value="<?php echo $row["category"]; ?>">
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



<div style="clear: both"></div>
<br><br><br><br><br>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                 <th width="30%">Product Category</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php

          
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    $totalcart = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_category"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td><?php echo $value["product_price"]; ?></td>
                            <td>
                                <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?> TK</td>
                            <td><a href="userprofile.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        //$_SESSION['iteminfo']=array();
                        $_SESSION['item_name'] = $value["item_name"];
                        $_SESSION['item_quantity'] = $value["item_quantity"];
                       // array_push($_SESSION['item_name'],$_SESSION['item_quantity']); 
                        
                        //$_SESSION['name_here'] = $iteminfo;
                         
                         $totalcart = $totalcart + $value["item_quantity"] ;
                         $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }

                   // $totalcart =  
   
                         $_SESSION['total_item'] = $totalcart;
                         $_SESSION['total_cost'] = $total;
                        
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right"><?php echo number_format($total, 2); ?> TK</th>
                            <td></td>
                        </tr>

                        
                        
                        
            
                        <?php
                    }
                ?>
            </table>
        </div>
    
    
    
    <div id ="detactive"class="row">
           
           <div class="col-lg-3">
 
           </div>
 
           <div class="col-lg-9">
                 <br><br>
                 <div style="color: white; font-weight: bold;text-align: center; width: 100%;display: inline-table;height: 25%;background-color: #df5887;"class="tag">Detactive</div>
                  <br><br>
                 <div class="row">
        <?php
            $query = "select * from books where category = 'Detactive' order by book_id ASC"; 
            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="userprofile.php? action=add&id=<?php echo $row["book_id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["img"]; ?>" class="img-responsive" style="width: 100px; height:100px">
                                <h5 class="text-success"><?php echo 'Book id : ' . $row["book_id"]; ?></h5>
                                <h5 class="text-success"><?php echo 'Book Name : ' . $row["book_name"]; ?></h5>
                                <h5 class="text-success"><?php echo 'Book Price : ' . $row["price"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_category" value="<?php echo $row["category"]; ?>">
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



<div style="clear: both"></div>
<br><br><br><br><br>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                 <th width="30%">Product Category</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php

          
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    $totalcart = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_category"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td><?php echo $value["product_price"]; ?></td>
                            <td>
                                <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?> TK</td>
                            <td><a href="userprofile.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        //$_SESSION['iteminfo']=array();
                        $_SESSION['item_name'] = $value["item_name"];
                        $_SESSION['item_quantity'] = $value["item_quantity"];
                       // array_push($_SESSION['item_name'],$_SESSION['item_quantity']); 
                        
                        //$_SESSION['name_here'] = $iteminfo;
                         
                         $totalcart = $totalcart + $value["item_quantity"] ;
                         $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }

                   // $totalcart =  
   
                         $_SESSION['total_item'] = $totalcart;
                         $_SESSION['total_cost'] = $total;
                        
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right"><?php echo number_format($total, 2); ?> TK</th>
                            <td></td>
                        </tr>

                        <?php
                    }
                ?>
            </table>
        </div>

    </div>

  
<?php

   require_once 'footer.php';
?>
 
