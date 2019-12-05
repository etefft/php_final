<?php

       //Live connection 
// $servername = "etefft.ceiwd.com";
// $username = "etefftceiwd";
// $password = "bpapassword";
//Localhost connection
$servername = "localhost";
$dbusername = "root";
$password = "";
//DB name
$dbname = "shop"; 
$conn = new mysqli($servername, $dbusername, $password, $dbname);

?>