<?php
$num2 = (string)$_POST['num2'];
$num3 = (string)$_POST['num3'];
$num4 = (string)$_POST['num4'];
$num5 = (string)$_POST['num5'];
$num6 = (string)$_POST['num6'];

$uid = $_SESSION['uid'];
$result = getHistoryEnrolL($uid);


$number1 = '911111';

$number=$num1.$num2.$num3.$num4.$num5.$num6;



if ($number == $_SESSION['otp'] ) {

    if ($result) {
        renderView('history_get', ['history' => $result]);
    }
}else
{
    if ($result) {
        renderView('checkin_get', ['checkin' => $result]);
    }

    
}



function generateOTP($length = 6) {
    $otp = "";
    for ($i = 0; $i < $length; $i++) {
        $otp .= random_int(0, 9);
    }
    return $otp;
}
$_SESSION['otp'] = generateOTP();

