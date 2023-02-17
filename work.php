<?php

include_once 'crew.php';
interface Work {
    public function work($crew);
}

class Kitchen implements Work {
    public function work($crew) {
        foreach ($crew->getCrew() as $crewMember) {
            if ($crewMember == "Cook") {
                echo "The Cook is cooking for the crew\n";
            } else {
                echo $crewMember . " is eating\n";
            }
        }
    }
}

class Navigation implements Work {
    public function work($crew) {
        foreach ($crew->getCrew() as $crewMember) {
            if ($crewMember == "Navigator") {
                echo "The Navigator steers the boat" . "\n";
            } else {
                echo $crewMember. " is sleeping" . "\n";
            }
        }
    }
}

class Engines implements Work {
    public function work($crew) {
        foreach ($crew->getCrew() as $crewMember) {
            if ($crewMember == "Engineer") {
                echo "The Engineer is working on engines" . "\n";
            }
        }
    }
}
