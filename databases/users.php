<?php

function getUserById(int $uid): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT * FROM users WHERE uid =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $uid);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}