<?php
function login(String $email, String $password): array|bool
{
    $conn = getConnection();
    $sql = 'select * from users where email = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 0) {
        return false;
    }
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        return $row;
    } else {
        return false;
    }
}

function insertUser(String $user_name, String $gmail, String $password, String $phone, String $gender, String $dob): bool
{
    $conn = getConnection();
    $sql = 'INSERT INTO users (user_name, email, password, phone, gender, date_of_birth) VALUES (?,?,?,?,?,?)';
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $user_name, $gmail, $hashed_password, $phone, $gender, $dob);
    return $stmt->execute();

    if ($stmt->affected_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function insertUserWithImagePath($user_name, $email, $password, $phone, $gender, $dob, $image_tmp, $image_name)
{
    $conn = getConnection();

    $new_filename = uniqid() . '_' . $image_name;
    $upload_path = 'uploads/';

    if (!file_exists($upload_path)) {
        mkdir($upload_path, 0777, true);
    }
    move_uploaded_file($image_tmp, $upload_path . $new_filename);
    $image_path = $upload_path . $new_filename;

    $stmt = $conn->prepare("INSERT INTO users (user_name, email, password, phone, gender, date_of_birth, image) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt->bind_param("sssssss", $user_name, $email, $hashed_password, $phone, $gender, $dob, $image_path);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function updateUserWithOutPassword(int $uid, string $user_name, string $email, string $phone, string $gender, string $dob, $image_tmp = null, $image_name = null)
{
    $conn = getConnection();

    if ($image_tmp && $image_name) {
        $new_filename = uniqid() . '_' . $image_name;
        $upload_path = 'uploads/';

        if (!file_exists($upload_path)) {
            mkdir($upload_path, 0777, true);
        }

        move_uploaded_file($image_tmp, $upload_path . $new_filename);
        $image_path = $upload_path . $new_filename;

        $stmt = $conn->prepare("UPDATE users SET user_name = ?, email = ?, phone = ?, gender = ?, date_of_birth = ?, image = ? WHERE uid = ?");
        $stmt->bind_param("ssssssi", $user_name, $email, $phone, $gender, $dob, $image_path, $uid);
    } else {
        $stmt = $conn->prepare("UPDATE users SET user_name = ?, email = ?, phone = ?, gender = ?, date_of_birth = ? WHERE uid = ?");
        $stmt->bind_param("sssssi", $user_name, $email, $phone, $gender, $dob, $uid);
    }

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        return true;
    } else {
        return false;
    }
}


function logout(): void
{
    unset($_SESSION['timestamp']);
    unset($_SESSION['uid']);
}
