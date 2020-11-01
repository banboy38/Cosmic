<?php
    include "connection.php";
    $sql = "select * from people";
    $result = mysqli_query($conn, $sql);

    header('Cache-Control: no-cache, must-revalidate');

    session_start();
    $_SESSION["status"] = "Passive";
   
?> 

<?php
    $flag = 1;
    while($row = mysqli_fetch_object($result)) {

    if($_POST["username"] == $row->user && $_POST["pass"] == $row->pass) {

    $_SESSION["user"] = $row->user;

    $_SESSION["status"]="Active";    
    
    header("Location:/home.html");
       
    $flag = 0;
    
    exit;
    }

    }

    if($flag == 1)
    {
    header("Location: /Login/login.php");
    exit;
    }   

 ?>