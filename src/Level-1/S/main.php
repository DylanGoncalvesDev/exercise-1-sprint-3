<?php
require_once "Athlete.php";
require_once "Event.php";
require_once "Result.php";
require_once "OlympicReporter.php";

$athlete1 = new Athlete ("Usain Bolt", "Jamaica");
$athlete2 = new Athlete ("Michael Phelps", "USA");

$event1 = new Event ("100m Sprint", "2024-08-01");
$event2 = new Event ("Swimming", "2024-08-02");

$result1 = new Result ($athlete1, $event1, Medal::Gold);
$result2 = new Result ($athlete2, $event2, Medal::Gold);

$results = [$result1, $result2];

$reporter = new OlympicReporter ($results);

echo $reporter->reportResults();