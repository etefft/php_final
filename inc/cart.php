<?php
  session_start();

  $cartCount = array_count_values($_SESSION["cart"]);
  $cartRemove = array_unique($_SESSION["cart"]);
  $total =[];
?>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($stmt->fetch()) {
                        foreach ($cartCount as $key => $value) {
                            if ($productID === $key) {
                               $tempAmt = str_replace("$", "", $productPrice);
                               intval($tempAmt);
                               $tempAmt = $tempAmt * $value;
                               array_push($total, $tempAmt)
                            //    $total += $tempAmt;
                            
                    
?>
                        <tr>
                            <td><img id="cart-img" src="<?php echo $productURL?>"/> </td>
                            <td><?php echo $productName?></td>
                            <td>In stock</td>
                            <td class="text-center"><?php echo $value ?></td>
                            <td class="text-right"><?php echo $productPrice ?></td>
                            <td class="text-right"><a href="verify.php?deleteItem=<?php echo $productID?>"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button></a> </td>
                        </tr>
                    <?php
            }
        }
    }
                    ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong><?php echo "$" . array_sum($total); ?></strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="products.php"><button class="btn btn-block btn-light">Continue Shopping</button></a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href="verify.php?checkout=<?php echo array_sum($total)?>"><button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button></a>
                </div>
            </div>
        </div>
    </div>
</div>