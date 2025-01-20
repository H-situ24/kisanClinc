<?php
include "includes/header.php";
include "db-connect.php";
// include "display.php";


$id = $_GET['id'];
$sql = "DELETE FROM contact_us WHERE id=$id";
$query = mysqli_query($myconn, $sql);
if ($query) {
    echo "<script>alert('Data deleted successfully')</script>";
    echo "<script>window.location.href='display.php'</script>";
} else {
    echo "<script>alert('failed')</script>";
}
