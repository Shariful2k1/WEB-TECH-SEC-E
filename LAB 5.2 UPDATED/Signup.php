<html>
    <head>
        <title>REGISTRATION</title>
    </head>
    <body>
        <table border="1" align="center" width="650px">
            <tr>
                <td>
                   <h1>X Company</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
                   <a href= "Publichome.php">  Home </a> | <a href= "Login.php"> Login </a> | <a href= "#"> Sign Up </a>
                </td>
                <form method="post" action="Signupcheck.php" >
                <tr>
                    <td>
                        <p>
                                <hr>
                                <fieldset >
                                    <legend><h3>REGISTRATION</h3></legend>
                                   <center>
                        Name:
						<input type="text" name="name" value="" >	
                        <hr>
                        Email:
						<input type="email"  name="email" value="">  
                        <hr>          
						Username:
						<input type="text"  name="username" value="" >	
                        <hr>
						Password: 
						<input type="password"  name="password" value="" >					
                    <hr>                    
						Confirm Password:
						<input type="password"  name="newpassword" value="" >
                    <hr>
                    <fieldset>    
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female
                        <input type="radio" name="gender" value="Other"> Other
                    </fieldset> 
                    </fieldset>
                            <hr>
                            <fieldset>
                    <legend>Date of Birth</legend>
                    <input type="number" name="date" value=""> / 
                    <input type="number" name="month" value=""> / 
                    <input type="number" name="year" value="">
                    <em>(dd/mm/yyyy)</em>
                </fieldset>
                <hr>
                <input type="submit" name="submit" value="Submit"></a>
                <a href="#"><input type="button" name="reset" value="Reset"></a>  

                            <br><br>
                    </fieldset>
                    <hr>

                    <center> Copyright@2017 </center>
                        </p>
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>