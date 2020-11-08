<?php
    include "connection.php";
    
    session_start();
        
    mysqli_query($conn, "insert into content(user,email,blog,heading) values('{$_SESSION['user']}','{$_SESSION['email']}','{$_GET['blog']}','{$_GET['bheading']}');");

    header("Location: /wb.php");
    
?>