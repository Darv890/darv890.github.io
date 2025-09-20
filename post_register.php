<?php
session_start();
include "connection.php";

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!$username || !$full_name || !$email || !$password) {
        $_SESSION['error'] = "Please fill in all fields";
        header("Location: register.php");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format!";
        header("Location: register.php");
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, full_name, email, password) VALUES ('$username', '$full_name', '$email', '$hashed_password')";

    try {
        $conn->query($sql);
        header("Location: login.php");
    } catch (Exception $e) {
        $_SESSION['error'] = "Error: " . $sql . "<br>" . $e->getMessage();
        header("Location: register.php");
        exit;
    }
}
