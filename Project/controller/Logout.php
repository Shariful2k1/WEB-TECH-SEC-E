<?php 
    session_start();
    setcookie('flag', 'true', time()-1, '/');
    header('location: ../view/Home.php');
    session_destroy();
?>