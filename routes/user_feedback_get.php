<?php
$uid = $_SESSION['uid'];
$eid = $_GET['eid'];
$result = getUserFeedbackById($uid, $eid);

renderView('user_feedback_get', ['ufeedback' => $result]);