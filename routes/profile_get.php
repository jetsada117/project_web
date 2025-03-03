<?php
$uid = $_SESSION['uid'];

$result = getUserById($uid);

renderView('profile_get', ['user' => $result]);