<?php
$uid = $_SESSION['uid'];

$result = getTopFeedbackEventByUser($uid);
renderView('statistics_get', ['feedbacks' => $result]);
