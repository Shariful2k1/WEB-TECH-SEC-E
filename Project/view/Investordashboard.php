<?php
    session_start();

    if(!isset($_SESSION['user'])){
        header("Location: Login.php");
    }
?>
<html>
    <head>
    <link rel="stylesheet" href="../Css/style.css">
        <title>DigiFarm</title>
    </head>
    <body>
        <table border="1" align="center" width="650px">
            <tr>
                <td>
                   <h1 class="Head">DigiFarm</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
                   <a class="button"  href= "#">  Home </a>   <a class="button"  href="../controller/Logout.php">logout</a>
                </td>
                <tr>
                    <td>
                        
                            <h2><em>
                                <center class="Text">Welcome to our Home Page <?php echo $_SESSION['user'] ?>!</center>
                            </em></h2>
                                    <ul>
                                        <a class="button"  href="Myharvestinvestor.php">My Harvest</a><br>
                                        <a class="button"  href="Profitestimatorinvestor.php">Profit Estimator</a><br>
                                        <a class="button"  href="Contactusinvestor.php">Contact Us</a><br>
                                    </ul>
                                </center>
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>