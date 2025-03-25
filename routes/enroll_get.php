<?php
$uid = $_SESSION['uid'];
$eid = $_GET['eid'];

$result = insertEnroll($uid, $eid);
$event = getAllEvents();
renderView('events_get', ['events' => $event]);
