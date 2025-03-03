<?php
$uid = $_SESSION['uid'];
$result = getUserById($uid);

renderView('profile_edit_get', ['user' => $result]);