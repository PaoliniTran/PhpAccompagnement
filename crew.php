#!/usr/bin/php
<?php

include_once 'boat.php';

class Crew extends Boat {
    private $crew = array();
    public function __construct($name, $length, $width, $height, $crew)
    {
        parent::__construct($name, $length, $width, $height);
        $this->crew = $crew;
    }
    public function getCrew() {
        return $this->crew;
    }
    public function setCrew($crew) {
        $this->crew = $crew;
    }

    public function printCrewInfo()
    {
        $this->printBoatInfo();
        echo "\nCrew of ". $this->getName() . "\n";
        foreach ($this->getCrew() as $crewMember)
            echo $crewMember . "\n";;
    }

    public function work($work) {
        $work->work($this);
    }
}
