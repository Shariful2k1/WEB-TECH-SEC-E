    <?php
    $email = $_REQUEST['email'];

    if($email == "") {
        echo "Incomplete form submitted.";
    }
    else if((substr_count($email,'@')<1) || (substr_count($email,'.com')<1) )
    {        
        echo "Email must contain @ and .com ( valid email address (i.e anything@example.com)";
    }
    else{
        echo "form submitted.";
    }
    
    ?>
   