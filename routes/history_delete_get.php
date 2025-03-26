<?php
$eid = $_GET['eid'];
$uid = $_SESSION['uid'];

$result = deleteEnroll($uid, $eid);

if ($result) {
    $history = getHistoryEnroll($uid);
    renderView('history_get', ['history' => $history]);
}
else
{
    $_SESSION['message'] = 'ไม่สามารถลบข้อมูลการสมัครเข้าร่วมกิจกรรมได้';
    $history = getHistoryEnroll($uid);
    renderView('history_get', ['history' => $history]);
}