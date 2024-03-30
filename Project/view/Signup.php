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
                   <a href= "Home.php">  Home </a> | <a href= "Login.php"> Login </a> | <a href= "#"> Sign Up </a>
                </td>
                <form method="post" action="../controller/Signupcheck.php" >
                <tr>
                    <td>
                        <p>
                                <hr>
                                <fieldset >
                                    <legend><h3>Sign Up</h3></legend>
                                   <center>
						Username:
						<input type="text" size="30" name="username" value="" >	
                        <hr>
                        Register As:
						<input type="text" size="30" name="registeras" value="" placeholder="Farmer/Investor/Wholesaler">									
                    <hr>                  
						Email:
						<input type="email" size="30" name="email" value="">					
                    <hr>                    
						Mobile No: 
						<input type="number" size="15" name="mobile_no" value="" >
                    <hr>		
						Password: 
						<input type="password" size="30" name="password" value="" >					
                    <hr>                    
						Confirm Password:
						<input type="password" size="30" name="newpassword" value="" >
                    <hr>
                        DOB: <input type="date" name="DOB" value="">
                    <hr>    
                       Gender: 
                            <select name="gender">
                                <option name="gender" value="male">Male</option>
                                <option name="gender" value="female">Female</option>
                                <option name="gender" value="others">Others</option>
                            </select>   
                            <br><br>

                            <input type="submit" value="Sign Up"></a><br>
                            </form>
                        <?php                   
                        ?>
                        <br><a href ="Login.php">Already have an account? Login!</a>
                            </center>
                            <?php 
								if(isset($_GET['err'])){
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