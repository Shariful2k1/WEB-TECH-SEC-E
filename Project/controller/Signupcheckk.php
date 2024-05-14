
<?php 

    require "../model/dbfunction.php";

    $register_as = $_POST['register_as'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $password = $_POST['password'];
    $DOB = $_POST['DOB'];
    $gender = $_POST['gender'];
    $res = sign($username,$register_as, $email, $mobile_no, $password, $DOB, $gender);
 
    if ($res) {
        echo " No details added";
    }
    else{
        echo " Details Added Successfully!";
    }
?>


