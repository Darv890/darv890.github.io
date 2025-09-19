<?php
include "connection.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $sql = "INSERT INTO users (username, full_name, email, password) VALUES ('$username', '$full_name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
