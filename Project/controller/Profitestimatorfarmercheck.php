
<?php 
    session_start();

    require "../model/dbfunction.php";

    $htype = $_REQUEST['htype'];
    $lamount = $_REQUEST['lamount'];
    $samount = $_REQUEST['samount'];
    $fused = $_REQUEST['fused'];
    $eexpense = $_REQUEST['eexpense'];
    $smonth = $_REQUEST['smonth'];
    $id=$_REQUEST['id'];
    $value1=0;
    $value2=0;
    $value3=0;
    $profit=0;
    
    $result1 = verify_farmer_id($id);
    
    if( $lamount == "" || $samount == "" ||$eexpense == "" || $smonth == "" || $id=="" || $fused == "") {
        echo "Please enter all the details! Incomplete form submitted.";
        ?>
        <a href="../view/Profitestimatorfarmer.php">Back</a>
        <?php
    }
    elseif ($result1 == true) {
        echo "ID already in use. Please use different id.";
        ?>
        <a href="../view/Profitesimatorfarmer.php">Back</a>
        <?php
    }
    elseif( $id>100 || $id<1) {
        echo "ID must in between 1-100.";
        ?>
        <a href="../view/Profitestimatorfarmer.php">Back</a>
        <?php
    }

    else{

        if ($htype=="Potato"){
            $value1 = 10;
        }

        elseif ($htype=="Rice"){
            $value1 = 15;
        }
        if ($fused=="Potassium"){
            $value2= 20;
        }
        elseif ($fused=="Organic"){
            $value2= 30;
        }
        if($smonth=="January" || $smonth=="February" || $smonth=="March" || $smonth=="April"){
            $value3= 0.3;
        }
        elseif($smonth=="May" || $smonth=="June" || $smonth=="July" || $smonth=="August"){
            $value3= 0.5;
        }
        elseif($smonth=="September" || $smonth=="October" || $smonth=="November" || $smonth=="December"){
            $value3= 0.7;
        }
        
        $profit = ($value1*$value2*$value3*$lamount*$samount)-$eexpense;
        profit_farmer($htype, $lamount, $samount, $fused, $eexpense, $smonth, $profit, $id);        


        if($profit>0){
            echo "Your estimated profit is ". $profit. " tk";
        ?>
        <a href="../view/Farmerdashboard.php">Back</a>
        <?php
        }
        elseif($profit<0){
            echo "Your estimated loss is ". abs($profit). " tk";
        ?>
        <a href="../view/Farmerdashboard.php">Back</a>
        <?php
        }
        
    }
        
    
?>
