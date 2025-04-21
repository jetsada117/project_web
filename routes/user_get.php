<?php
$uid = $_SESSION['uid'];

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $_GET['search'];
    $result = searchUserWithoutId($search, $uid);
    $count = countEventsGroup();
    renderView('user_get', ['users' => $result, 'count' => $count]);
} else {
    $result = getUsersWithoutId($uid);
    $count = countEventsGroup();
    renderView('user_get', ['users' => $result, 'count' => $count]);
}
