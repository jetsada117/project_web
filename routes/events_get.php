<?php
$result = getAllEvents();

renderView('events_get', ['events' => $result]);