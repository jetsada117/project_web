<?php
$uid = $_SESSION['uid'];
$eid = $_GET['eid'];

$result = insertEnroll($uid, $eid);
$event = getEventWithOutId($uid);
renderView('events_get', ['events' => $event]);
