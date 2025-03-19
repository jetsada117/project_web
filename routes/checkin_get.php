<?php
require 'vendor/autoload.php';
require 'functions/otp.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

$eid = $_GET['eid'];
$uid = $_SESSION['uid'];

$otp = getOTP();

$isupdate = updateOTP($otp, $uid, $eid);

if ($isupdate) {
    $history = getHistoryEnrolL($uid);
    renderView('history_get', ['history' => $history]);
}

$text = '/processqr?eid=' . $eid . '&uid=' . $uid . '&otp=' . $otp;
$qrCode = new QrCode($text);
$writer = new PngWriter();
$result = $writer->write($qrCode);
$dataUri = $result->getDataUri();

renderView('checkin_get', ['uid' => $uid, 'eid' => $eid, 'qrCodeDataUri' => $dataUri]);
?>
