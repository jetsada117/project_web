<?php

function getAllEvents(): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT * FROM events";
    $result = $conn->query($sql);
    return $result;
}

function getEventWithOutId(int $uid): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT DISTINCT e.*
            FROM events e
            WHERE NOT EXISTS (
            SELECT 1 
            FROM enroll en 
            WHERE en.eid = e.eid 
            AND en.uid = ?)
            AND e.created_by != ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $uid, $uid);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function getEventById(int $eid): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT * FROM events WHERE eid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $eid);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function getAllEventById(int $id): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT DISTINCT * FROM events WHERE created_by = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function createEvent(String $name, String $description, String $category, String $event_date, String $start_time, $image_tmp, $image_name, int $uid): bool
{
    $conn = getConnection();

    $upload_path = 'eventimage/';

    if (!file_exists($upload_path)) {
        mkdir($upload_path, 0777, true);
    }

    $new_filename = uniqid() . '_' . $image_name;
    $image_path = $upload_path . $new_filename;

    if (move_uploaded_file($image_tmp, $image_path)) {
        $sql = "INSERT INTO events (name, description, category, event_date, start_time, image, created_by) VALUES (?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssi", $name, $description, $category, $event_date, $start_time, $image_path, $uid);
        $stmt->execute();
    }

    return $stmt->affected_rows > 0;
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

function updateEventWithImage(String $name, String $description, String $category, String $event_date, String $start_time, $image_tmp, $image_name, int $eid): bool
{
    $conn = getConnection();

    $upload_path = 'eventimage/';

    if (!file_exists($upload_path)) {
        mkdir($upload_path, 0777, true);
    }

    $new_filename = uniqid() . '_' . $image_name;
    $image_path = $upload_path . $new_filename;

    if (move_uploaded_file($image_tmp, $image_path)) {
        $sql = "UPDATE events SET name =?, description =?, category =?, event_date =?, start_time =?, image =? WHERE eid =?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssi", $name, $description, $category, $event_date, $start_time, $image_path, $eid);
        $stmt->execute();
    }
    return $stmt->affected_rows > 0;
}
