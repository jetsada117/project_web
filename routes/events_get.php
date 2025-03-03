<?php
$uid = $_SESSION['uid'];
$event = getEventWithOutId($uid);
renderView('events_get', ['events' => $event]);
