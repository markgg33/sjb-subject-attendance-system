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
    <div class="main-container">
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
                            <input type="text" class="form-control" name="emp_username" placeholder="E.g: SJB-001" autofocus required>
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
                            <input type="password" name="emp_pass" class="form-control" placeholder="Enter Password" autofocus required>
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
                        <label for="DateOfBirth">Date of Birth:</label>
                        <input type="date" name="dob" class="form-control" autofocus required>
                    </div>
                    <div class="col">
                        <label for="Password">Password:</label>
                        <div class="input-group">
                            <input type="password" name="emp_pass" class="form-control" placeholder="Enter Password" autofocus required>
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
                    <div class="col">
                        <label for="State">State:</label>
                        <div class="input-group">
                            <input type="text" name="state" class="form-control">
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
                        <div class="input-group">
                            <input type="text" class="form-control" name="department" autofocus required>
                        </div>
                    </div>
                    <div class="mb-3"></div>
                </div>

                <div class="row gx-3">
                    <div class="col">
                        <label for="Photo">Photo Upload:</label>
                        <div class="input-group">
                            <input type="file" name="photo" class="form-control" accept="image/*" autofocus required>
                            <span class="input-group-text"><i class="fa-solid fa-camera"></i></span>
                        </div>
                    </div>

                    <div class="col">
                        <label for="AccountType">Account Type:</label>
                        <select name="usertype" class="form-select">
                            <option value="user">Faculty</option>
                            <option value="admin" disabled>Admin</option>
                        </select>
                    </div>
                    <div class="mb-3"></div>
                </div>

                <div class="btn-form-container">
                    <button type="submit" class="btn-register">REGISTER</button>
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