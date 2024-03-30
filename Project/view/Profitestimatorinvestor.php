<?php
    session_start();
?>
<html>
    <head>
        <title>Profit Estimator Investor</title>
    </head>
    <body>
        <table border="1" align="center" width="750px">
            <tr>
                <td>
                  <h1> DigiFarm </h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href= "Investordashboard.php"> Home </a>
                </td>
                <tr>
                <form method="post" action="../controller/Profitestimatorinvestorcheck.php" >
                    <td>
                    
                     </fieldset>

                        <fieldset>
                        <legend>Profit Estimator</legend>
                        
                         Project Id:<input type="text" name="pid" value="">
                        <p>
                        Enter Investment : <input type="text" name="eamount" value="">
                        </p>
                        <input type="submit" value="Submit"><br>
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
                    
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>