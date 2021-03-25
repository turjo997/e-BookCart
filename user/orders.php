<?php

require_once 'header1.php';
require_once '../config.php';


//$data = $_SESSION['total_cost'];

//$data1 =  $_SESSION['total_item'] ;


//$data2 = $_SESSION['item_name'] ;

//$data3 = $_SESSION['item_quantity'];


//echo $data.' '. ' ';
//echo $data1.' '.' '; 


?>


<div style="clear: both"></div>

        <h3 class="title2">Your Order Details</h3>

        <div class="row">
         <div class="col-lg-3"></div>

         <div class="col-lg-6">
         <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
            </tr>

            <?php

          
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    $totalcart = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["product_price"]; ?></td>
                            <td>
                          
                         <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                           

                    </tr>
                        <?php
                     
                         $totalcart = $totalcart + $value["item_quantity"] ;
                         $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }

             
   
                         $_SESSION['total_item'] = $totalcart;
                         $_SESSION['total_cost'] = $total;
                        
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>

                        
                        
                
                        <?php
                    }
                ?>
            </table>
        </div>



         </div>


        </div>
    
  





<?php
        require_once 'footer.php';
?>
