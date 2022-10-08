<?php

session_start();

if (isset($_POST["logout"])) { unset($_SESSION["admin"]); }

if (!isset($_SESSION["admin"])) {
  header("Location: login-admin.php");
  exit();
}
