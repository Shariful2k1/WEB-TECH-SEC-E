<?php   

    $name = $_REQUEST['name'];
    $words = explode(" ", $name);
    $firstChar = substr($name, 0, 1);
    $allowedCharacters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.-";
    $char = $name;

    if (strpos($allowedCharacters, $char) === false) {
    echo "Name can contain a-z, A-Z, period, dash only.";  
    }

    elseif($name == "") {
        echo "Incomplete form submitted.";
    }
    else if (count($words) < 2) {
        echo "Name must be 2 words.";
    }
    elseif (!ctype_alpha($firstChar)) {
        echo "Name must start with a letter.";
    }
    
  
    else{
        echo "form submitted.";
    }
?>
