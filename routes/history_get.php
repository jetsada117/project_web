<?php
$uid = $_SESSION['uid'];
$result = getHistoryEnrolL($uid);

if ($result) {
    renderView('history_get', ['history' => $result]);
}