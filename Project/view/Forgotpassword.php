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
                   <h1 class="Head">DigiFarm</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
                    <a class="button" href= "Login.php">  Back </a>
                </td>
                <form method="post" action=""  >
                <tr>
                    <td>
                                <center> 
                                    <br>
                                    <fieldset>
                                <h3 class="title" >Forgot Password? </h3><br>
                                    Username: <input type="text" size="30" name="username" id="username" value="" >
                                    <br>
                                    New password: <input type="password" size="30" name="newpassword" id="newpassword" value="" >
                                    <br>
                                    Retype New password:<input type="password" size="30" name="retypepassword" id="retypepassword" value="" >
                                    <br>
                                    <input class="button" type="button"  value="Confirm" onclick="Forgot()">
                                    <br>
                                    <!-- JS validation-->
                                    <span id="unameErr"></span>
                                    <!-- JS validation-->
                                    <span id="npassErr"></span>
                                    <!-- JS validation-->
                                    <span id="rpassErr"></span>
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
                        </fieldset>
                        <br><br>
                        <center class="Footer">All Rights Reserved Copyright@2024 </center>
                                </form>
                                </center>    
                            
                    </td>
                </tr>
                </form>
            </tr>
        </table>
    </body>
</html>