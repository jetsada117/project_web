<?php

function getConnection():mysqli
{
    $hostname = 'https://ac6f-223-206-218-52.ngrok-free.app';
    $dbName = 'project_web';
    $username = 'project_web';
    $password = '123***';
    $conn = new mysqli($hostname, $username, $password, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        echo 'Connection completed';
    }
    return $conn;
}

require_once DATABASE_DIR . '/users.php';