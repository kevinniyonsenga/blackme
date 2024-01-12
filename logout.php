<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['email'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the login page or any other desired page
    header("Location: login.php");
    exit();
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}
?><<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>logout</title>
    <script >
        unction preventBack(){window.history.forward()};
  setTimeout("preventBack()",0);
  window.onunload=function(){null;}
    </script>
