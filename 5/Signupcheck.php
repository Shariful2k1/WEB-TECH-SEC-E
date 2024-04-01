
<?php 
    session_start();
    $name = $_POST['name'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $trimmedName = trim($name);
    $firstChar = substr($trimmedName, 0, 1);
    
    if($name == "" || $month == "" || $day == "" || $year == "" || $email == "") {
        echo "Please enter all the details! Incomplete form submitted.";
        ?>
        <a href="Signup.php">Back</a>
        <?php
    }
    else if (($name == trim($name) && strpos($name, ' ') == false) ) {
        echo "Name must contain two words";
        ?>
        <a href="Signup.php">Back</a>
        <?php
    }
    elseif((substr_count($name, '@') > 0) || (substr_count($name, '_') > 0) || (substr_count($name, '#') > 0) || (substr_count($name, '$') > 0) 
    || (substr_count($name, '%') > 0) || (substr_count($name, '/') > 0) || (substr_count($name, '*') > 0) || (substr_count($name, '+') > 0) 
    || (substr_count($name, '(') > 0) || (substr_count($name, ')') > 0) || (substr_count($name, '!') > 0) || (substr_count($name, '^') > 0)
    ||(substr_count($name, '[') > 0) || (substr_count($name, ']') > 0) || (substr_count($name, '{') > 0) || (substr_count($name, '}') > 0) 
    ||(substr_count($name, '|') > 0) || (substr_count($name, '`') > 0) || (substr_count($name, '~') > 0) || (substr_count($name, '<') > 0)
    || (substr_count($name, '1') > 0) || (substr_count($name, '2') > 0) || (substr_count($name, '3') > 0) || (substr_count($name, '4') > 0) 
    || (substr_count($name, '5') > 0)|| (substr_count($name, '6') > 0) || (substr_count($name, '7') > 0) || (substr_count($name, '8') > 0) 
    || (substr_count($name, '9') > 0) || (substr_count($name, '0') > 0) || (substr_count($name, '>') > 0) || (substr_count($name, '=') > 0)
    || (substr_count($name, '?') > 0) || (substr_count($name, ':') > 0) || (substr_count($name, ':') > 0) || (substr_count($name, '"') > 0) 
    || (substr_count($name, "'") > 0) ) {
        echo "Name can only contan alphabets,dots and dashes.";
        ?>
        <a href="Signup.php">Back</a>
        <?php
    }

    else if (($firstChar == "-" || $firstChar == ".") ) {
        echo "Name must start with a letter";
        ?>
        <a href="Signup.php">Back</a>
        <?php
    }

    elseif(!isset($_POST['gender']))
    {
      echo "You Must Select a Gender";
    }
    
    else if((substr_count($email,'@')<1) || (substr_count($email,'.com')<1) )
    {        
        echo "Email must contain @ and .com(e.g: @example.com) ";
            ?>
            <a href="Signup.php">Back</a>
            <?php
    }

    else{
        echo"Your Validation is Successful!";
    }
?>
