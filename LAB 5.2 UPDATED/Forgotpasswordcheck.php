
<?php 
    session_start();

    $email = $_POST['email'];

 
    
    if($email == ""  ) {
        echo "Please enter your email.";
        ?>
        <a href="Forgotpassword.php">Back</a>
        <?php
    }
    else if((substr_count($email,'@')<1) || (substr_count($email,'.com')<1) )
    {        
        echo "Email must contain @ and .com ";
        ?>
        <a href="Forgotpassword.php">Back</a>
        <?php
    }
    else{
        header('location:Login.php');
    }
?>
