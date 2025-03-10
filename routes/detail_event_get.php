<?php
$eid = $_GET['eid'];

$result = getEventById($eid);
$images = getImages($eid);

if ($result)
{
    renderView('detail_event_get', ['event' => $result , 'images' => $images]);
}
