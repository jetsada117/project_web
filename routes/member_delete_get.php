<?php
$uid = $_GET['uid'];
$eid = $_GET['eid'];

$result = cancelEnroll($uid, $eid);

if ($result) {
    $result = getMemberOfEvent($eid);

    if ($result) {
        renderView('member_event_get', ['members' => $result]);
    }
}
