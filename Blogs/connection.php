<?php  

    $servername = "sql109.epizy.com";  
    $username = "epiz_27162868"; 
    $password = "MiEB2YWS5Y";  //put your own username and password
    $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
    $sql = mysqli_select_db ($conn, 'epiz_27162868_cosmic') or die("unable to connect to database"); //change database name to your convenience

?>