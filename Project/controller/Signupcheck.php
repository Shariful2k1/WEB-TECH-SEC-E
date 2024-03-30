
<?php 
    session_start();

    require "../model/dbfunction.php";

    $register_as = $_POST['registeras'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $password = $_POST['password'];
    $new_password = $_POST['newpassword'];
    $DOB = $_POST['DOB'];
    $gender = $_POST['gender'];

    $result1 = verify_username($username);
    $result2 = verify_email($email);
    $result3 = verify_mobile_no($mobile_no);
    
    if($username == "" || $password == "" || $new_password == "" || $email == "" || $DOB == "" || $gender == "" || $register_as == "" ) {
        echo "Please enter all the details! Incomplete form submitted.";
        ?>
        <a href="../view/Signup.php">Back</a>
        <?php
    }
    elseif ($result1 == true) {
        echo "Username already taken please use different username.";
        ?>
        <a href="../view/Signup.php">Back</a>
        <?php
    }
    elseif ($result2 == true) {
        echo " Email already registered please use different email.";
        ?>
        <a href="../view/Signup.php">Back</a>
        <?php
    }
    elseif ($result3 == true) {
        echo " Phone number already registered please use different phone number";
        ?>
        <a href="../view/Signup.php">Back</a>
        <?php
    }
    
    elseif($register_as != "Farmer" && $register_as != "Wholesaler" && $register_as !="Investor"){
        echo"Please register as Farmer/Investor/Wholesaler";
        ?>
        <a href="../view/Signup.php">Back</a>
        <?php
    }
    elseif(strlen($password)<8)
    {
        echo "Password must be at least 8 digit";
        ?>
        <a href="../view/Signup.php">Back</a>
        <?php
    }
    else if((substr_count($password,'@')<1) && (substr_count($password,'#')<1) && (substr_count($password,'$')<1) && (substr_count($password,'%')<1))
    {        
        echo "Password must contain at least one speciail character (@, #, $, %)";
        ?>
        <a href="../view/Signup.php">Back</a>
        <?php
    }
    else if((substr_count($email,'@')<1) || (substr_count($email,'.com')<1) )
    {        
        echo "Email must contain @ and .com ";
        ?>
        <a href="../view/Signup.php">Back</a>
        <?php
    }

    elseif(strlen($mobile_no)<11 || strlen($mobile_no)>11)
    {
        echo "Mobile number must be 11 digit";
        ?>
        <a href="../view/Signup.php">Back</a>
        <?php
    }
    elseif($password!=$new_password){
        echo"Passwords does not match!";
        ?>
        <a href="../view/Signup.php">Back</a>
        <?php
    }
    else{
        signup($register_as, $username, $email, $mobile_no, $password, $DOB, $gender);

        header('location:../view/Login.php');
    }
?>
