<?php
/*****************************************************
 * Scenario Generator
 * Author: dabame dbm0100@yahoo.com
 * Generates scenarios for play in dabame_game
 ****************************************************/
class Scenario{
    function __construct(){
        $this->setting = $this->randomLine("scenarioGen/settings.txt");
		$this->objective = $this->randomLine("scenarioGen/objectives.txt");
		$this->antagonist = $this->randomLine("scenarioGen/antagonists.txt");
		$this->complications = $this->randomLine("scenarioGen/complications.txt");
	}
    private $antagonist; // antagonists in scenario
    private $complications; // complications in scenario
    private $objective; // objective in scenario
    private $setting; // the setting for the scenario

    public function displayScenario(){
        echo "$this->setting  $this->complications  $this->objective  $this->antagonist";
    }
    
    // fetches a random line from a file
    private function randomLine($filename){
        $lines = file($filename);
		$randLine = preg_replace("/[\n\r]/"," ",$lines[array_rand($lines)]);
        return $randLine;
    }
}

/* TESTING BAY */
$myScenario = new Scenario();
$myScenario->displayScenario();
?>

