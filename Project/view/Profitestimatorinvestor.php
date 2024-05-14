<?php
    session_start();
?>
<html>
    <head>
    <link rel="stylesheet" href="../Css/style.css">
        <title>Profit Estimator Investor</title>
    </head>
    <body>
        <table border="1" align="center" width="750px">
            <tr>
                <td>
                  <h1 class="Head"> DigiFarm </h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a class="button" href= "Investordashboard.php"> Home </a>
                </td>
                <tr>
                <form method="post" action="../controller/Profitestimatorinvestorcheck.php" >
                    <td>
                    
                     </fieldset>

                        <fieldset>
                        <legend><h3 class="Title">Profit Estimator</h3></legend>
                        
                         Project Id:<input type="text" name="pid" value="">
                        <p>
                        Enter Investment : <input type="text" name="eamount" value="">
                        </p>
                        <input class="button" type="submit" value="Submit"><br>
                        <?php                   
                        ?>
                        <?php 
								if(isset($_GET['err'])){
									if($_GET['err'] == 'null'){
										echo "Please Fill Up The Form";
									}
								}
							?>
                        </fieldset>
                        br><br>
                        <center class="Footer">
                            All Rights Reserved Copyright@2024 
                        </center>
                    
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>