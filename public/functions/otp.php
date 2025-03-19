<?php
function generateOTP($length = 6)
{
    $otp = "";
    for ($i = 0; $i < $length; $i++) {
        $otp .= random_int(0, 9);
    }

    return $otp;
}

function getOTP() {
    if (!isset($_SESSION['otp'])) {
        $_SESSION['otp'] = generateOTP();
        $_SESSION['otp_time'] = time();
    }
    return $_SESSION['otp'];
}


