<?php
    include("connection.php");

    $db = mysqli_query($conn, "select * from people;");

    session_start();


    {
    
        while($row = mysqli_fetch_object($db))
            {
                if(isset($_POST["passe"]) &&  $_POST["passe"] == $row->pass && $_SESSION["user"] == $row->user)
                {
                    $email = $_POST["email"];
                    mysqli_query($conn, "update people set email = '$email' where user = '$row->user' ;");
                    $_SESSION["email"] = $email;
                    $_SESSION["changemail"] = 1;
                }
                else
                    $_SESSION["changemail"] = 0;
                
                if(isset($_POST["passn"]) && $_POST["passn"] == $row->pass && $_SESSION["user"] == $row->user)
                {
                    $name = $_POST["name"];
                    mysqli_query($conn, "update people set name = '$name' where user = '$row->user' ;");
                     
                }
                if($_SESSION["user"] == $row->user && isset($_POST["username"]) && $_POST["username"] != null)
                {
                    $username = $_POST["username"];
                    $flag = 0;
                    
                    while($bro = mysqli_fetch_object($db))
                    {   
                        
                        if($bro->user == $username && $bro->user != $row->user)
                            $flag = 1;
                    }
                        
                        if($flag == 0){
                           mysqli_query($conn, "update people set user = '$username' where user = '$row->user' ;");
                           $_SESSION["user"] = $username;
                           $_SESSION["changeuser"] = 1;
                        }
                        else
                           $_SESSION["changeuser"] = 0;
                    

                }
                    



                if(isset($_POST["oldpassword"]) &&  $_POST["oldpassword"] == $row->pass && $_SESSION["user"] == $row->user)
                {
                    $newpass = $_POST["newpassword1"];

                    if($_POST["newpassword1"] == $_POST["newpassword2"]){
                         mysqli_query($conn, "update people set pass = '$newpass' where user = '$row->user' ;");
                          $_SESSION["changepass"] = 1;
                    }
                    else
                           $_SESSION["changeuser"] = 0;
                }
                
                    

        }  
                  
                 
    } 
        header("Location: /myacc.php")   
    
?>