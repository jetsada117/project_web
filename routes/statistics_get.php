<?php
$uid = $_SESSION['uid'];

$result = getTopFeedbackEventByUser($uid);

if ($result) {
    renderView('statistics_get', ['feedbacks' => $result]);
} else {
    echo "ไม่พบข้อมูลการให้คำตอบ";
}