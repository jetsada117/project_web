<?php

function insertEnroll(int $uid, int $eid) {
    $conn = getConnection();
    $status = 'pending';
    $sql = "INSERT INTO enroll (uid, eid, status) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iis", $uid, $eid, $status);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        return true;
    } else {
        return false;
    }
}