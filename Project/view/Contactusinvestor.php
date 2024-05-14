<?php
    session_start();
?>
<html>
    <head>
    <link rel="stylesheet" href="../Css/style.css">
        <title>Contact Us</title>
    </head>
    <body>
        <table border="1" align="center" width="750px">
            <tr>
                <td>
                <h1 class="Head">DigiFarm</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a class="button" href= "Investordashboard.php"> Home </a>
                </td>
                <form method="post" action="../controller/Contactusinvestorcheck.php" >
                <tr>
                    <td>
                    
                     </fieldset>

                        <fieldset>
                        <legend><h3 class="Title">Contact Us</h3></legend>
                        
                        Phone Number: <input type="number" name="pnumber" value="">
                        <p>
                        Email : <input type="email" name="email" value=""> 
                        </p>
                        <p>
                        Please Tell Us Your Problems/Suggestions : <input type="textarea" name="contactus" value=""> 
                        </p>
                        <p>
                        <br><input class="button" type="submit" value="Submit"><br>
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
                        <br><br>
                        <center class="Footer">
                            All Rights Reserved Copyright@2024 
                        </center>
                    
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>