<?php
$uid = $_GET['uid'];

$result = getUserById($uid);
$event = getAllEventById($uid);
$count = countEventsById($uid);
renderView('user_data_get', ['user' => $result, 'events' => $event, 'count' => $count]);