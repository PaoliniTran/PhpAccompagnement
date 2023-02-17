#!/usr/bin/php
<?php

include_once 'boat.php';
include_once 'crew.php';
include_once 'work.php';

$myBoat = new Boat("Koala", 10, 10, 10);

$myCrew = new Crew(
    $myBoat->getName(),
    $myBoat->getLength(),
    $myBoat->getWidth(),
    $myBoat->getHeight(),
    array("Captain", "First Mate", "Cook", "Navigator", "Engineer")
);

$cook = new Kitchen();
$navigator = new Navigation();
$engineer = new Engines();

$myCrew->work($cook);
echo "\n";
$myCrew->work($navigator);
echo "\n";
$myCrew->work($engineer);
echo "\n";

