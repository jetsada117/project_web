<?php

function getConnection():mysqli
{
    $hostname = 'localhost';
    $dbName = 'projectwe1_';
    $username = 'projectwe1_user';
    $password = '9gwUq8Me4!qB_j4';
    $conn = new mysqli($hostname, $username, $password, $dbName);
    mysqli_set_charset($conn, 'utf8mb4');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

require_once DATABASE_DIR . '/users.php';
require_once DATABASE_DIR . '/authen.php';
require_once DATABASE_DIR . '/events.php';
require_once DATABASE_DIR . '/enroll.php';
?>