<?php
     include("connection.php");
     $sql = "select * from people";

     session_start();
     $_SESSION["status"] = "Passive";

     $name = $_POST["reguser"];
     $word = $_POST["regpass"];
     $mail = $_POST["regemail"];

     mysqli_query($conn, "insert into table values($name,$word,$mail)");

     $_SESSION["status"] = "Active";

     header("Location: /home.html");
?>