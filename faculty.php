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

    <div class="grid-container">

        <!-----HEADER------>

        <header class="header">
            <div class="header-right">
                <div class="info-box">
                    <i class="fa-regular fa-user"></i>
                    <div class="user-text">
                        <p>Welcome, User</p>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn-dropdown dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>

        <!-----HEADER------>

        <!-----SIDEBAR------>

        <aside id="sjb-sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <img src="css/sjb-logo.png" alt="SJB Logo">
                </div>
            </div>

            <!-----php echo isset($_GET['page']) && $_GET['page'] === 'dashboard' ? 'active' : ''; ?>---->

            <ul class="sidebar-list">
                <li class="sidebar-list-item active" data-page="dashboard" onclick="changePage('dashboard')">
                    <i class="fa-solid fa-chart-line"></i>DASHBOARD
                </li>
                <li class="sidebar-list-item" data-page="students" onclick="changePage('students')">
                    <i class="fa-solid fa-graduation-cap"></i> STUDENTS
                </li>
                <li class="sidebar-list-item" onclick="changePage('reports')">
                    <i class="fa-solid fa-file"></i> REPORTS
                </li>
                <li class="sidebar-list-item" onclick="changePage('rfid')">
                    <i class="fa-brands fa-nfc-symbol"></i> RFID SCAN
                </li>
                <li class="sidebar-list-item" onclick="changePage('student-reg')">
                    <i class="fa-solid fa-file-pen"></i> REGISTRATION
                </li>
            </ul>
        </aside>

        <!-----SIDEBAR------>


        <main class="main-container">

            <!-- Dashboard Page -->
            <div id="dashboard-page" class="page-content">

                <div class="main-title">
                    <h1>DASHBOARD</h1>
                </div>

                <div class="main-cards">

                    <div class="card">
                        <div class="card-inner">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <p>STUDENTS</p>
                        </div>
                        <h2>150</h2>
                    </div>

                    <div class="card">
                        <div class="card-inner">
                            <i class="fa-solid fa-school"></i>
                            <p>COURSES</p>
                        </div>
                        <h2>10</h2>
                    </div>

                    <div class="card">
                        <div class="card-inner">
                            <i class="fa-solid fa-file-excel"></i>
                            <p>REPORTS GENERATED</p>
                        </div>
                        <h2>20</h2>
                    </div>

                    <div class="card">
                        <div class="card-inner">
                            <i class="fa-solid fa-book"></i>
                            <p>SUBJECTS</p>
                        </div>
                        <h2>10</h2>
                    </div>

                </div>

                <div class="charts">

                    <div class="charts-card">
                        <p class="chart-title">STUDENTS ATTENDANCE STATISTICS</p>
                        <div id="bar-chart"></div>
                    </div>

                    <div class="charts-card">
                        <p class="chart-title">STUDENT COUNT FOR COURSES</p>
                        <div id="area-chart"></div>
                    </div>

                </div>

            </div>

            <!-- End of Dashboard Page -->

            <!-- Students Page -->
            <div id="students-page" class="page-content">

                <div class="main-title">
                    <h1>STUDENTS</h1>
                </div>

                <div class="container-fluid table-container">
                    <table class="table student-table">
                        <thead>
                            <tr>
                                <th scope="col">RFID</th>
                                <th scope="col">Student ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Middle Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Course</th>
                                <th scope="col">Year Level</th>
                                <th scope="col">Semester</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">EA23UIO</th>
                                <td>2022-00130</td>
                                <td>Mark Francis</td>
                                <td>Perez</td>
                                <td>De Guzman</td>
                                <td>Information Technology</td>
                                <td>2nd Year</td>
                                <td>3rd Semester</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!--REVISE PAGINATION IF NEEDED FOR THE TABLE -MARK -->
                <nav class="nav-pagination">
                    <ul class="pagination gap-2">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>

            <!-- End of Student Page -->

            <!-- Reports Page -->
            <div id="reports-page" class="page-content">

                <div class="main-title">
                    <h1>REPORTS</h1>
                </div>

                <div class="container-fluid button-container">
                    <a href="">
                        <button class="report-button" title="Print File">
                            <i class="fa-solid fa-print"></i>
                        </button>
                    </a>
                    <a href="">
                        <button class="report-button" title="Download File">
                            <i class="fa-solid fa-download"></i>
                        </button>
                    </a>
                </div>

                <br>

                <div class="container-fluid report-main">
                    <div class="report-container gap-4">
                        <div class="container-fluid left-report">
                            <h3><strong>GENERATED REPORTS</strong></h3>
                            <div class="generated-reports">
                                <p>May 31, 2024_Mr_Savandal_Subject_Report</p>
                            </div>
                            <div class="generated-reports">
                                <p>May 31, 2024_Mr_Garcia_Subject_Report</p>
                            </div>
                            <div class="generated-reports">
                                <p>June 1, 2024_Mr_Crisostomo_Subject_Report</p>
                            </div>
                            <div class="generated-reports">
                                <p>May 31, 2024_Mr_Crisostomo_Subject_Report</p>
                            </div>
                            <div class="generated-reports">
                                <p>May 31, 2024_Mr_Crisostomo_Subject_Report</p>
                            </div>
                        </div>
                        <div class="container-fluid right-report">
                            <h3><strong>PREVIEW</strong></h3>

                        </div>
                    </div>
                </div>
            </div>

            <!-- End of Reports Page -->

            <!-- RFID SCAN Page -->
            <div id="rfid-page" class="page-content">

                <div class="main-title">
                    <h1>RFID SCAN</h1>
                </div>

                <div class="container-fluid subject-container">
                    <div class="subject-changer">
                        <h3>SUBJECT 1</h3>
                    </div>
                    <div class="subject-changer">
                        <h3>SUBJECT 2</h3>
                    </div>
                    <div class="subject-changer">
                        <h3>SUBJECT 3</h3>
                    </div>
                    <div class="subject-changer">
                        <h3>SUBJECT 4</h3>
                    </div>
                    <div class="subject-changer">
                        <h3>SUBJECT 5</h3>
                    </div>
                </div>

                <br>

                <div class="main-title">
                    <h1>STUDENTS ATTENDED</h1>
                </div>
                <div class="container-fluid table-container">

                    <table class="table student-table">
                        <thead>
                            <tr>
                                <th scope="col">RFID</th>
                                <th scope="col">Student ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Middle Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Course</th>
                                <th scope="col">Year Level</th>
                                <th scope="col">Semester</th>
                                <th scope="col">Subject Attended</th>
                                <th scope="col">Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">EA23UIO</th>
                                <td>2022-00130</td>
                                <td>Mark Francis</td>
                                <td>Perez</td>
                                <td>De Guzman</td>
                                <td>Information Technology</td>
                                <td>2nd Year</td>
                                <td>3rd Semester</td>
                                <td>Web Development</td>
                                <td>05/31/2024 || 10:23am</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- End of RFID SCAN Page -->

            <!-- Student Registration Page -->
            <div id="student-reg-page" class="page-content">

                <div class="main-title">
                    <h1>STUDENT REGISTRATION</h1>
                </div>

                <br>

                <div class="reg-container">
                    <form action="#" class="form-login" method="POST" enctype="multipart/form-data">
                        <div class="row gx-3">
                            <div class="col">
                                <p><strong>Please tap your RFID to register</strong></p>
                                <label for="UID">UID:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="uid" placeholder="E.g: Juan" autofocus required>
                                </div>
                            </div>
                            <div class="col">

                            </div>
                            <div class="mb-5"></div>
                        </div>
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
                                    <input type="text" class="form-control" name="middle_name" placeholder="E.g: Perez" autofocus required>
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
                                <label for="Email">Email:</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                                    <span class="input-group-text">@gmail.com</i></span>
                                </div>
                            </div>
                            <div class="col">
                                <label for="DateOfBirth">Date of Birth:</label>
                                <input type="date" name="dob" class="form-control" autofocus required>
                            </div>
                            <div class="mb-3"></div>
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
                                <label for="YearLevel">Year Level:</label>
                                <select name="yr_lvl" class="form-select" required>
                                    <option value="Grade 12">Grade 12</option>
                                    <option value="First Year">First Year</option>
                                    <option value="2nd Year">Second Year</option>
                                    <option value="3rd Year">Third Year</option>
                                </select>
                            </div>
                            <div class="mb-3"></div>
                        </div>

                        <div class="row gx-3">
                            <div class="col">
                                <label for="Semester">Semester:</label>
                                <select name="semester" class="form-select" required>
                                    <option value="First Semester">First Semester</option>
                                    <option value="Second Semester">Second Semester</option>
                                    <option value="Third Semester">Third Semester</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="Courses">Courses:</label>
                                <select name="courses" class="form-select" required>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Hotel and Restaurant Management">Hotel and Restaurant Management</option>
                                    <option value="AOM">Automated Office Management</option>
                                    <option value="HRS">BS HRS</option>
                                    <option value="BSIT">BS IT</option>
                                </select>
                            </div>
                            <div class="mb-3"></div>
                        </div>

                        <div class="btn-form-container">
                            <button type="submit" class="btn-register">REGISTER</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- End of Student Registration Page -->

        </main>
        <!-----MAIN------>

        <!-----JAVASCRIPT JS------>
        <script src="sidebar.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.44.0/apexcharts.min.js"></script>


        <script>
            var productData = "";
            console.log(productData);
            /*FOR CHARTS*/

            var barChartOptions = {
                series: [{
                    data: productData.map((item) => ({
                        x: item.name,
                        y: item.count,
                    })),
                }, ],
                chart: {
                    type: "bar",
                    height: 350,
                    toolbar: {
                        show: false,
                    },
                },
                colors: [
                    "rgb(0, 117, 167)",
                    "rgb(173, 20, 20)",
                ],

                plotOptions: {
                    bar: {
                        distributed: true,
                        borderRadius: 4,
                        horizontal: false,
                        column: "40%",
                    },
                },

                dataLabels: {
                    enabled: false,
                },

                legend: {
                    show: false,
                },

                xaxis: {
                    categories: productData.map(item => item.name),
                },

                yaxis: {
                    title: {
                        text: "Quantity",
                    },
                },
            };

            var barChart = new ApexCharts(
                document.querySelector("#bar-chart"),
                barChartOptions
            );
            barChart.render();
        </script>
    </div>

</body>

</html>