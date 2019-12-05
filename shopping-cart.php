<?php 
  require("inc/header.php");
  require("dbconnect.php");

  
  $query = "SELECT * FROM product";

  $stmt = $conn->prepare($query);
  $stmt->execute();
  $stmt->bind_result($productID, $productName, $productDescription, $productPrice, $productURL, $productDate);
?>

<body id="page-top">

  <!-- Navigation -->
  <?php
    require("inc/nav.php");
  ?>



<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">SHOPPING CART</h1>
     </div>
</section>


<?php
require("inc/cart.php");
?>