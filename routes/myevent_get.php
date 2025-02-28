<?php
$uid = (int)$_GET['uid'];

if (isset($uid) && is_numeric($uid)) {
    $result = getAllEventById($uid); 

    if ($result) {
        renderView('myevent_get', ['events' => $result]);
    } else {
        echo "ไม่พบข้อมูลเหตุการณ์";
    }
} else {
    echo "ID ของเหตุการณ์ไม่ถูกต้อง";
}
?>
