<?php
    header('Cache-Control: no-cache, must-revalidate');
    session_start();
	session_unset();

    $_SESSION["status"] = "Passive";
?>

<!DOCTYPE html>

<!--#ED2553 is the main color-->

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login/Signup</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&amp;subset=latin,latin-ext'><link rel="stylesheet" href="./style.css">

</head>
<body style="background:#ED2553">
<!-- partial:index.partial.html -->
<div class="materialContainer">


   <div class="box">

      <div class="title">LOGIN</div>

      <form action="/Login/process.php" method="post">

      <div class="input">
         <label for="name">Username</label>
         <input type="text" name="username" id="name">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="pass">Password</label>
         <input type="password" name="pass" id="pass">
         <span class="spin"></span>
      </div>

      <div class="button login">
         <button><span>GO</span> <i class="fa fa-check"></i></button>
      </div>

      </form>

      <a href="" class="pass-forgot">Forgot your password?</a>

   </div>

   <div class="overbox">
      <div class="material-button alt-2"><span class="shape"></span></div>

      <div class="title">REGISTER</div>

      <div class="input">
         <label for="regname">Username</label>
         <input type="text" name="regname" id="regname">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="regpass">Password</label>
         <input type="password" name="regpass" id="regpass">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="reregpass">Repeat Password</label>
         <input type="password" name="reregpass" id="reregpass">
         <span class="spin"></span>
      </div>

      <div class="button">
         <button><span>NEXT</span></button>
      </div>


   </div>

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
