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
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- End of Student Page -->

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