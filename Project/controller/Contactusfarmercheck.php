<?php 
    session_start();

    require "../model/dbfunction.php";

    $pnumber = $_REQUEST['pnumber'];
    $email = $_REQUEST['email'];
    $contactus = $_REQUEST['contactus'];
    
    if($pnumber == "" || $pnumber =="" || $contactus =="" ) {
        echo "Please enter all the details! Incomplete form submitted.";
        ?>
        <a href="../view/Contactusfarmer.php">Back</a>
        <?php
    }

    else if(strlen($pnumber)<11 || strlen($pnumber)>11)
    {
        echo "Mobile number must 11 digit";
        ?>
        <a href="../view/Contactusfarmer.php">Back</a>
        <?php
    }
    else if((substr_count($email,'@')<1) || (substr_count($email,'.com')<1) )
    {        
        echo "Email must contain @ and .com ";
        ?>
        <a href="../view/Contactusfarmer.php">Back</a>
        <?php
    }

    else{
        contact_us($pnumber, $email, $contactus);
        echo "We received your feedback. Thankyou! ";
        ?>
        <a href="../view/Farmerdashboard.php">Back</a>
        <?php
    }
?>

