<?php

include "config.php";

session_start();

//reference submit
if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = $_POST['password'];

    $select = "SELECT * FROM login_users WHERE username = '$username' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);
        if ($row['password'] == $pass) {
            if ($row['usertype'] == 'faculty') {
                $_SESSION['faculty_first_name'] = $row['first_name'];
                $_SESSION['faculty_middle_name'] = $row['middle_name'];
                $_SESSION['faculty_last_name'] = $row['last_name'];
                $_SESSION['faculty_username'] = $row['username'];
                $_SESSION['faculty_email'] = $row['email'];
                $_SESSION['faculty_gender'] = $row['gender'];
                $_SESSION['faculty_status'] = $row['status'];
                $_SESSION['faculty_nationality'] = $row['nationality'];
                $_SESSION['faculty_dob'] = $row['dob'];
                $_SESSION['faculty_address'] = $row['address'];
                $_SESSION['faculty_city'] = $row['city'];
                $_SESSION['faculty_state'] = $row['state'];
                $_SESSION['faculty_country'] = $row['country'];
                $_SESSION['faculty_mobile'] = $row['mobile'];
                $_SESSION['faculty_emp_type'] = $row['emp_type'];
                $_SESSION['faculty_joining_date'] = $row['joining_date'];
                $_SESSION['faculty_department'] = $row['department'];
                $_SESSION['faculty_photo'] = $row['photo'];
                $_SESSION['faculty_usertype'] = $row['usertype'];
                header('location: faculty.php');
            } else if ($row['usertype'] == 'admin') {
                $_SESSION['admin_first_name'] = $row['first_name'];
                $_SESSION['admin_middle_name'] = $row['middle_name'];
                $_SESSION['admin_last_name'] = $row['last_name'];
                $_SESSION['admin_username'] = $row['username'];
                $_SESSION['admin_email'] = $row['email'];
                $_SESSION['admin_gender'] = $row['gender'];
                $_SESSION['admin_status'] = $row['status'];
                $_SESSION['admin_nationality'] = $row['nationality'];
                $_SESSION['admin_dob'] = $row['dob'];
                $_SESSION['admin_address'] = $row['address'];
                $_SESSION['admin_city'] = $row['city'];
                $_SESSION['admin_state'] = $row['state'];
                $_SESSION['admin_country'] = $row['country'];
                $_SESSION['admin_mobile'] = $row['mobile'];
                $_SESSION['admin_emp_type'] = $row['emp_type'];
                $_SESSION['admin_joining_date'] = $row['joining_date'];
                $_SESSION['admin_department'] = $row['department'];
                $_SESSION['admin_photo'] = $row['photo'];
                $_SESSION['admin_usertype'] = $row['usertype'];
                header('location: admin.php');
            } else {
                // Password is incorrect, display error message
                $error = "Incorrect Password. Please try again.";
                echo "<script>alert('$error');</script>";
            }
        } else {
            // Username is incorrect, display error message
            $error = "Incorrect Username. Please try again.";
            echo "<script>alert('$error');</script>";
        }
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Saint John Bosco RFID Attendance and Subject Tracking System</title>
    <script src="https://kit.fontawesome.com/92cde7fc6f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="login.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="bg-image"></div>
    <div class="main-container">
        <div class="logo-container">
            <img src="css/sjb-logo.png" class="content-logo" alt="SJB Logo">
            <p>Saint John Bosco - Kalentong Branch</p>
        </div>
        <br>
        <h2>Good to see you again!</h2>
        <br>
        <div class="form-container">
            <h1>SIGN IN</h1>
            <br>
            <form action="#" class="form-login" method="POST">
                <label for="username"><strong>USERNAME:</strong></label>
                <div class="input-group">
                    <input type="text" class="form-control" name="username" placeholder="E.g: SJB-001" autofocus required>
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <label for="password"><strong>Password:</strong></label>
                <div class="input-group">
                    <input type="password" class="form-control" name="password" required>
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <div class="btn-form-container">
                    <button type="submit" name="submit" class="btn-login">LOGIN</button>
                </div>
            </form>
            <div class="link-container">
                <p>No Account? <a href="registration.php"><strong>Register here.</strong></a></p>
            </div>
        </div>
    </div>

    <footer class="my-footer">
        <div class="footer-content">
            All rights reserved 2024 &copy; <strong> Saint John Bosco Kalentong Branch</strong>
        </div>
    </footer>
</body>


</html>