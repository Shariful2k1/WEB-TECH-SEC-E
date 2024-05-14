<?php
    session_start();
?>

<html>
    <head>
    <link rel="stylesheet" href="../Css/style.css">
    <script src="Js/myjs.js"></script>
        <title>Profit Estimator Farmer</title>
    </head>
    <body>
        <table border="1" align="center" width="750px">
            <tr>
                <td>
                   <h1 class="Head">DigiFarm</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a class="button" href= "Farmerdashboard.php"> Home </a>
                </td>
                <form method="post" action="../controller/Profitestimatorfarmercheck.php" onsubmit="return Pfarmer(this);" novalidate >
                <tr>
                    <td>
                    
                     </fieldset>

                        <fieldset>
                        <legend><h3 class="Title">Profit Estimator</h3></legend>
                        Project ID:
						<input type="number" size="10" name="id" value="" placeholder="0-100">
                        <p>
                        
                        Harvest Type:           <select name="htype" id="htype"> 
                            <option name="htype" value="Rice">Rice</option>
                            <option name="htype" value="Potato">Potato</option>
                            
                        </select> 
                        </p>
                        <p>
                        Land Amount (acre) : <input type="number" name="lamount" id="lamount" value="">
                        </p>
                        <p>
                        Seed Amount(kg) : <input type="number" name="samount" id="samount" value="">
                        </p>
                        <p>
                        Estimated Expense(tk) : <input type="text" name="eexpense" id="eexpense" value="">
                        </p>
                        <p>
                        Select Fertilizer Used:  <select name="fused" id="fused"> 
                            <option name="fused" value="Potassium">Potassium</option>
                            <option name="fused" value="Organic">Organic</option>
                        </Select>
                        </p>
                        <p>
                        Sale Month:           <select name="smonth" id="smonth"> 
                            <option name="smonth" value="January">January</option>
                            <option name="smonth" value="February">February</option>
                            <option name="smonth" value="March">March</option>
                            <option name="smonth" value="April">April</option>
                            <option name="smonth" value="May">May</option>
                            <option name="smonth" value="June">June</option>
                            <option name="smonth" value="July">July</option>
                            <option name="smonth" value="August">August</option>
                            <option name="smonth" value="September">September</option>
                            <option name="smonth" value="October">October</option>
                            <option name="smonth" value="November">November</option>
                            <option name="smonth" value="December">December</option>
                            
                        </select> 
                        <br>
                        <br>
                        <input class="button" type="submit" value="Submit"><br>
                        <!-- JS validation-->
                        <span id="htypeErr"></span>
                                    <!-- JS validation-->
                                    <span id="lamountErr"></span>
                                    <!-- JS validation-->
                                    <span id="samountErr"></span>
                                    <!-- JS validation-->
                                    <span id="fusedErr"></span>
                                    <!-- JS validation-->
                                    <span id="eexpenseErr"></span>
                                    <!-- JS validation-->
                                    <span id="smonthErr"></span>
                                    
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
    <div id="result"></div>
</html>