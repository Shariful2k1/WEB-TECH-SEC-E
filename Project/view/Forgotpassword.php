<?php
    session_start();
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
                    <a href= "Login.php">  Back </a>
                </td>
                <form method="post" action="../controller/Forgotpasswordcheck.php">
                <tr>
                    <td>
                                <center> 
                                Forgot Password?<br>
                                    Username: <input type="text" size="30" name="username" value="" >
                                    <br>
                                    New password: <input type="password" size="30" name="newpassword" value="" >
                                    <br>
                                    Retype New password:<input type="password" size="30" name="retypepassword" value="" >
                                    <br>
                                    <input type="submit" name="submit" value="Confirm">
                                    <br>
                                    <?php 
                            if(isset($_GET['err'])){
                                if($_GET['err'] == 'invalid_request'){
                                    echo "Please enter your valid username/email!";
                                }

                                if($_GET['err'] == 'null'){
                                    echo "Please enter your username/new password!";
                                }
                            }

                        ?>
                                </form>
                                </center>    
                            
                    </td>
                </tr>
                </form>
            </tr>
        </table>
    </body>
</html>