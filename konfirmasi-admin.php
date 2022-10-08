<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST["logout"])) { unset($_SESSION["admin"]); }

// (C) REDIRECT TO LOGIN PAGE IF NOT LOGGED IN
if (!isset($_SESSION["admin"])) {
  header("Location: login-admin.php");
  exit();
}
