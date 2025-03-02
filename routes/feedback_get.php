<?php
$eid = $_GET['eid'];

$result = getAllFeedbackEvent($eid);

if ($result) {
    renderView('feedback_get', ['feedbacks' => $result]);
}