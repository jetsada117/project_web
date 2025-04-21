<?php
$eid = $_GET['eid'];
$uid = $_GET['uid'];

$result = getEventById($eid);
$user = getUserById($uid);
$images = getImages($eid);

renderView('data_event_get', ['event' => $result , 'images' => $images, 'user' => $user]);

