<?php
    session_start();
?>
<html>
    <head>
    <link rel="stylesheet" href="../Css/style.css">
        <title>Profit Estimator Wholesaler</title>
    </head>
    <body>
        <table border="1" align="center" width="750px">
            <tr>
                <td>
                   <h1 class="Head">DigiFarm</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a class="button" href= "Wholesalerdashboard.php"> Home </a>
                </td>
                <form method="post" action="../controller/Profitestimatorwholesalercheck.php" >
                <tr>
                    <td>
                    
                     </fieldset>

                        <fieldset>
                        <legend><h3 class="Title">Profit Estimator</h3></legend>
                        Project ID:
						<input type="number" size="10" name="id" value="" placeholder="101-200">
                        <p>
                        Harvest Type Bought:           <select name="htypeb"> 
                            <option name="htypeb" value="Rice">Rice</option>
                            <option name="htypeb" value="Rice">Potato</option>
                            
                        </select> 
                        </p>
                        <p>
                        Purchase Quantity(kg) : <input type="number" name="pquantity" value="">
                        </p>
                        <p>
                        Harvest Type Sold:           <select name="htypes"> 
                            <option name="htypes" value="Rice">Rice</option>
                            <option name="htypes" value="Potato">Potato</option>
                            
                        </select> 
                        </p>
                        <p>
                         Sale Quantity(kg) : <input type="number" name="squantity" value="">
                        </p>

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