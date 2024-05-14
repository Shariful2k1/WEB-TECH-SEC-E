<?php 

require "../model/dbfunction.php";

$json = file_get_contents('php://input');
$data = json_decode($json);

$username = $data->username;
$newpassword = $data->newpassword;

$res = update_pass($username, $newpassword);

if ($res) {
    echo "No details added";
} else {
    echo "Password Added Successfully!";
}

?>
