<?php
    session_start();

?>

<html>
    <head>
        <title>LOGIN</title>
    </head>
    <body>
        <table border="1" align="center" width="650px">
            <tr>
                <td>
                   <h1>X Company</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
                   <a href= "Publichome.php">  Home </a> | <a href= "#"> Login </a> | <a href= "Signup.php"> Registration</a>
                </td>
                <form method="post" action="Logincheck.php" >
                <tr>
                    <td>
                        <p>
                                <hr>
                                <fieldset >
                                    <legend>Login</legend>
                                Username: <input type="text" name="username" value="">
                                <br>
                                <br>
                                Password: <input type="password" name="password" value="" size="">
                                <br>
                                <hr>
                                <input type="checkbox" name="" value="" /> Remember me! <br><br>
                                <input type="submit" name="" value="Submit"></a><br>
						        <br><a href ="Forgotpassword.php"> Forgot Password?</a>
                                    <hr> 
                    </fieldset>

                   <center>Copyright@2017 </center>
                        </p>
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>