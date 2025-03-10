<?php
$email = $_POST['email'];
$email = trim($email);
$password = $_POST['password'];
$password = trim($password);
$result = login($email, $password);
if($result){
    $unix_timestamp = time();
    $_SESSION['timestamp'] = $unix_timestamp;
    $_SESSION['uid'] = $result['uid'];
    $event = getAllEvents();
    renderView('events_get', ['events' => $event]);
}
else
{
    $_SESSION['message'] = 'Email or Password invalid';
    renderView('login_get');
    unset($_SESSION['message']);
    unset($_SESSION['timestamp']);
}