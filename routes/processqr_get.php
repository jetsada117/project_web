<?php

$eid = $_GET['eid'];
$uid = $_GET['uid'];
$otp = $_GET['otp'];

$result = getOTP($uid, $eid);

$row = $result->fetch_assoc();

if ($otp == $row['otp']) {
    $checkin = updateCheckin($uid, $eid);
    echo 'checkin complete';
    renderView('scanqr_get');
}