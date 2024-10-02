<?php
    global $conn;
    include "db_connect.php";
    include "../includes/header.php";
?>

    <div class="text-center mb-4 mt-5">
        <h3 class="title">Add New User</h3>
        <p class="text-muted">Complete the form below to add a new user</p>
    </div>

    <div class="container d-flex justify-content-center">
        <form action="" method="POST" class="forms">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">ID</label>
                    <input type="text" class="form-control" name="user_id">
                </div>
                <div class="col">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="user_name">
                </div>
                <div class="col">
                    <label class="form-label">Family Name</label>
                    <input type="text" class="form-control" name="user_familyName">
                </div>
            </div>
            <button type="submit" class="btn btn-outline-dark" name="save_user">Save</button>
            <button type="reset" class="btn btn-outline-danger" name="cancel">Cancel</button>
        </form>
    </div>


<?php

    if(isset($_POST['save_user'])) {
        $user_id = $_POST['user_id'];
        $user_name = $_POST['user_name'];
        $user_familyName = $_POST['user_familyName'];

        $insertUser = "INSERT INTO users (user_id, user_name, user_familyName) VALUES ($user_id, $user_name, $user_familyName)";
        $result = mysqli_query($conn, $insertUser);

        if ($result) {
            header("Location: add_user.php?msg=New User Added");
        } else {
            echo "Failed to record the user " . mysqli_error($conn);
        }
    }

    include("../includes/footer.php");