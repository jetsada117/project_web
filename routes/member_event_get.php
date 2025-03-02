<?php
$eid = $_GET['eid'];

$result = getMemberOfEvent($eid);

if ($result) {
    renderView('member_event_get', ['members' => $result]);
}