<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <script src="https://kit.fontawesome.com/92cde7fc6f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="faculty.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg py-3 navigation-bar">
        <div class="container-lg nav-content">
            <div class="title-box">
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable body scrolling</button>
            </div>

            <div class="profile-box">
                <p class="d-none d-lg-block">Welcome, <!--<?php echo $_SESSION['user_first_name'] ?></p>-->
                    <?php
                    //Check if the photo path is available in the session
                    if (isset($_SESSION['user_photo'])) {
                        $photoPath = $_SESSION['user_photo'];
                        // Display the photo using the retrieved path
                        echo '<img src="' . $photoPath . '" alt="User Photo"  class ="user-photo d-none d-lg-inline">';
                    } else {
                        echo 'No photo available!';
                    }
                    ?>
                <div class="btn-group">
                    <button type="button" class="btn-dropdown dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></button>
                    <ul class="dropdown-menu dropdown-menu-end" style="margin-top: 30px;">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start off-sidebar" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="sidebar-logo">
            <img src="css/sjb-logo.png" alt="">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>Try scrolling the rest of the page to see this option in action.</p>
        </div>
    </div>

</body>

</html>