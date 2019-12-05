 <!-- Page Content -->
 <div class="container">

<div class="row">

  <div class="col-lg-3">

    <h1 class="my-4">Special Sox</h1>
    <!-- <div class="list-group">
      <a href="#" class="list-group-item">Category 1</a>
      <a href="#" class="list-group-item">Category 2</a>
      <a href="#" class="list-group-item">Category 3</a>
    </div> -->
    <?php
        if (isset($_GET['success'])) {
            echo "<p> Your Item was added to the shopping cart</p>";
        }
     ?>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">
    <div class="row" id="products">

        <?php

            $query = "SELECT * FROM product";

            $stmt = $conn->prepare($query);
            $stmt->execute();
            $stmt->bind_result($productID, $productName, $productDescription, $productPrice, $productURL, $productDate);

            while ($stmt->fetch()) {
            ?>

                <div class="col-lg-4 col-md-6 mb-4">
                    <?php if (isset($_SESSION["email"])) {
                        
                    ?>
                        <a href="verify.php?delete=<?php echo $productID?>"><div class="card-header alert-danger">
                            Delete
                        </div>
                        </a>
                        <?php
                    }

                    ?>
                        <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="<?php echo $productURL; ?>" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                            <a href="#"><?php echo $productName; ?></a>
                            </h4>
                            <h5><?php echo $productPrice; ?></h5>
                            <p class="card-text"><?php echo $productDescription; ?></p>
                        </div>

                        <?php if (!isset($_SESSION["email"])) {
                        
                        ?>
                        <a href="verify.php?cartItem=<?php echo $productID ?>"><div id="" class="card-footer">
                            <span class="prod-url" hidden><?php echo $productID?></span>
                            Add to Cart
                        </div></a>
                        <?php
                        }
    
                        ?>
                        
                        </div>
                    </div>

            <?php
            }
            

        ?>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->