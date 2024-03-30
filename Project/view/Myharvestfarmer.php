<?php
    session_start();
?>
<html>
    <head>
        <title>My Harvest</title>
    </head>
    <body>
        <table border="1" align="center" width="750px">
            <tr>
                <td>
                    <h1>DigiFarm</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href= "Farmerdashboard.php">  Home </a> 
                </td>                
                <form method="post" action="../controller/Harvestcheckfarmer.php" >
                <tr>
                    <td>
                    
                       <fieldset>
                        <legend>Sale</legend>
                        Enter Title : <input type="text" name="title" value="">
                        <p>
                        Enter Quantity:           <select name="quantity"> 
                            <option name="quantity" value="1 kg">1 kg</option>
                            <option name="quantity" value="2 kg">2 kg</option>
                            <option name="quantity" value="3 kg">3 kg</option>
                            <option name="quantity" value="4 kg">4 kg</option>
                            <option name="quantity" value="5 kg">5 kg</option>
                            <option name="quantity" value="6 kg">6 kg</option>
                            <option name="quantity" value="7 kg">7 kg</option>
                            <option name="quantity" value="8 kg">8 kg</option>
                            <option name="quantity" value="9 kg">9 kg</option>
                            <option name="quantity" value="10 kg">10 kg</option>
                        </select> 
                        </p>
                        <p>
                        Enter Price : <input type="text" name="price" value="">
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
                <tr>
                    <td>
                        <center>
                            All Rights Reserved Copyright@2024 
                        </center>
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>