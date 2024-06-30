<?php

//FOR PAGINATION CODES

global $start, $rows_per_page;
$start = 0;
$rows_per_page = 13;

//get total nr of rows
$records = $conn->query("SELECT * FROM students");
$nr_of_rows = $records->num_rows;

//calculating the nr of pages 

$pages = ceil($nr_of_rows / $rows_per_page);

if(isset($_GET['page-nr'])){
    $page = $_GET['page-nr'] - 1;
    $start = $page * $rows_per_page;
}

