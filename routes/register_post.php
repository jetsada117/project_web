<?php
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];

// การใช้งาน
if(isset($_FILES['user_image']) && $_FILES['user_image']['error'] == 0) {
    $image_tmp = $_FILES['user_image']['tmp_name'];
    $image_name = $_FILES['user_image']['name'];
    $result = insertUserWithImagePath($user_name, $email, $password, $phone, $gender, $dob, $image_tmp, $image_name);
    renderView('login_get');
} else {
    $result = insertUser($user_name, $email, $password, $phone, $gender, $dob);
    renderView('login_get');
}