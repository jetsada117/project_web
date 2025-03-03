<?php
$eid = $_GET['eid'];

$result = getEventById($eid);

if ($result)
{
    renderView('detail_event_get', ['event' => $result]);
}
