<?php
session_start();
if (!isset($_SESSION['user_id']) && !isset($_COOKIE['username'])) {
    header("Location: home.html");
    exit();
}

echo "Welcome to your dashboard!";

?>