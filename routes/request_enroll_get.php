<?php
$uid = intval($_GET['uid']);
$eid = intval($_GET['eid']);

if ($_GET['action'] === 'accept') {
    $status = "accepted";
    $check = updateStatus($uid, $eid, $status);

    if (!$check) {
        echo "เกิดข้อผิดพลาดในการอัปเดตสถานะ";
    }
} elseif ($_GET['action'] === 'declined') {
    $status = "declined";
    $check = updateStatus($uid, $eid, $status);

    if (!$check) {
        echo "เกิดข้อผิดพลาดในการอัปเดตสถานะ";
    }
}

$result = getMemberOfEvent($eid);

if ($result) {
    renderView('member_event_get', ['members' => $result]);
}