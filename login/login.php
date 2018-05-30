<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:karyawan.php'); }
   require_once("koneksi.php");
?>

<html>

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>



      <link rel="stylesheet" href="css/style.css">


</head>

<body>

  <html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

</head>
    <div id="login">
      <form action="proseslogin.php" method="post">
        <span class="fontawesome-user"></span>
          <input type="text" id="user" placeholder="Username">

        <span class="fontawesome-lock"></span>
          <input type="password" id"pass" placeholder="Password">

        <input type="submit" value="Login">

</form>



</body>

</html>
