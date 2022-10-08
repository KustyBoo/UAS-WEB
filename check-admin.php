<?php
// (A) START SESSION
session_start();

// (B) HANDLE LOGIN

if (isset($_POST["admin"]) && !isset($_SESSION["admin"])) {
  // (B1) USERS & PASSWORDS - SET YOUR OWN !
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

// (C) REDIRECT USER TO HOME PAGE IF SIGNED IN

if (isset($_SESSION["admin"])) {
  header("Location: index1.php"); // SET YOUR OWN HOME PAGE!
  exit();
}
