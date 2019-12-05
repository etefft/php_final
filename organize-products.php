<?php
    require("sessions/session.php");
    require("inc/header.php");
    require("inc/nav.php");
?>

<body class="text-center">

    <h3 class="spacer">Welcome admin, <?php echo $_SESSION['email'];?></h3>

    <?php
    if (isset($_GET['errors'])) {
        $errors = $_GET['errors'];
        echo "<p class='alert-danger'>Please choose the correct file size < 2 MB  and image format</p>";
    } elseif (isset($_GET['success'])) {
        echo "<p>Item Uploaded Successfully</p>";
    }

?>


    <form  class="card card-body bg-light" id="item-upload" action="verify.php" method="post"  enctype="multipart/form-data">
    <label for="image">Item image</label>
        <input  class="card card-body bg-light" type="file" name="image" required>
        <label for="item-name">Item Name</label>
        <input type="text" name="item-name" id="" required>
        <label for="item-cost">Cost</label>
        <input type="text" name="item-cost" id="" required>
        <label for="item-description">Item description</label>
        <input type="text" name="item-description" id="" required>
        <button type="submit">Submit</button>
    </form>
    <?php
        require("inc/products.php");
    ?>

</body>
