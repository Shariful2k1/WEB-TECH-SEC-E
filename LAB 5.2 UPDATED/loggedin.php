<?php
    session_start();
    if(isset($_SESSION['flag'])){
?>
<html>
    <head>
        <title>Logged In Dashboard</title>
    </head>
    <body>
        <table border="1" align="center" width="650px">
            <tbody>
            <tr>
                <td colspan="2">
                   <strong>XCompany</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   Logged in as <?=$_SESSION['username']?> | <a href="logout.php"> Logout </a>
                
                <tr>
                    <td>
                         <strong>Account</strong>
                         <hr>
                         <ul>
                            <li><a href="#"> Dashboard </a></li>
                            <li><a href="viewprofile.php"> View Profile </a></li>
                            <li><a href="editprofile.php"> Edit Profile </a></li>
                            <li><a href="changeprofilepicture.php"> Change Profile Picture</a></li>
                            <li><a href="changepassword.php"> Change Password </a></li>
                            <li><a href="publichome.php"> Logout </a></li>
                         </ul>
                    </td>
                    <td>
                         <h5>Welcome Bob</h5>
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
<?php
}else{
    echo "Invalid Request!";
    //header('location: login.php');
}
?>