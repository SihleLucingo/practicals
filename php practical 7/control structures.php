<?php
$username = "admin";
$password = "password";

if ($username == "admin" && $password == "password") {
    header("Location: dashboard.php");
} else {
    echo "Error: Invalid username or password.";
}
?>