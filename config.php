<?php

$conn = mysqli_connect('localhost', 'root', 'P@ssword3309807', 'rfid_system_db');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


date_default_timezone_set('Asia/Manila');