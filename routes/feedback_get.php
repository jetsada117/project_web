<?php
$eid = $_GET['eid'];

$result = getAllFeedbackEvent($eid);

renderView('feedback_get', ['feedbacks' => $result]);
