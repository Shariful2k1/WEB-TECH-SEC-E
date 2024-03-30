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
                   <h1>DigiFarm</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
                   <a href= "Home.php">  Home </a> | <a href= "#"> Login </a> | <a href= "Signup.php"> Sign Up </a>
                </td>
                <form method="post" action="../controller/Logincheck.php" >
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
                                <input type="submit" name="" value="Login"></a><br>
						        <br><a href ="Forgotpassword.php"> Forgot Password?</a>
                                    <hr> 
                                <b>Don't Have an Account Yet?</b> &nbsp; <a href="Signup.php">Sign Up Now!</a><br>
                                    <?php 
								if(isset($_GET['err'])){
									if($_GET['err'] == 'invalid_request'){
										echo "Please enter your valid username/password!";
									}

									if($_GET['err'] == 'null'){
										echo "Please enter your username/password!";
									}
								}
							?>
                    </fieldset>

                   <center> All Rights Reserved Copyright@2024 </center>
                        </p>
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>