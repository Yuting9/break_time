<?php
    
    if(!session_id()){
        session_start();
        header("Location: main.php");
        exit();
    }
    $userName = "Login";
    $link = 0;
    if(!isset($_SESSION['userName'])) {
        $_SESSION['userName'] = $userName;
        $_SESSION['link'] = $link;
    }
?>
