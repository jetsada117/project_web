<?php
$uid = $_GET['uid'];
$eid = $_GET['eid'];

$result = insertEnroll($uid, $eid);

if($result){
    $event = getAllEvents();

    renderView('events_get', ['events' => $event]);
}