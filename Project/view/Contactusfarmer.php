<?php
    session_start();
?>
<html>
    <head>
        <title>Contact Us</title>
    </head>
    <body>
        <table border="1" align="center" width="750px">
            <tr>
                <td>
                <h1>DigiFarm</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href= "Farmerdashboard.php"> Home </a>
                </td>
                <form method="post" action="../controller/Contactusfarmercheck.php" >
                <tr>
                    <td>
                    
                     </fieldset>

                        <fieldset>
                        <legend>Contact Us</legend>
                        
                        Phone Number: <input type="number" name="pnumber" value="">
                        <p>
                        Email : <input type="email" name="email" value=""> 
                        </p>
                        <p>
                        Please Tell Us Your Problems/Suggestions : <input type="textarea" name="contactus" value=""> 
                        </p>
                        <p>
                        <br><input type="submit" value="Submit"><br>
                        <?php                   
                        ?>
                        </p>
                        <?php 
								if(isset($_GET['err'])){
									if($_GET['err'] == 'null'){
										echo "Please Fill Up The Form";
									}
								}
							?>
                        </fieldset>
                    
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>