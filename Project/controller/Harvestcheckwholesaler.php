
<?php 
    session_start();

    require "../model/dbfunction.php";

    $quantity = $_REQUEST['quantity'];
    $price = $_REQUEST['price'];
    $title = $_REQUEST['title'];
    
    
    if($title == "" || $price == "") {
        echo "Please enter all the details! Incomplete form submitted.";
        ?>
        <a href="../view/Myharvestwholesaler.php">Back</a>
        <?php
    }

    else{
        my_harvest($title, $quantity, $price);
        echo "Your details are stored in database.";
        ?>
        <a href="../view/Wholesalerdashboard.php">Back</a>
        <?php
    }
?>
