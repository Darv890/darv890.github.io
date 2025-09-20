<?php
session_start();
include "connection.php";

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!$username || !$password) {
        $_SESSION['error'] = "Please fill in all fields";
        header("Location: register.php");
        exit;
    }

    $sql = "SELECT * FROM users WHERE username = '$username'";

    try {
        $query = $conn->query($sql);
        $user = $query->fetch_assoc();
        if (!$user) {
            $_SESSION['error'] = "Invalid username or password!";
            header("Location: login.php");
            exit;
        }
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header("Location: index.php");
            exit;
        } else {
            $_SESSION['error'] = "Invalid username or password!";
            header("Location: login.php");
            exit;
        }
    } catch (Exception $e) {
        $_SESSION['error'] = "Error: " . $sql . "<br>" . $e->getMessage();
        header("Location: register.php");
        exit;
    }
}
