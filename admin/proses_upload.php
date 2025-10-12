<?php
session_start();
include "../connection.php";

// if (isset($_POST['submit'])) {
// var_dump($_POST['submit']);
// exit;
$name = $_POST['name'] ?? '';
$description = $_POST['description'] ?? '';
$createdAt = date('Y-m-d H:i:s');
$updatedAt = date('Y-m-d H:i:s');

if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = '../assets/images/uploaded/';
    $filename = basename($_FILES['image']['name']);
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $newName = uniqid('img_') . '.' . $ext;
    $uploadPath = $uploadDir . $newName;


    $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    if (!in_array($ext, $allowed)) {
        die('File type not allowed');
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
        $uploadDirNew = '/coding/assets/images/uploaded/';
        $uploadPathNew = $uploadDirNew . $newName;
        $sql = "INSERT INTO destinations (name, description, path_url, created_at, updated_at)
        VALUES ('$name', '$description', '$uploadPathNew', '$createdAt', '$updatedAt')";

        // var_dump($sql);
        // exit;
        if (mysqli_query($conn, $sql)) {
            // echo "New record created successfully";
            $_SESSION['success'] = "New record created successfully";
            header("Location: destinations.php");
        } else {
            // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            $_SESSION['error'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
            header("Location: destinations.php");
            exit;
        }
    } else {
        // echo "File not uploaded.";
        $_SESSION['error'] = "File not uploaded.";
        header("Location: destinations.php");
        exit;
    }
} else {
    // echo "No file to upload.";
    $_SESSION['error'] = "No file to upload.";
    header("Location: destinations.php");
    exit;
}
// }
