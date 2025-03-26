<?php
require '../public_html/vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

function generateOTP($length = 6)
{
    $otp = "";
    for ($i = 0; $i < $length; $i++) {
        $otp .= random_int(0, 9);
    }

    return $otp;
}

$eid = $_GET['eid'];
$uid = $_SESSION['uid'];

$otp = generateOTP(6);

$isupdate = updateOTP($otp, $uid, $eid);

if (!$isupdate) {
    $history = getHistoryEnrolL($uid);
    renderView('history_get', ['history' => $history]);
}

$text = '/processqr?eid=' . $eid . '&uid=' . $uid . '&otp=' . $otp;
$qrCode = new QrCode($text);
$writer = new PngWriter();
$result = $writer->write($qrCode);
$dataUri = $result->getDataUri();

renderView('checkin_get', ['uid' => $uid, 'eid' => $eid, 'qrCodeDataUri' => $dataUri]);
