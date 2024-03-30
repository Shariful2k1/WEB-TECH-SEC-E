
<?php 
    session_start();

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];

 
    
    if($username == "" || $name == "" || $password == "" || $newpassword == "" || $email == "" || $date == "" || $month == "" || $year == "" ) {
        echo "Please enter all the details! Incomplete form submitted.";
        ?>
        <a href="Signup.php">Back</a>
        <?php
    }
    elseif(strlen($password)<8)
    {
        echo "Password must be at least 8 digit";
        ?>
        <a href="Signup.php">Back</a>
        <?php
    }
    else if((substr_count($password,'@')<1) && (substr_count($password,'#')<1) && (substr_count($password,'$')<1) && (substr_count($password,'%')<1))
    {        
        echo "Password must contain at least one speciail character (@, #, $, %)";
        ?>
        <a href="Signup.php">Back</a>
        <?php
    }
    else if((substr_count($email,'@')<1) || (substr_count($email,'.com')<1) )
    {        
        echo "Email must contain @ and .com ";
        ?>
        <a href="Signup.php">Back</a>
        <?php
    }

    elseif($password!=$newpassword){
        echo"Passwords does not match!";
        ?>
        <a href="Signup.php">Back</a>
        <?php
    }
    else{
        header('location:Login.php');
    }
?>
