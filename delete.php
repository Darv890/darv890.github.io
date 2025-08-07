<?php include "connection.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_biodata WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Record $id deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "ID not found";
}
