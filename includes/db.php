<?php

function getConnection():mysqli
{
    $hostname = 'localhost';
    $dbName = 'project_web';
    $username = 'project_web';
    $password = '123***';
    $conn = new mysqli($hostname, $username, $password, $dbName);
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