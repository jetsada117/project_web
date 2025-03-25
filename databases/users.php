<?php

function getUserById(int $uid)
{
    $conn = getConnection();
    $sql = "SELECT * FROM users WHERE uid =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $uid);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function insertUser(String $user_name, String $gmail, String $password, String $phone, String $gender, String $dob): bool
{
    $conn = getConnection();
    $sql = 'INSERT INTO users (user_name, email, password, phone, gender, date_of_birth) VALUES (?,?,?,?,?,?)';
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $user_name, $gmail, $hashed_password, $phone, $gender, $dob);
    $result = $stmt->execute();
    
    if ($stmt->affected_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function insertUserWithImagePath($user_name, $email, $password, $phone, $gender, $dob, $image_tmp, $image_name): bool
{
    $conn = getConnection();
    $new_filename = uniqid(). '_'. $image_name;
    $upload_path = 'uploads/';
    if (!file_exists($upload_path)) {
        mkdir($upload_path, 0777, true);
    }
    move_uploaded_file($image_tmp, $upload_path. $new_filename);
    $image_path = $upload_path. $new_filename;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = 'INSERT INTO users (user_name, email, password, phone, gender, date_of_birth, image) VALUES (?,?,?,?,?,?,?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $user_name, $email, $hashed_password, $phone, $gender, $dob, $image_path);
    $result = $stmt->execute();
    if ($stmt->affected_rows > 0) {
        return true;
    } else {
        return false;
    }
}