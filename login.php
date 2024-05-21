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
                    <input type="text" class="form-control" name="" placeholder="E.g: SJB-001" autofocus required>
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <label for="password"><strong>Password:</strong></label>
                <div class="input-group">
                    <input type="password" class="form-control" name="" required>
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <div class="btn-form-container">
                    <button type="submit" class="btn-login">LOGIN</button>
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