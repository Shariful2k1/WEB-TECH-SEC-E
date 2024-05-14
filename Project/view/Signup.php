<?php
    session_start();
?>
<!DOCTYPE html>
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
                   <a class="button" href= "Home.php">  Home </a>  <a class="button" href= "Login.php"> Login </a>  <a class="button" href= "#"> Sign Up </a>
                </td>
                <form method="post" action=""   >
                <tr>
                    <td>
                        <p>
                                <hr>
                                <fieldset >
                                    <legend><h3 class="Title">Sign Up</h3></legend>
                                   <center>
						Username:
						<input type="text" size="30" name="username" id="username" value="" autocomplete="username">	
                        <hr>
                        Register As:
						<input type="text" size="30" name="registeras" id="registeras" value="" placeholder="Farmer/Investor/Wholesaler">									
                    <hr>                  
						Email:
						<input type="email" size="30" name="email" id="email" value="">					
                    <hr>                    
						Mobile No: 
						<input type="number" size="15" name="mobile_no" id="mobileno" value="" >
                    <hr>		
						Password: 
						<input type="password" size="30" name="password" id="password" value="" >					
                    <hr>                    
						Confirm Password:
						<input type="password" size="30" name="newpassword" id="retypepassword" value="" >
                    <hr>
                        DOB: <input type="date" name="DOB" id="dob" value="">
                    <hr>    
                       Gender: 
                            <select name="gender" id="gender" >
                                <option name="gender" value="male">Male</option>
                                <option name="gender" value="female">Female</option>
                                <option name="gender" value="others">Others</option>
                            </select>   
                            <br><br>
                            <input class="button" type="button" value="Sign Up" onclick="Signup()"></a><br>
                            </form>
                        <br><a href ="Login.php">Already have an account? Login!</a>
                            </center>
                            <!-- JS validation-->
                            <span id="unameErr"></span>
                                    <!-- JS validation-->
                                    <span id="registerErr"></span>
                                    <!-- JS validation-->
                                    <span id="emailErr"></span>
                                    <!-- JS validation-->
                                    <span id="mobileErr"></span>
                                    <!-- JS validation-->
                                    <span id="passErr"></span>
                                    <!-- JS validation-->
                                    <span id="rpassErr"></span>
                                     <!-- JS validation-->
                                    <span id="genderErr"></span>
                                    <!-- JS validation-->
                                    <span id="dobErr"></span>
                                    
                            <?php 
								if(isset($_GET['err'])){
									if($_GET['err'] == 'null'){
										echo "Please enter your username/password!";
									}
								}
							?>
                    </fieldset>
                    <br><br>

                    <center class="Footer" > All Rights Reserved Copyright@2024 </center>
                        </p>
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>