<?php
$name = $_POST['name'];
$description = $_POST['description'];
$category = $_POST['category'];
$event_date = $_POST['event_date'];
$start_time = $_POST['start_time'];
$uid = $_SESSION['uid'];

if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];

    $result = createEvent($name, $description, $category, $event_date, $start_time, $image_tmp, $image_name, $uid);

    if ($result) {
        $event = getEventWithOutId($uid);
        renderView('events_get', ['events' => $event]);
    } else {
        echo "เกิดข้อผิดพลาดในการสร้างอีเวนต์!";
    }
} else {
    echo "กรุณาอัปโหลดรูปภาพ!";
}
