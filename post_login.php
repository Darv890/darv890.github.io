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
        $object = (object)$user;
        var_dump($object);
        var_dump($object->role);
        $array = (array)$object;
        var_dump($array['role']);
        if (!$user) {
            $_SESSION['error'] = "Invalid username or password!";
            header("Location: login.php");
            exit;
        }
        if (password_verify($password, $user['password'])) {
            if ($user['role'] === 'admin') {
                $_SESSION['user'] = $user;
                header("Location: admin/index.php");
                exit;
            } else if ($user['role'] === 'petugas') {
                $_SESSION['user'] = $user;
                header("Location: petugas/index.php");
                exit;
            } else {
                $_SESSION['user'] = $user;
                header("Location: index.php");
                exit;
            }
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
