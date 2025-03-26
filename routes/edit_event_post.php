<?php
$name = $_POST['name'];
$description = $_POST['description'];
$category = $_POST['category'];
$event_date = $_POST['event_date'];
$start_time = $_POST['start_time'];
$eid = $_GET['eid'];

if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];

    $image_more_tmp = [];
    $image_more_names = [];

    if (isset($_FILES['image_more']) && isset($_FILES['image_more']['error']) && is_array($_FILES['image_more']['error'])) {
        foreach ($_FILES['image_more']['error'] as $key => $error) {
            if ($error == 0 && isset($_FILES['image_more']['tmp_name'][$key]) && isset($_FILES['image_more']['name'][$key])) {
                $image_more_tmp[] = $_FILES['image_more']['tmp_name'][$key];
                $image_more_names[] = $_FILES['image_more']['name'][$key];
            }
        }
    }

    $result = updateEventWithImages($name, $description, $category, $event_date, $start_time, $image_tmp, $image_name, $image_more_tmp, $image_more_names, $eid);

    if ($result) {
        $event = getAllEvents();
        renderView('events_get', ['events' => $event]);
    } else {
        $result = getEventById($eid);

        if ($result) {
            renderView('edit_event_get', ['event' => $result]);
        }
    }
} else {
    $result = updateEventWithoutImage($name, $description, $category, $event_date, $start_time, $eid);

    if ($result) {
        $event = getAllEvents();
        renderView('events_get', ['events' => $event]);
    } else {
        $result = getEventById($eid);

        if ($result) {
            renderView('edit_event_get', ['event' => $result]);
        }
    }
}
