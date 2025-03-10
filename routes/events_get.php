<?php
$event = getAllEvents();
renderView('events_get', ['events' => $event]);
