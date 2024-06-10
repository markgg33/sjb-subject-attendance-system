<!---------FOR REGISTRATION PAGE TEMPLATE (CHANGE SOME VALUES)-------->

<?php

include 'config.php';

if (isset($_POST['submit'])) {
    // Sanitize and validate input data
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $dob = $_POST['dob'];
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $mobile = $_POST['mobile'];
    $emp_type = $_POST['emp_type'];
    $joining_date = $_POST['joining_date'];
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $usertype = $_POST['usertype'];

    // Validate if password and confirm password match
    if ($pass !== $confirm_password) {
        echo '<script>alert("Password and confirm password do not match.");</script>';
        exit; // or handle the error in another way
    }

    // Check if a file has been uploaded
    if (isset($_FILES['photo'])) {
        // File upload path
        $targetDir = "uploads/";
        $photoName = basename($_FILES["photo"]["name"]);
        $targetFilePath = $targetDir . $photoName;

        // Move the uploaded file to the specified location
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath)) {
            // Insert the file path into the database
            $insert = "INSERT INTO login_users(first_name, middle_name, last_name, username, email,
            gender, status, nationality,  dob, password, address, city, country, mobile, emp_type, joining_date, department, photo, usertype) 
                VALUES ('$first_name', '$middle_name', '$last_name', '$username', '$email', '$gender', '$status', '$nationality',
                '$dob', '$pass', '$address', '$city', '$country', '$mobile', '$emp_type', '$joining_date', '$department',
                '$targetFilePath', '$usertype')";

            // Execute the query
            mysqli_query($conn, $insert);

            // Show success message with JavaScript
            echo '<script>alert("Account created successfully!");</script>';

            // Redirect to login page after a short delay
            echo '<script>
                    setTimeout(function() {
                        window.location.href = "index.php";
                    }, 2000); // 2000 milliseconds (2 seconds)
                  </script>';
        } else {
            // Error handling if file upload fails
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        // Error handling if no file is uploaded
        echo "No file uploaded.";
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
    <link rel="stylesheet" href="registration.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="bg-image"></div>
    <div class="container-md main-container">
        <br>
        <br>
        <div class="logo-container">
            <img src="css/sjb-logo.png" class="content-logo" alt="SJB Logo">
            <p>Saint John Bosco - Kalentong Branch</p>
        </div>
        <br>
        <h2>Create a Faculty Account now</h2>
        <br>
        <div class="container form-container">
            <h1>REGISTER HERE</h1>
            <br>
            <form action="#" class="form-login" method="POST" enctype="multipart/form-data">
                <div class="row gx-3">
                    <div class="col">
                        <label for="FirstName">First Name:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="first_name" placeholder="E.g: Juan" autofocus required>
                        </div>
                    </div>
                    <div class="col">
                        <label for="MiddleName">Middle Name:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="middle_name" placeholder="E.g: Dela Cruz" autofocus required>
                        </div>
                    </div>
                    <div class="col">
                        <label for="LastName">Last Name:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="last_name" placeholder="E.g: Dela Cruz" autofocus required>
                        </div>
                    </div>
                    <div class="mb-3"></div>
                </div>

                <div class="row gx-3">
                    <div class="col">
                        <label for="Username">Username:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="username" placeholder="E.g: SJB-001" autofocus required>
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        </div>
                    </div>
                    <div class="col">
                        <label for="Email">Email:</label>
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                            <span class="input-group-text">@gmail.com</i></span>
                        </div>
                    </div>
                    <div class="mb-3"></div>
                </div>

                <div class="row gx-3">
                    <div class="col">
                        <label for="Gender">Gender:</label>
                        <select class="form-select" aria-label="Default select example" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="preferNTS">Prefer not to say</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="Status">Status:</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                            <option value="Divorced">Divorced</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="Nationality">Nationality:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="nationality" required>
                        </div>
                    </div>
                    <div class="mb-3"></div>
                </div>

                <div class="row gx-3">
                    <div class="col">
                        <label for="DateOfBirth">Date of Birth:</label>
                        <input type="date" name="dob" class="form-control" autofocus required>
                    </div>
                    <div class="col">
                        <label for="Password">Password:</label>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" autofocus required>
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                        </div>
                    </div>
                    <div class="col">
                        <label for="ConfirmPassword">Confirm Password:</label>
                        <div class="input-group">
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" autofocus required>
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                        </div>
                    </div>
                    <div class="mb-3"></div>
                </div>

                <div class="row gx-3">
                    <div class="col">
                        <label for="Address">Address:</label>
                        <input type="text" name="address" class="form-control" autofocus required>
                    </div>
                    <div class="col">
                        <label for="City">City:</label>
                        <div class="input-group">
                            <input type="text" name="city" class="form-control" autofocus required>
                        </div>
                    </div>
                    <div class="mb-3"></div>
                </div>

                <div class="row gx-3">
                    <div class="col">
                        <label for="Country">Country:</label>
                        <input type="text" name="country" class="form-control" autofocus required>
                    </div>

                    <div class="col">
                        <label for="Mobile">Mobile:</label>
                        <div class="input-group">
                            <input type="text" name="mobile" class="form-control" autofocus required>
                        </div>

                    </div>
                    <div class="col">
                        <label for="EmployeeType">Employee Type:</label>
                        <select name="emp_type" class="form-select" required>
                            <option value="Part Time Employee">Part-time Employee</option>
                            <option value="Intern">Intern</option>
                            <option value="Holiday Worker">Holiday Worker</option>
                            <option value="Permanent Position">Permanent Position</option>
                        </select>
                    </div>
                    <div class="mb-3"></div>
                </div>

                <div class="row gx-3">
                    <div class="col">
                        <label for="JoiningData">Data Joined:</label>
                        <div class="input-group">
                            <input type="date" class="form-control" name="joining_date" autofocus required>
                        </div>
                    </div>
                    <div class="col">
                        <label for="Department">Department:</label>
                        <select name="department" class="form-select" required>
                            <option value="Information Technology">Information Technology</option>
                            <option value="General Education">General Education</option>
                            <option value="AOM">AOM</option>
                            <option value="HRS">HRS</option>
                        </select>
                    </div>
                    <div class="mb-3"></div>
                </div>

                <div class="row gx-3">
                    <div class="col">
                        <label for="Photo">Photo Upload:</label>
                        <div class="input-group">
                            <input type="file" name="photo" class="form-control" accept="image/*">
                            <span class="input-group-text"><i class="fa-solid fa-camera"></i></span>
                        </div>
                    </div>

                    <div class="col">
                        <label for="AccountType">Account Type:</label>
                        <select name="usertype" class="form-select">
                            <option value="faculty">Faculty</option>
                            <option value="admin" disabled>Admin</option>
                        </select>
                    </div>
                    <div class="mb-3"></div>
                </div>

                <div class="btn-form-container">
                    <button type="submit" name="submit" class="btn-register">REGISTER</button>
                </div>
            </form>



            <div class="link-container">
                <p>Already have an account? <a href="login.php"><strong>Login Now.</strong></a></p>
            </div>
        </div>
    </div>

    <br>
    <footer class="my-footer">
        <div class="footer-content">
            All rights reserved 2024 &copy; <strong> Saint John Bosco Kalentong Branch</strong>
        </div>
    </footer>
</body>


</html>