<?php
require(realpath( dirname( __FILE__ ) ) . '\..\config.php' );
require(realpath( dirname( __FILE__ ) ) ."\..\dbconnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);

  $query = "SELECT username, password FROM user WHERE username =?";
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>