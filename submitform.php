<?php
include 'admin/db-connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_us(name,email,phone,subject,message) VALUES('$name','$email','$phone','$subject','$message')";
    $query = mysqli_query($myconn, $sql);
    if ($query) {
        echo "<script>
        alert('Form has been submitted successfully');
    </script>";
        echo "<script>window.location.href='index.php';</script>";
    } else {

        echo "<script>alert('Form submission failed');</script>";
    }
}
