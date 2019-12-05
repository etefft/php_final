<?php
require("sessions/session.php");
require("dbconnect.php");


// $email = $passwordInput = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'])) {
        $email = test_input($_POST["email"]);
        $passwordInput = test_input($_POST["password"]);

        $query = "SELECT email_address, password FROM user WHERE email_address = ?";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($emailDB, $passwordDB);
        $stmt->fetch();

        if (password_verify($passwordInput, $passwordDB)) {
            
            $_SESSION["email"] = $emailDB;

            header("Location: organize-products.php"); 

        }
    } elseif (isset($_POST['logout'])) {
        session_destroy();
        header("Location: organize-products.php");
    } elseif (isset($_FILES)) {
        $errors = "";
        if (empty($_FILES)) {
            $errors = "no-image";
            header("Location: organize-products.php?errors=$errors");
        } else {
            
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $file_ext_tmp=explode('.', strtolower($_FILES['image']['name']));
            $file_ext = end($file_ext_tmp);
            $extensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext, $extensions)=== false){
               $errors = true;
            }
            
            if($file_size > 2097152) {
               $errors = true;
            }
            
            if(empty($errors)==true) {
                $filePath = "images/".$file_name;
                move_uploaded_file($file_tmp,$filePath);
                $prodName = $_POST['item-name'];
                $prodCost = $_POST['item-cost'];
                $prodDescription = $_POST['item-description'];

                $query = "INSERT INTO product (product_name, product_description, product_price, image_url) VALUES ('$prodName', '$prodDescription', '$prodCost', '$filePath')";
                echo $query;
                $stmt = $conn->prepare($query);
                $stmt->execute();
                header("Location: organize-products.php?success=true"); 
            }else{
               header("Location: organize-products.php?errors=$errors");
            }
        }
          
    }
  


} elseif (isset($_GET["delete"])) {
    $query = "DELETE FROM product WHERE product_ID = ?";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $_GET["delete"]);
    $stmt->execute();

    header("Location: organize-products.php");
} elseif (isset($_GET["cartItem"])) {
    if (empty($_SESSION["cart"])) {
        $_SESSION["cart"] = [];
    }
    array_push($_SESSION["cart"], $_GET["cartItem"]);
    header("Location: products.php?success=true"); 
} elseif (isset($_GET["deleteItem"])) {
    $key = array_search( $_GET["deleteItem"], $_SESSION["cart"]);
    unset($_SESSION["cart"][$key]);
    header("Location: shopping-cart.php");
} elseif (isset($_GET["checkout"])) {
    $_SESSION["cart"] = [];
    $total = $_GET["checkout"];
    header("Location: purchase.php?total=$total");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>