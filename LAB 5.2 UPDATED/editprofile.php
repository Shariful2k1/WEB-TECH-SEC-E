<html>
    <head>
        <title>Edit Profile</title>
    </head>
    <body>
        <table border="1" align="center" width="650px">
            <tbody>
            <tr>
                <td colspan="2">
                   <strong>XCompany</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   Logged in as Bob | <a href="logout.php"> Logout </a>
                <tr>
                    <td>
                         <strong>Account</strong>
                         <hr>
                         <ul>
                            <li><a href="loggedin.php"> Dashboard </a></li>
                            <li><a href="viewprofile.php"> View Profile </a></li>
                            <li><a href="#"> Edit Profile </a></li>
                            <li><a href="changeprofilepicture.php"> Change Profile Picture</a></li>
                            <li><a href="changepassword.php"> Change Password </a></li>
                            <li><a href="publichome.php"> Logout </a></li>
                         </ul>
                    </td>
                    <td>
                        <fieldset>
                            <legend>EDIT PROFILE</legend>
                            Name: <input type="text" name="name" value="">
                            <hr>
                            Email: <input type="text" name="email" value="">
                            <hr>
                            Gender: <input type="radio" name="gender" value=""> Male
                            <input type="radio" name="gender" value=""> Female
                            <input type="radio" name="gender" value=""> Other
                            <hr>
                            Date of Birth: <input type="text" name="dob" value="">
                            <em>(dd/mm/yyyy)</em>
                            <hr>
                            <input type="button" name="submit" value="Submit">
                        </fieldset>
                    </td>
                </tr>
                </td>
                <tr>
                    <td colspan="2">
                        <center>
                            Copyright &copy; 2017
                        </center>
                    </td>
                </tr>
            </tr>
            </tbody>
        </table>
    </body>
</html>