
<html>
    <head>
        Printing Shapes
        <br>
    </head>
    <body>
        <table border="1" width="400px" height="">
        <tbody>
            <tr>
                <td>
                    <?php
                    for($i = 0; $i < 3;$i++)
                    {
                        for($j = 0; $j <= $i; $j++)
                        {
                            echo "* ";
                        }
                        echo "<br>";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    for($i=3; $i>=1; $i--){
                        for($j=1; $j<=$i; $j++){
                            echo $j;
                        }
                        echo "<br>";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $num = 3; 
                    $char = 'A'; 
                    for ($i = 0; $i < $num; $i++) { 
                        for ($j = 0; $j <= $i; $j++) { 
                            echo $char . " "; 
                            $char++;
                        }
                        echo "<br>";
                    }
                    ?>
                </td>
            </tr>
        </tbody>
        </table>
    </body>
</html>



