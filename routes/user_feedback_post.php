<?php
$suitability = $_POST['suitability'];
$duration = $_POST['duration'];
$comment = $_POST['comment'];

$uid = $_SESSION['uid'];
$eid = $_GET['eid'];

$rating = ($suitability+$duration)/2;
$result = updateUserFeedback($comment, $rating, $uid, $eid);

$history = getHistoryEnrolL($uid);
renderView('history_get', ['history' => $history]);
