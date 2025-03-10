<?php
$eid = $_GET['eid'];

if (!isset($_SESSION['otp']) || !isset($_SESSION['otp_time']) || (time() - $_SESSION['otp_time']) > 180) {
    $otp = "";
    for ($i = 0; $i < 6; $i++) {
        $otp .= random_int(0, 9);
    }

    $_SESSION['otp'] = $otp;
    $_SESSION['otp_time'] = time();
}

renderView('checkin_get', ['eid' => $eid]);
