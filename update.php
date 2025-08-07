<?php include "connection.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
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
    if ($agreement == "on") {
        $agreement = 1;
    } else {
        $agreement = 0;
    }
    $sql = "UPDATE tb_biodata SET first_name = '$first_name', last_name = '$last_name', address = '$address', gender = '$gender', city = '$city', agreement = '$agreement', updated_at = NOW() WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "New record updated successfully";
    } else {
        echo "Error: test" . $sql . "<br>" . mysqli_error($conn);
    }
}
