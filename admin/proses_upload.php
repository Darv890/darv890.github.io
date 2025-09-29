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
        $sql = "INSERT INTO destinations (name, description, path_url, created_at, updated_at)
        VALUES ('$name', '$description', '$uploadPath', '$createdAt', '$updatedAt')";

        // var_dump($sql);
        // exit;
        if (mysqli_query($conn, $sql)) {

            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "File not uploaded.";
    }
} else {
    echo "No file to upload.";
}
// }
