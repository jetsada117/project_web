<?php

function insertEnroll(int $uid, int $eid): bool
{
    $conn = getConnection();
    $status = 'pending';

    $check = "SELECT * FROM enroll WHERE uid = ? AND eid = ?";
    $stmt = $conn->prepare($check);
    $stmt->bind_param("ii", $uid, $eid);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return false;
    }

    $sql = "INSERT INTO enroll (uid, eid, status) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iis", $uid, $eid, $status);
    $stmt->execute();

    if ($stmt->affected_rows > 0)
    {
        return true;
    } else {
        return false;
    }
}

function updateStatus(int $uid, int $eid, String $status): bool
{
    $conn = getConnection();
    $sql = "UPDATE enroll SET status =? WHERE uid =? AND eid =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sii", $status, $uid, $eid);
    return $stmt->execute();
}

function getMemberOfEvent(int $eid): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT DISTINCT u.*, e.eid, e.status
            FROM users u
            JOIN enroll e ON u.uid = e.uid
            WHERE e.eid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $eid);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function getEnrollmentsByUserId(int $uid): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT e.*
            FROM enroll e
            WHERE e.uid =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $uid);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function getRequestEnrollAllEvents(int $uid): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT e.status, e.eid, u.uid, u.user_name, u.email, u.phone, u.gender, 
            ev.name, TIMESTAMPDIFF(YEAR, u.date_of_birth, CURDATE()) AS age
            FROM enroll e
            JOIN users u ON e.uid = u.uid
            JOIN events ev ON e.eid = ev.eid
            WHERE e.status = 'pending' AND ev.created_by = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $uid);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function deleteEnroll(int $uid, int $eid)
{
    $conn = getConnection();
    $sql = "DELETE FROM enroll WHERE uid =? AND eid =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $uid, $eid);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function getAllFeedbackEvent(int $eid): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT u.user_name, e.feedback FROM enroll e join users u on e.uid = u.uid where e.eid = ? and e.feedback is not null";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $eid);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function updataFeedbackEvent(String $feedback, int $eid, int $uid): bool
{
    $conn = getConnection();
    $sql = "UPDATE enroll SET feedback = ? WHERE uid = ? AND eid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sii", $feedback, $uid, $eid);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function updateRatingEvent(int $rating, $uid, int $eid)
{
    $conn = getConnection();
    $sql = "UPDATE enroll SET rating =? WHERE uid =? AND eid =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iii", $rating, $uid, $eid);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function getTopFeedbackEventByUser($uid): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT e.eid, ev.name, ev.event_date,
            AVG(e.rating) AS average_rating, 
            COUNT(e.uid) AS total_participants
            FROM enroll e
            JOIN events ev ON e.eid = ev.eid
            WHERE e.feedback IS NOT NULL AND ev.created_by = ?
            GROUP BY e.eid, ev.name
            ORDER BY average_rating DESC
            LIMIT 5";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $uid);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function getHistoryEnroll($uid)
{
    $conn = getConnection();
    $sql = "SELECT e.*, en.* FROM events e
            JOIN enroll en ON e.eid = en.eid
            WHERE en.uid = ?
            ORDER BY en.enroll_date DESC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $uid);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function getUserFeedbackById(int $uid,int $eid): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT * FROM enroll WHERE uid =? AND eid =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $uid, $eid);
    $stmt->execute();
    $result = $stmt->get_result();

    return $result;
}

function updateUserFeedback(string $feedback, float $rating, int $uid, int $eid): bool
{
    $conn = getConnection();
    $sql = "UPDATE enroll SET feedback = ?, rating = ? WHERE uid = ? AND eid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdii", $feedback, $rating, $uid, $eid);
    $stmt->execute();

    return $stmt->affected_rows > 0;
}

function updateCheckin(int $uid,int $eid)
{
    $conn = getConnection();
    $sql = "UPDATE enroll SET is_participated = 1 WHERE uid = ? AND eid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $uid, $eid);
    $stmt->execute();
}
