<html>
<head>
    Searching an element from an array
</head>
<body>
    <?php
        $element = array(16, 98, 50, 32, 74);
        $searchElement = 50;
        foreach ($element as $value) {
            if ($value == $searchElement) {
                echo "<br>";
                echo "<em>Element " .$searchElement." is found in the array<em>";
                break;
            }
        }
        if($value !== $searchElement){
            echo "<br>";
            echo "<em>Element is not found in the array<em>";
        }
    ?>
</body>
</html>