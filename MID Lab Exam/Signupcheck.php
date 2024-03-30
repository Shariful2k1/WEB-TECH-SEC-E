
<?php 
    session_start();
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $new_password = $_POST['newpassword'];
    $name=$_POST['name'];   
    $words = explode(" ", $name);
    $firstChar = substr($firstname, 0, 1);
    $firstChars = substr($name, 0, 1);
    $firstCharss = substr($lastname, 0, 1);
    
    if($firstname == "" || $lastname == "" || $name == "" || $month == "" || $day == "" || $year == "" || $mobile_no == "" || $password == "" || $new_password == "" || $email == "") {
        echo "Please enter all the details! Incomplete form submitted.";
        ?>
        <a href="Signup.php">Back</a>
        <?php
    }
        elseif (!ctype_alpha($firstChar)) {
            echo "First Name must start with a letter.";
        }
        elseif (!ctype_alpha($firstCharss)) {
            echo "Last Name must start with a letter.";
        }
        else if (count($words) < 2) {
            echo "Name must be 2 words.";
        }
        elseif (!ctype_alpha($firstChars)) {
            echo "Name must start with a letter.";
        }
        else if((substr_count($email,'@')<1) || (substr_count($email,'.com')<1) )
        {        
            echo "Email must contain @ and .com ";
            ?>
            <a href="Signup.php">Back</a>
            <?php
        }
        else if($gender == "" )
        {        
            echo "Please select at least one of the option ";
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

        elseif(strlen($mobile_no)<11 || strlen($mobile_no)>11)
        {
            echo "Mobile number must be 11 digit";
            ?>
            <a href="Signup.php">Back</a>
            <?php
        }
        elseif($password!=$new_password){
            echo"Passwords does not match!";
            ?>
            <a href="Signup.php">Back</a>
            <?php
        }
    else{
        echo"Your registration is done!";
    }
?>
