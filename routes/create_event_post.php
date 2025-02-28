<?php
$uid = $_POST['uid'];

$name = $_POST['name'];
$description = $_POST['description'];
$category = $_POST['category'];
$event_date = $_POST['event_date'];
$start_time = $_POST['start_time'];
$image = $_POST['image'];

$result = createEvent($name, $description, $category, $event_date, $start_time, $image, $uid);

if ($result) {
    $result = getAllEvents();
    renderView('events_get', ['events' => $result]);
} else { ?>
    <h1>Hello world</h1>
<?php
}
