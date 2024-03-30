<?php
    function login($username) {
        include "dbconnection.php";

        $sql = "SELECT `password`, `register_as` FROM users WHERE username='$username'";
        $result = $conn->query($sql);
        $conn->close();

        if ($result->num_rows == 1) {
            // output data of each row
            $row = $result->fetch_assoc();
            return array($row["password"], $row["register_as"]);
        } else {
            return "";
        }
    }


    function verify_username($username) {
        include "dbconnection.php";

        $sql = "SELECT * from users WHERE `username`= '$username'"; 
        $result = $conn->query($sql);
        $conn->close();

        if($result->num_rows == 1) {
            return true;
        } else {
            return false;
        }
    }

    function verify_email($email) {
        include "dbconnection.php";

        $sql = "SELECT * from users WHERE `email`= '$email' "; 
        $result = $conn->query($sql);
        $conn->close();

        if($result->num_rows == 1) {
            return true;
        } else {
            return false;
        }

    }

    function verify_mobile_no($mobile_no) {
        include "dbconnection.php";

        $sql = "SELECT * from users WHERE `mobile_no`= '$mobile_no' "; 
        $result = $conn->query($sql);
        $conn->close();

        if($result->num_rows == 1) {
            return true;
        } else {
            return false;
    }


    }

    function signup($register_as, $username, $email, $mobile_no, $password, $DOB, $gender) {
        include "dbconnection.php";

        $sql = "INSERT INTO users (`username`, `register_as`, `email`, `mobile_no`, `password`, `DOB`, `Gender`)
                  VALUES ('$username', '$register_as', '$email', '$mobile_no', '$password', '$DOB', '$gender')";  
        $conn->query($sql);
        $conn->close();
        return;
    }

    function update_pass($username, $newpassword) {
        include "dbconnection.php";
        $sql = "UPDATE users SET `password`='$newpassword' WHERE `username`='$username'";
        $conn->query($sql);
        $conn->close();
        return;
    }

    function contact_us($pnumber, $email, $contactus) {
        include "dbconnection.php";

        $sql = "INSERT INTO contactus (`phone_number`, `email`, `feedback`)
                  VALUES ('$pnumber', '$email', '$contactus')";  
        $conn->query($sql);
        $conn->close();
        return;
    }

    function my_harvest($title, $quantity, $price) {
        include "dbconnection.php";

        $sql = "INSERT INTO myharvest (`title`, `quantity`, `price`)
        VALUES ('$title', '$quantity', '$price')";   
        $conn->query($sql);
        $conn->close();
        return;
    }

    function verify_farmer_id($id) {
        include "dbconnection.php";

        $sql = "SELECT * from profit_farmer WHERE `id`= '$id' "; 
        $result = $conn->query($sql);
        $conn->close();

        if($result->num_rows == 1) {
            return true;
        } else {
            return false;
    }


    }

    function profit_farmer($htype, $lamount, $samount, $fused, $eexpense, $smonth, $profit, $id) {
        include "dbconnection.php";

        $sql = "INSERT INTO profit_farmer (`harvest_type`, `land_amount`, `seed_amount`, `fertilizer_used`, `estimated_expense`, `sale_month`,`profit`,`id`)
                  VALUES ('$htype', '$lamount', '$samount', '$fused', '$eexpense', '$smonth', '$profit', '$id')";   
        $conn->query($sql);
        $conn->close();
        return;
    }

    function verify_wholesaler_id($id) {
        include "dbconnection.php";

        $sql = "SELECT * from profit_wholesaler WHERE `id`= '$id' "; 
        $result = $conn->query($sql);
        $conn->close();

        if($result->num_rows == 1) {
            return true;
        } else {
            return false;
    }

    }

    function profit_wholesaler($htypeb, $pquantity, $htypes, $squantity, $profit, $id) {
        include "dbconnection.php";

        $sql = "INSERT INTO profit_wholesaler (`harvest_type_bought`, `purchase_quantity`, `harvest_type_sold`, `sale_quantity`,`profit`,`id`)
        VALUES ('$htypeb', '$pquantity', '$htypes', '$squantity', '$profit', '$id')"; 
        $conn->query($sql);
        $conn->close();
        return;
    }

    function profit_investor1($pid) {
        include "dbconnection.php";

        $sql = "SELECT `profit` FROM profit_farmer WHERE id='$pid'"; 
        $result = $conn->query($sql);
        $conn->close();

        if ($result->num_rows == 1) {
            // output data of each row
            $row = $result->fetch_assoc();
            return $row["profit"];
        } else {
            return 0;
        }
    }

    function profit_investor2($pid) {
        include "dbconnection.php";

        $sql = "SELECT `profit` FROM profit_wholesaler WHERE id='$pid'"; 
        $result = $conn->query($sql);
        $conn->close();

        if ($result->num_rows == 1) {
            // output data of each row
            $row = $result->fetch_assoc();
            return $row["profit"];
        } else {
            return 0;
        }
    }

    function profit_investor($pid, $eamount, $iprofit) {
        include "dbconnection.php";

        $sql = "INSERT INTO profit_investor (`id`,`investment`, `profit`)
        VALUES ('$pid', '$eamount', '$iprofit')";  
        $conn->query($sql);
        $conn->close();
        return;
    }

   
?>
