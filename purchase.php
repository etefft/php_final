<?php 
  require("inc/header.php");
?>

<body id="page-top">

  <!-- Navigation -->
  <?php
    require("inc/nav.php");
  ?>



<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">THANK YOU FOR SHOPPING!</h1>
        <p>Your total purchase was $<?php echo $_GET['total'] ?></p>
     </div>
</section>


<?php
// require("inc/cart.php");
?>