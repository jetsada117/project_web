<?php
function login(String $email, String $password)
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

function logout(): void
{
    unset($_SESSION['timestamp']);
    unset($_SESSION['uid']);
    unset($_SESSION['otp']);
    unset($_SESSION['otp_time']);
}
