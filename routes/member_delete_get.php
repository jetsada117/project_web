<?php
$uid = $_GET['uid'];
$eid = $_GET['eid'];

$result = deleteEnroll($uid, $eid);

if ($result) {
    $result = getMemberOfEvent($eid);

    if ($result) {
        renderView('member_event_get', ['members' => $result]);
    }
}
