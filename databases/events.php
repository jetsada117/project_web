<?php

function getAllEvents(): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT * FROM events";
    $result = $conn->query($sql);
    return $result;
}

function getAllEventById(int $id): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT * FROM events WHERE created_by = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function createEvent(String $name, String $description,String $category, String $event_date, String $start_time, String $image, int $uid): bool
{
    $conn = getConnection();
    $sql = "INSERT INTO events (name, description, category, event_date, start_time, image, created_by) VALUES (?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $name, $description, $category, $event_date, $start_time, $image, $uid);
    $result = $stmt->execute();
    return $result;
}

function updateEvent(int $eid, String $name, String $description, String $category, String $event_date, String $start_time, String $image): bool
{
    $conn = getConnection();
    $sql = "UPDATE events SET name =?, description =?, category =?, event_date =?, start_time =?, image =? WHERE eid =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $name, $description, $category, $event_date, $start_time, $image, $eid);
    $result = $stmt->execute();
    return $result;
}

function getEventById(int $eid): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT * FROM events WHERE eid =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $eid);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function getMemberOfEvent(int $eid): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT * FROM users WHERE uid IN (SELECT uid FROM events WHERE eid = ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $eid);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}