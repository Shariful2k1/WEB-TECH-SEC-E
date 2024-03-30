<?php
    session_start();

    if(!isset($_SESSION['user'])){
        header("Location: Login.php");
    }
?>
<html>
    <head>
        <title>DigiFarm</title>
    </head>
    <body>
        <table border="1" align="center" width="650px">
            <tr>
                <td>
                   <h1>DigiFarm</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
                   <a href= "#">  Home </a>  | <a href="../controller/Logout.php">logout</a>
                </td>
                <tr>
                    <td>
                        
                            <h2><em>
                                <center>Welcome to your Home Page <?php echo $_SESSION['user'] ?>!</center>
                            </em></h2>
                                    <ul>
                                        <li><a href="Myharvestfarmer.php">My Harvest</a></li>
                                        <li><a href="Profitestimatorfarmer.php">Profit Estimator</a></li>
                                        <li><a href="Contactusfarmer.php">Contact Us</a></li>
                                    </ul>
                                </center>
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>