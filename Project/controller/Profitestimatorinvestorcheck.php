
<?php 
    session_start();

    require "../model/dbfunction.php";

    $pid = $_REQUEST['pid'];
    $eamount = $_REQUEST['eamount'];

    
    
        if($eamount == "" || $pid == "" ) {
            echo "Please enter all the details! Incomplete form submitted.";
            ?>
            <a href="../view/Profitestimatorinvestor.php">Back</a>
            <?php
        }
        elseif($pid<1 || $pid>200  ) {
            echo "Invalid ID.";
            ?>
            <a href="../view/Profitestimatorinvestor.php">Back</a>
            <?php
        }

        elseif($pid>=1 && $pid<=100  ) {
            $value1 = profit_investor1($pid);
            if($value1==0){
                echo "Farmer ID not found.";
                ?>
                <a href="../view/Profitestimatorinvestor.php">Back</a>
                <?php
            } else {
                profit_calc($pid, $eamount, floatval($value1));
            }
        }

        elseif($pid>=101 && $pid<=200  ) {
            $value2 = profit_investor2($pid);
            if($value2==0){
                echo "Wholesaler ID not found.";
                ?>
                <a href="../view/Profitestimatorinvestor.php">Back</a>
                <?php
            } else {
                profit_calc($pid, $eamount, floatval($value2));
            }
        }

        function profit_calc($pid, $eamount, $iprofit) {
            if($eamount<5000) {
                $iprofit = ($iprofit*0.05);
            }
            elseif($eamount>5000 || $eamount<20000) {
                $iprofit = ($iprofit*0.10);
            }
            elseif($eamount>20000) {
                $iprofit = ($iprofit*0.15);
            }

            
            if ($iprofit < 0) {
                echo "Your loss is ". abs($iprofit)."tk. ";
            } else {
                echo "Your profit is ". $iprofit."tk. " ;
            }
            ?>
            <a href="../view/Profitestimatorinvestor.php">Back</a>
            <?php
    
            profit_investor($pid, $eamount, $iprofit);
        }
?>
