<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href=<?php echo APP_ROOT . "/index.php" ?>>Special Sox</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href=<?php echo APP_ROOT . "/products.php"?>>Products</a>
          </li>
          <li class="nav-item">
            <a id="shopping" class="nav-link js-scroll-trigger" href=<?php echo APP_ROOT . "/shopping-cart"?>>Shopping Cart</a>
          </li>
          <?php
            if (isset($_SESSION['email'])) {
          ?>
  <form action="verify.php" method="post">
        <input type="hidden" name="logout">
        <button type="submit">Logout</button>
    </form>
          <?php
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>