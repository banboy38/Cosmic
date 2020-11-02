<?php
    
    include("connection.php");
    session_start();

    $_SESSION["status"] = "Passive";
    
    header("Location: /Login/login.php");    

?>