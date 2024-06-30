<?php
include "config.php";

if (isset($_POST['submit'])) {
    // Sanitize and validate input data
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $mobile = $_POST['mobile'];
    $year_lvl = $_POST['year_lvl'];
    $semester = $_POST['semester'];
    $courses = $_POST['courses'];

    // Check if RFID already exists
    $check_query = "SELECT COUNT(*) AS count FROM students WHERE id = '$id'";
    $check_result = mysqli_query($conn, $check_query);

    if ($check_result) {
        $check_row = mysqli_fetch_assoc($check_result);
        $rfid_count = $check_row['count'];

        if ($rfid_count > 0) {
            // RFID already exists, show simple text popup
            echo '<script>alert("RFID already exists!"); window.history.back();</script>';
            exit; // Stop further execution
        } else {
            // Proceed to insert new student data
            $insert_query = "INSERT INTO students (id, first_name, middle_name, last_name, email, dob, gender, status, nationality, address, city, country, mobile, year_lvl, semester, courses) 
                            VALUES ('$id', '$first_name', '$middle_name', '$last_name', '$email', '$dob', '$gender', '$status', '$nationality', '$address', '$city', '$country', '$mobile', '$year_lvl', '$semester', '$courses')";

            if (mysqli_query($conn, $insert_query)) {
                // Student inserted successfully, show success message
                echo '<script>alert("Student Registered Successfully!"); window.location.href = "faculty.php";</script>';
                exit; // Stop further execution
            } else {
                // Error inserting student, show error message
                echo '<script>alert("Registration Failed: ' . mysqli_error($conn) . '"); window.history.back();</script>';
                exit; // Stop further execution
            }
        }
    } else {
        // Error in check query, show database error message
        echo '<script>alert("Database Error: ' . mysqli_error($conn) . '"); window.history.back();</script>';
        exit; // Stop further execution
    }
} else {
    // Redirect if the form was not submitted properly
    header('Location: student-reg.php');
    exit();
}
?>
