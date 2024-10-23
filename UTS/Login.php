<?php
session_start();

$validUsername = "admin";
$validPassword = "admin123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION['username'] = $username;

        header("Location: home.php");
        exit();
    } else {
        echo "Username atau password salah.";
    }
}
?>