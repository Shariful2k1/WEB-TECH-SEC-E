<?php
    session_start();

?>

<html>
    <head>
    <link rel="stylesheet" href="../Css/style.css">
    <script src="../Assets/myjs.js"></script>
        <title>DigiFarm</title>
    </head>
    <body>
        <table border="1" align="center" width="650px">
            <tr>
                <td>
                   <h1 class="Head">DigiFarm</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
                   <a class="button" href= "Home.php">  Home </a>  <a class="button" href= "#"> Login </a>  <a class="button" href= "Signup.php"> Sign Up </a>
                </td>
                <form method="post" action="../controller/Logincheck.php" onsubmit="return Login(this);" novalidate >
                <tr>
                    <td>
                        <p>
                                <hr>
                                <fieldset >
                                    <legend><h3 class="Title">Login</h3></legend>
                                Username: <input type="text" name="username" id="username" value="">
                                <br>
                                <br>
                                Password: <input type="password" name="password" id="password" value="" size="">
                                <br>
                                <hr>
                                <input type="checkbox" name="" value="" /> Remember me! <br><br>
                                <input class="button" type="submit" value="Login"></a>
						        <a class="button" href ="Forgotpassword.php"> Forgot Password?</a>
                                    <hr> 
                                <b>Don't Have an Account Yet?</b> &nbsp; <a class="button" href="Signup.php">Sign Up Now!</a><br>
                                    <!-- JS validation-->
                                    <span id="unameErr"></span>
                                    <!-- JS validation-->
                                    <span id="passErr"></span>
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
                    <br><br>

                   <center class="Footer"> All Rights Reserved Copyright@2024 </center>
                        </p>
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>