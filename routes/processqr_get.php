<?php

$eid = $_GET['eid'];
$uid = $_GET['uid'];
$otp = $_GET['otp'];

$result = getOTP($uid, $eid);
$data = getUserById($uid);

$row = $result->fetch_assoc();
$user = $data->fetch_assoc();

if ($otp == $row['otp']) {
    $checkin = updateCheckin($uid, $eid);
    $_SESSION['message'] = 'ผู้ใช้ '.$user['user_name'].' เช็คชื่อเสร็จเรียบร้อย';
    renderView('scanqr_get');
}