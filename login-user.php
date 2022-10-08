<?php

  require "check-user.php";

?>

<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Login USER</title>
    <link rel="stylesheet" href="login.css">
  </head>

  <body>
    <?php if (isset($failed)) { ?>
      <div id="bad-login">Invalid email or password.</div>
    <?php } ?>

    <form id="login-form" method="post" target="_self">
      <h1><b>LOGIN USER</b></h1>
        <label for="user"><b>Username</b></label>
        <input type="text" name="user" required />
        <label for="password"><b>Password</b></label>
        <input type="password" name="password" required />
        <input type="submit" value="Masuk" />
        <label><a href="login-admin.php" id="style-2" data-replace="Login sebagai Admin?"><span>Login sebagai Admin?</span></a></p></label>
    </form>
    
  </body>

</html>