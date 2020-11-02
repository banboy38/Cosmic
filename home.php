<?php
    include "connection.php";
    
    session_start();
    
    if($_SESSION["status"] == "Active"){
?>

        <!DOCTYPE html>

        <html lang="en-us">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
            <title>
                Homepage
            </title>
        </head>
        <body>
    
           <div class="jumbotron">
               <h2 class="display-4">Welcome <?php echo $_SESSION["user"] ?>.</h2>
           </div> 
   

        </body>

        </html>
<?php
    }

    else{

?>

        <html lang="en-us">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
            <title>
                Homepage
            </title>
        </head>
        <body>
    
           <div class="jumbotron">
               <h2 class="display-4">Welcome Guest.</h2>
           </div> 
   

        </body>

        </html>


<?php
    }

?>