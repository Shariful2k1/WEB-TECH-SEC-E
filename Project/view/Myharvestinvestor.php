<?php
    session_start();
?>
<html>
    <head>
    <link rel="stylesheet" href="../Css/style.css">
    <script src="../Assets/myjs.js"></script>
        <title>My Harvest</title>
    </head>
    <body>
        <table border="1" align="center" width="750px">
            <tr>
                <td>
                    <h1 class="Head">DigiFarm</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a class="button" href= "Investordashboard.php">  Home </a> 
                </td>                
                <form method="post" action="../controller/Harvestcheckinvestor.php" onsubmit="return mhinvestor(this);" novalidate >
                <tr>
                    <td>
                    
                       <fieldset>
                        <legend><h3 class="Title">Sale</h3></legend>
                       <p> Harvest Picture <input type="file" name="myimg" id="myimg" value=""> </p>
                        Enter Title : <input type="text" name="title" id="title" value="">
                        <p>
                        Enter Quantity:           <select name="quantity" id="quantity"> 
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
                        Enter Price : <input type="text" name="price" id="price" value="">
                        </p>
                        <p>
                        <br><input class="button" type="submit" value="Submit"><br>
                        <!-- JS validation-->
                        <span id="myimgErr"></span>
                                    <!-- JS validation-->
                                    <span id="titleErr"></span>
                                    <!-- JS validation-->
                                    <span id="quantityErr"></span>
                                    <!-- JS validation-->
                                    <span id="priceErr"></span>
                                    <!-- JS validation-->
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