<?php
include "includes/header.php";
include "db-connect.php";

// Fetch the data to prefill the form
$id = $_GET["id"];
$sql = "SELECT * FROM contact_us WHERE id=$id";
$result = mysqli_query($myconn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="container">
    <div class="row">
        <div class="col">
            <form method="POST">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Name</label>
                        <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" id="inputName" placeholder="Your Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="inputEmail" placeholder="Your Email">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputPhone">Phone</label>
                        <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control" id="inputPhone" placeholder="Your Phone Number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSubject">Subject</label>
                        <input type="text" name="subject" value="<?php echo $row['subject']; ?>" class="form-control" id="inputSubject" placeholder="Subject">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMessage">Message</label>
                    <textarea class="form-control" name="message" id="inputMessage" rows="4"><?php $row['message']; ?></textarea>
                </div>
                <button type="submit" class="" name="submit">Update</button>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Update query
    $sql = "UPDATE contact_us SET name='$name', email='$email', phone='$phone', subject='$subject', message='$message' WHERE id=$id";
    $query = mysqli_query($myconn, $sql);

    if ($query) {
        echo "<script>alert('Form has been updated successfully');</script>";
        echo "<script>window.location.href='display.php';</script>";
    } else {
        echo "<script>alert('Form update failed: " . mysqli_error($myconn) . "');</script>";
    }
}
?>