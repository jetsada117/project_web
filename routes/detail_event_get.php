<?php
$eid = $_GET['eid'];

$result = getEventById($eid);
$images = getImages($eid);

renderView('detail_event_get', ['event' => $result , 'images' => $images]);

