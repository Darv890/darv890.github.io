<?php
include "connection.php";

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    if ($gender == "laki-laki") {
        $gender = 0;
    } else {
        $gender = 1;
    }
    $city = $_POST['city'];
    $agreement = $_POST['agreement'];
    var_dump($gender);
    if ($agreement == "on") {
        $agreement = 1;
    } else {
        $agreement = 0;
    }
    // return;
    // $file = $_FILES['file']['name'];

    $sql = "INSERT INTO tb_biodata (first_name, last_name, address, gender, city, agreement) VALUES ('$first_name', '$last_name', '$address', '$gender', '$city', '$agreement')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
