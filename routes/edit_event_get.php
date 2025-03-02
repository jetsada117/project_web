<?php
$eid = $_GET['eid'];

$result = getEventById($eid);

if ($result)
{
    renderView('edit_event_get', ['event' => $result]);
}