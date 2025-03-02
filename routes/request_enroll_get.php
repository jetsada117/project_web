<?php
if (isset($_GET['action']) && isset($_GET['uid']) && isset($_GET['eid'])) {
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
}

$user_id = $_SESSION['uid'];
$result = getRequestEnrollAllEvents($user_id);
if ($result) {
    renderView('request_enroll_get', ['requests' => $result]);
}
