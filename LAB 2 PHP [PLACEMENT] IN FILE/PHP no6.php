<html>
<head>
    Array being searched for element
    <br>
</head>
<body>
    <?php
        $element = array(11, 67, 57, 81, 108, 65, 75, 34, 89);
        $searchElement = 67;
        foreach ($element as $value) {
            if ($value == $searchElement) {
                echo " Element " .$searchElement." is found in the array";
                break;
            }
        }
        if($value !== $searchElement){
            echo " Element " .$searchElement." is not found in the array";
        }
    ?>
</body>
</html>