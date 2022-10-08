<?php

session_start();


if (isset($_POST["admin"]) && !isset($_SESSION["admin"])) {
  $admin = [
    "admin1" => "123456",
    "admin2" => "654321",
    "admin3" => "987654"
  ];

  if (isset($admin[$_POST["admin"]])) {
    if ($admin[$_POST["admin"]] == $_POST["password"]) {
      $_SESSION["admin"] = $_POST["admin"];
    }
  }
  
  if (!isset($_SESSION["admin"])) { $failed = true; }
}

if (isset($_SESSION["admin"])) {
  header("Location: index1.php"); 
  exit();
}
