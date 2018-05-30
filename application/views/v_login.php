<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>



   <!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url ("assets/css/style.css");?>">


</head>

<body>

  <html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>LOGIN</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

</head>
    <div id="login">
      <form action="<?php echo site_url('login/aksi_login'); ?>" method="post">
        <span class="fontawesome-user"></span>
          <input type="text" name="username" placeholder="Username">

        <span class="fontawesome-lock"></span>
          <input type="password" name="password" placeholder="Password">

        <input type="submit" value="Login">

</form>



</body>

</html>
