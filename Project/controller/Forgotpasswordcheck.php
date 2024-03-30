<?php 
    session_start();
    
    require "../model/dbfunction.php";
    
    $username = $_POST['username'];
    $newpassword = $_POST['newpassword'];
    $retypepassword = $_POST['retypepassword'];
    
    if($username == "" || $newpassword == "" || $retypepassword=="" ) {
        echo "Field cannot be empty ";
        ?>
        <a href="../view/Forgotpassword.php">Back</a>
        <?php
    }
    else{
        $result = verify_username($username);

        if ($result == false) {
            echo " No user found with this name. Please enter username correctly.";
            ?>
            <a href="../view/Forgotpassword.php">Back</a>
            <?php
        } else {
            if(strlen($newpassword)<8) {
                echo "New password must be at least 8 digit";
                ?>
                <a href="../view/Forgotpassword.php">Back</a>
                <?php
            } else if((substr_count($newpassword,'@')<1) && (substr_count($newpassword,'#')<1) && (substr_count($newpassword,'$')<1) && (substr_count($newpassword,'%')<1)) {        
                echo "Your new password must contain at least one speciail character (@, #, $, %)";
                ?>
                <a href="../view/Forgotpassword.php">Back</a>
                <?php
            } elseif($newpassword !=  $retypepassword ) {
                echo " Your passwords do not match  ";
                ?>
                <a href="../view/Forgotpassword.php">Back</a>
                <?php
            } else {
                update_pass($username, $newpassword);

                echo "Your new password have been updated. ";
                ?>
                <a href="../view/Login.php">Back</a>
                <?php
            }
    }
    }
?>
