<?php 
    session_start();

    require "../model/dbfunction.php";
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username == "" || $password == "" ) {
        echo "Please enter all the details! Incomplete form submitted.";
        ?>
        <a href="../view/Login.php">Back</a>
        <?php
    } 
    else {
        $value = login($username);

        if(is_array($value)) {
            $dbpass = $value[0];
            $dbreg = $value[1];
        }

        if($value == "") {
            echo "Please enter correct username. ";
            ?>
                <a href="../view/Login.php">Back</a>
            <?php
        } elseif($password != $dbpass) {
            echo "Please enter correct password. ";
            ?>
            <a href="../view/Login.php">Back</a>
            <?php
        } else {
            setcookie('username', $username, time()+3600, '/');
            setcookie('password', $password, time()+3600, '/');
            $_SESSION['user'] = $username;

            if ($dbreg=="Farmer") {
                header('location:../view/Farmerdashboard.php');  
            } else if ($dbreg=="Investor") {
                header('location:../view/Investordashboard.php');  
            } else if ($dbreg=="Wholesaler") {
                header('location:../view/Wholesalerdashboard.php');  
            }
        }
    }
?>