<?php
$num1 = (string)$_POST['num1'];
$num2 = (string)$_POST['num2'];
$num3 = (string)$_POST['num3'];
$num4 = (string)$_POST['num4'];
$num5 = (string)$_POST['num5'];
$num6 = (string)$_POST['num6'];

$uid = $_SESSION['uid'];
$eid = $_GET['eid'];

$number = $num1 . $num2 . $num3 . $num4 . $num5 . $num6;

if ($number == $_SESSION['otp']) {
    updateCheckin($uid,$eid);
    $result = getHistoryEnrolL($uid);
    if ($result) {
        renderView('history_get', ['history' => $result]);
    }
} else {
    if ($result) {
        renderView('checkin_get');
    }
}
