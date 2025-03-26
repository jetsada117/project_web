<?php
$uid = $_SESSION['uid'];
$eid = $_GET['eid'];

$result = insertEnroll($uid, $eid);

if (!$result) {
    $_SESSION['message'] = 'ท่านได้ทำการส่งคำขอเข้าร่วมกิจกรรมนี้แล้ว หรือท่านอาจจะเป็นผู้จัดกิจกรรมนี้เอง';
    $event = getAllEvents();
    renderView('events_get', ['events' => $event]);
}
else
{
    $_SESSION['message'] = 'ท่านได้ทำการส่งคำขอเข้าร่วมกิจกรรมสำเร็จแล้ว';
    $event = getAllEvents();
    renderView('events_get', ['events' => $event]);
}
