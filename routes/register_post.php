<?php
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];

$result = insertUser($user_name, $email, $password, $phone, $gender, $dob);

if ($result) {
    renderView('login_get');
}