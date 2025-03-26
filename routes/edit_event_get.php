<?php
$eid = $_GET['eid'];

$result = getEventById($eid);
renderView('edit_event_get', ['event' => $result]);
