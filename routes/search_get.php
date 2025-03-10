<?php
if (!empty($_GET['search']) && empty($_GET['start']) && empty($_GET['end'])) {
    $name = $_GET['search'];

    $result = searchByName($name);

    if ($result) {
        renderView('events_get', ['events' => $result]);
    }
} else if (!empty($_GET['start']) && !empty($_GET['end']) && empty($_GET['search'])) {
    $start = $_GET['start'];
    $end = $_GET['end'];

    $result = searchByDate($start, $end);

    if ($result) {
        renderView('events_get', ['events' => $result]);
    }
} else if (!empty($_GET['start']) && !empty($_GET['end']) && !empty($_GET['search'])) {
    $name = $_GET['search'];
    $start = $_GET['start'];
    $end = $_GET['end'];

    $result = searchAll($name, $start, $end);

    if ($result) {
        renderView('events_get', ['events' => $result]);
    }
} else {
    $event = getAllEvents();
    renderView('events_get', ['events' => $event]);
}
