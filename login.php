<?php
    require('inc/header.php');
    require('inc/nav.php');
?>
<body class="text-center">
    <form class="form-signin" action="verify.php" method="post">   
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label  for="email" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
    <label for="password" class="sr-only">Password</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>


