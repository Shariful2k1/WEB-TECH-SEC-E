
<?php 
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

 
    
    if($username == "" || $password == ""  ) {
        echo "Please enter all the details! Incomplete form submitted.";
        ?>
        <a href="Login.php">Back</a>
        <?php
    }
    elseif(strlen($password)<8)
    {
        echo "Password must be at least 8 digit";
        ?>
        <a href="Login.php">Back</a>
        <?php
    }
    else if((substr_count($password,'@')<1) && (substr_count($password,'#')<1) && (substr_count($password,'$')<1) && (substr_count($password,'%')<1))
    {        
        echo "Password must contain at least one speciail character (@, #, $, %)";
        ?>
        <a href="Login.php">Back</a>
        <?php
    }
    else{
        header('location:Dashboard.php');
    }
?>
