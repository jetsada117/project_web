<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

$user_name = $_POST['user_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$uid = $_SESSION['uid'];

$image_tmp = $_FILES['user_image']['tmp_name'];
$image_name = $_FILES['user_image']['name'];
$result = updateUserWithImagePath($uid, $user_name, $email, $phone, $gender, $dob, $image_tmp, $image_name);

$result = getUserById($uid);
renderView('profile_get', ['user' => $result]);
