<?php
include "../connection.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $collaboratively = $_POST['collaboratively'];
    if ($collaboratively == "on") {
        $collaboratively = 1;
    } else {
        $collaboratively = 0;
    }

    $sql = "INSERT INTO tb_contact (name, email, subject, message, collaboratively) VALUES ('$name', '$email', '$subject', '$message', '$collaboratively')";

    if (mysqli_query($conn, $sql)) {
        // echo "Contact sended succesfully";
        header("Location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
