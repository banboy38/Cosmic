<?php
     include("connection.php");
     $sql = "select * from people";

     session_start();
     $_SESSION["status"] = "Passive";

     $name = $_POST["reguser"];
     $word = $_POST["regpass"];
     $mail = $_POST["regemail"];

     $func = mysqli_query($conn, "insert into people(user,pass,email) values('ase', 'word', 'wamail')");

     $_SESSION["status"] = "Active";

     header("Location: /home.html");
?>