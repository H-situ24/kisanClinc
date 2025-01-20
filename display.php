<?php include "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">phone</th>
                        <th scope="col">subject</th>
                        <th scope="col">message</th>
                    </tr>
                </thead>
                <?php

                // Database connection
                include "db-connect.php";

                // Query to fetch data from the table

                $sql = "SELECT * FROM contact_us";
                $query = mysqli_query($myconn, $sql);
                $row = mysqli_num_rows($query);
                $num = 1;
                if ($row > 0) {
                    while ($data = mysqli_fetch_assoc($query)) {
                ?>
                        <tr>
                            <td><?php echo  $num++; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['phone']; ?></td>
                            <td><?php echo $data['subject']; ?></td>
                            <td><?php echo $data['message']; ?></td>
                            <td><a href="update.php?id=<?php echo $data['id']; ?>"><img src="unnecesaryimage/edit.png" alt="" width="18px"></a></td>
                            <td><a href="delete.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?');"><img src="unnecesaryimage/delete.png" alt="" width="18px"></a></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>