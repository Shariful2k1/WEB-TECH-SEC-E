<?php
    session_start();
?>

<html>
    <head>
        <title>New Employee</title>
    </head>
    <body>
        <table border="1" align="center" width="650px">
            <tr>
                <td>
                   <h1>New Employee</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
                   <a href= "Admin.php"> Home
                </td>
                <form method="post" action="Updatec.php" >
                <tr>
                    <td>
                        <p>
                                <hr>
                                <fieldset >
                                    <legend><h3>Register</h3></legend>
                                   <center>
                        Update Employee Name:
						<input type="text" size="30" name="name" value="" >	
                        <hr>
                        Update Contact No: 
						<input type="number" size="15" name="contact_no" value="" >									
                    <hr>                  
                        Update Username:
						<input type="text" size="30" name="username" value="" >	
                        <hr>                  
							
						Update Password: 
						<input type="password" size="30" name="password" value="" >				

                            <input type="submit" value="Update"></a><br>
                            </form>
                        <?php                   
                        ?>
                            </center>
                    </fieldset>

                    <center> All Rights Reserved Copyright@2024 </center>
                        </p>
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>