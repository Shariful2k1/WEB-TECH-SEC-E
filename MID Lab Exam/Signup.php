<?php
    session_start();
?>

<html>
    <head>
        <title>SIGN UP</title>
    </head>
    <body>
        <table border="1" align="center" width="650px">
    
                <form method="post" action="Signupcheck.php" >
                <tr>
                    <td>
                
                                <fieldset >
                                    <legend><h3>Sign Up</h3></legend>
                                   <center>
						First Name:
						<input type="text" size="30" name="firstname" value="" >	
                        <hr>
                        Last Name:
						<input type="text" size="30" name="lastname" value="" >	
                        <hr>
                        Name:
						<input type="text" size="30" name="name" value="" >	
                        <hr>
                        <select name = "month">
                            <option>Month</option>
                            <?php
                                for($month = 1; $month <= 12; $month++)
                                echo"<option value = '".$month."'>".$month."</option>";
                            ?>
                        </select> 
                        <select name = "day">
                                <option>Day</option>
                                <?php
                                    for($day = 1; $day <= 31; $day++){
                                    echo "<option value = '".$day."'>".$day."</option>";
                                }
                            ?>
                        </select>
                        <select name = "year">
                        <option>Year</option>
                        <?php
                            for($year = 1900; $year <= 2016; $year++){
                                echo "<option value = '".$year."'>".$year."</option>";
                            }
                        ?>
                        </select>
                        <hr>
                        Gender: 
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female
                        <input type="radio" name="gender" value="Other"> Other 									
                    <hr>            
                        Mobile No: 
						<input type="text" size="15" name="mobile_no" value="" >    
                    <hr>      
						Email:
						<input type="text" size="30" name="email" value="">					
                    <hr>                    
						Password: 
						<input type="password" size="30" name="password" value="" >					
                    <hr>                    
						Confirm Password:
						<input type="password" size="30" name="newpassword" value="" >
                            <br><br>

                            <input type="submit" value="Sign Up"></a><br>
                            </form>
                            <?php 
								if(isset($_GET['err'])){
									if($_GET['err'] == 'null'){
										echo "Please enter your username/password!";
									}
								}
							?>
                    </fieldset>
                        </p>
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>