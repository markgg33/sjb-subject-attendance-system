<?php


function getUserCount($tableName)
{
    global $conn;
    $sql = "SELECT COUNT(*) as count FROM $tableName";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['count'];
    } else {
        return 0;
    }
}

function getStudentData()
{
    global $conn;

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = [
                'id' => $row['id'],
                'first_name' => $row['first_name'],
                'middle_name' => $row['middle_name'],
                'last_name' => $row['last_name'],
                'email' => $row['email'],
                /*'dob' => $row['dob'],
                'gender' => $row['gender'],
                'status' => $row['status'],
                'nationality' => $row['nationality'],
                'address' => $row['address'],
                'city' => $row['city'],
                'country' => $row['country'],
                'mobile' => $row['mobile'],*/
                'year_lvl' => $row['year_lvl'],
                'semester' => $row['semester'],
                'courses' => $row['courses']
            ];
        }
        return $data;
    } else {
        return [];
    }
}

function getStudentCountByCourse()
{
    global $conn;
    $sql = "SELECT courses, COUNT(*) as count FROM students GROUP BY courses";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = [
                'course' => $row['courses'],
                'count' => (int)$row['count']
            ];
        }
        return $data;
    } else {
        return [];
    }
}

// Function to get faculty subjects based on faculty ID
function getFacultySubjects($faculty_id)
{
    global $conn;

    // Sanitize the faculty_id to prevent SQL injection
    $faculty_id = mysqli_real_escape_string($conn, $faculty_id);

    // Prepare the SQL query to fetch subjects assigned to the faculty
    $sql = "SELECT subjects.subject_code, subjects.subject_title
            FROM faculty_subjects
            INNER JOIN subjects ON faculty_subjects.subject_id = subjects.subject_id
            WHERE faculty_subjects.faculty_id = '$faculty_id'";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $subjects = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $subjects[] = $row;
        }
        return $subjects;
    } else {
        return [];
    }
}
