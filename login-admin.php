<?php

  require "check-admin.php";

?>

<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Login ADMIN</title>
    <link rel="stylesheet" href="login.css">
  </head>

  <body>

    <?php if (isset($failed)) { ?>
      <div id="bad-login">Invalid email or password.</div>
    <?php } ?>

    <form id="login-form" method="post" target="_self">
      <h1><b>LOGIN ADMIN</b></h1>
        <label for="admin"><b>Username</b></label>
        <input type="text" name="admin" required />
        <label for="password"><b>Password</b></label>
        <input type="password" name="password" required />
        <input type="submit" value="Masuk" />
        <label><a href="login-user.php" id="style-2" data-replace="Login sebagai User?"><span>Login sebagai User?</span></a></p></label>
    </form>
    
  </body>

</html>