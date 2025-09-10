<?php
$conn = mysqli_connect("localhost", "root", "root", "db_coding");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
// else {
//     echo "Connected successfully";
// }
