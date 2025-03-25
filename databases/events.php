<?php
function getAllEvents()
{
    $conn = getConnection();
    $sql = "SELECT * FROM events";
    $result = $conn->query($sql);
    return $result;
}

function getEventWithOutId(int $uid)
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

function getEventById(int $eid)
{
    $conn = getConnection();
    $sql = "SELECT * FROM events WHERE eid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $eid);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function getAllEventById(int $id)
{
    $conn = getConnection();
    $sql = "SELECT DISTINCT * FROM events WHERE created_by = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function createEventImage(String $name, String $description, String $category, String $event_date, String $start_time, $image_tmp, $image_name, $image_more_tmp, $image_more_names, int $uid): bool
{
    $conn = getConnection();
    $upload_path = 'eventimage/';

    if (!file_exists($upload_path)) {
        mkdir($upload_path, 0777, true);
    }

    $new_filename = uniqid() . '_' . $image_name;
    $image_path = $upload_path . $new_filename;

    if (!move_uploaded_file($image_tmp, $image_path)) {
        return false;
    }

    $sql = "INSERT INTO events (name, description, category, event_date, start_time, image, created_by) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $name, $description, $category, $event_date, $start_time, $image_path, $uid);
    $stmt->execute();

    if ($stmt->affected_rows <= 0) {
        return false;
    }

    $event_id = $stmt->insert_id;

    if (is_array($image_more_tmp) && !empty($image_more_tmp)) {
        foreach ($image_more_tmp as $key => $tmp_name) {
            $new_more_filename = uniqid() . '_' . $image_more_names[$key];
            $image_more_path = $upload_path . $new_more_filename;

            if (move_uploaded_file($tmp_name, $image_more_path)) {
                $sql_img = "INSERT INTO images (image_path, event_id) VALUES (?, ?)";
                $stmt_img = $conn->prepare($sql_img);
                $stmt_img->bind_param("si", $image_more_path, $event_id);
                $stmt_img->execute();
            }
        }
    }
    return true;
}

function updateEventWithOutImage(String $name, String $description, String $category, String $event_date, String $start_time, int $eid): bool
{
    $conn = getConnection();
    $sql = "UPDATE events SET name =?, description =?, category =?, event_date =?, start_time =? WHERE eid =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $name, $description, $category, $event_date, $start_time, $eid);
    $result = $stmt->execute();
    return $result;
}

function updateEventWithImages(
    String $name,
    String $description,
    String $category,
    String $event_date,
    String $start_time,
    $image_tmp,
    $image_name,
    $image_more_tmp,
    $image_more_names,
    int $eid
): bool {
    $conn = getConnection();
    $upload_path = 'eventimage/';

    if (!file_exists($upload_path)) {
        mkdir($upload_path, 0777, true);
    }

    $new_filename = uniqid() . '_' . $image_name;
    $image_path = $upload_path . $new_filename;

    if (!move_uploaded_file($image_tmp, $image_path)) {
        return false;
    }

    $sql_get_old = "SELECT image FROM events WHERE eid = ?";
    $stmt_get_old = $conn->prepare($sql_get_old);
    $stmt_get_old->bind_param("i", $eid);
    $stmt_get_old->execute();
    $stmt_get_old->bind_result($old_image_path);
    $stmt_get_old->fetch();
    $stmt_get_old->close();

    $sql = "UPDATE events SET name = ?, description = ?, category = ?, event_date = ?, 
            start_time = ?, image = ? WHERE eid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $name, $description, $category, $event_date, $start_time, $image_path, $eid);
    $stmt->execute();

    if ($stmt->affected_rows < 0) {
        return false;
    }

    if (!empty($old_image_path) && file_exists($old_image_path) && $old_image_path != $image_path) {
        unlink($old_image_path);
    }

    $sql_delete = "DELETE FROM images WHERE event_id = ?";
    $stmt_delete = $conn->prepare($sql_delete);
    $stmt_delete->bind_param("i", $eid);
    $stmt_delete->execute();

    if (is_array($image_more_tmp) && !empty($image_more_tmp)) {
        foreach ($image_more_tmp as $key => $tmp_name) {
            $new_more_filename = uniqid() . '_' . $image_more_names[$key];
            $image_more_path = $upload_path . $new_more_filename;

            if (move_uploaded_file($tmp_name, $image_more_path)) {
                $sql_img = "INSERT INTO images (image_path, event_id) VALUES (?, ?)";
                $stmt_img = $conn->prepare($sql_img);
                $stmt_img->bind_param("si", $image_more_path, $eid);
                $stmt_img->execute();
            }
        }
    }

    return true;
}

function getImages(int $eid)
{
    $conn = getConnection();
    $sql = "SELECT * FROM images WHERE event_id =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $eid);
    $stmt->execute();
    return $stmt->get_result();
}

function searchByName(string $name)
{
    $conn = getConnection();
    $sql = "SELECT DISTINCT * FROM events WHERE name LIKE ?";
    $stmt = $conn->prepare($sql);
    $search_name = "%{$name}%";
    $stmt->bind_param("s", $search_name);
    $stmt->execute();
    return $stmt->get_result();
}

function searchByDate(String $start_date, String $end_date)
{
    $conn = getConnection();
    $sql = "SELECT DISTINCT * FROM events WHERE event_date BETWEEN ? AND ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $start_date, $end_date);
    $stmt->execute();
    return $stmt->get_result();
}

function searchAll(String $name, String $start_date, String $end_date)
{
    $conn = getConnection();
    $sql = "SELECT DISTINCT * FROM events WHERE name LIKE? AND event_date BETWEEN? AND?";
    $stmt = $conn->prepare($sql);
    $search_name = "%{$name}%";
    $stmt->bind_param("sss", $search_name, $start_date, $end_date);
    $stmt->execute();
    return $stmt->get_result();
}
