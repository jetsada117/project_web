<?php
$name = $_POST['name'];
$description = $_POST['description'];
$category = $_POST['category'];
$event_date = $_POST['event_date'];
$start_time = $_POST['start_time'];

if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];

    $eid = $_GET['eid'];
    $result = updateEventWithImage($name, $description, $category, $event_date, $start_time, $image_tmp, $image_name, $eid);

    if ($result) {
        $events = getAllEvents();

        renderView('events_get', ['events' => $events]);
    }
}
