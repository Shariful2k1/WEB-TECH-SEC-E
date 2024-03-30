
<?php 
    session_start();

    require "../model/dbfunction.php";

    $htypeb = $_REQUEST['htypeb'];
    $pquantity = $_REQUEST['pquantity'];
    $htypes = $_REQUEST['htypes'];
    $squantity = $_REQUEST['squantity'];
    $id=$_REQUEST['id'];
    $value1=0;
    $value2=0;
    $profit=0;
    $remaining=0;

    $result1=verify_wholesaler_id($id);
    
    
    if($pquantity == "" || $squantity =="") {
        echo "Please enter all the details! Incomplete form submitted.";
        ?>
        <a href="../view/Profitestimatorwholesaler.php">Back</a>
        <?php
    }
    elseif($squantity>$pquantity) {
        echo "You cannot sale more than ". $pquantity." kg as your purchase quantity ". $pquantity." kg. ";
        ?>
        <a href="../view/Profitestimatorwholesaler.php">Back</a>
        <?php
    }
    elseif ($result1 == true) {
        echo "ID already in use. Please use different id.";
        ?>
        <a href="../view/Profitesimatorwholesaler.php">Back</a>
        <?php
    }
    elseif( $id<101 || $id>200) {
        echo "ID must in between 101-200.";
        ?>
        <a href="../view/Profitestimatorwholesaler.php">Back</a>
        <?php
    }
    else{

        if ($htypeb=="Potato"){
            $value1 = 22;
        }

        elseif ($htypeb=="Rice"){
            $value1 = 30;
        }

        if ($htypes=="Potato"){
            $value2 = 90;
        }

        elseif ($htypes=="Rice"){
            $value2 = 160;
        }
        
        $profit = ($value2*$squantity)-($value1*$squantity);
        $remaining= ($pquantity-$squantity);
        profit_wholesaler($htypeb, $pquantity, $htypes, $squantity, $profit, $id);
       

        echo "Your estimated profit is ". $profit." tk.   ";
        echo "Your remaining quantity is ". $remaining . " kg";
        ?>
        <a href="../view/Wholesalerdashboard.php">Back</a>
        <?php
    }
    

    
    
?>

