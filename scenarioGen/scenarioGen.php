/*****************************************************
 * Scenario Generator
 * Author: dabame dbm0100@yahoo.com
 * Generates scenarios for play in dabame_game
 ****************************************************/
def class Scenario{
    function __construct(){
        $this->setting = randomLine("settings.txt");
    }
    
    private $_antagonists; // array of antagonists in scenario
    private $_complications; // array of complications in scenario
    private $_objectives; // array of objectives in scenario
    private $setting; // the setting for the scenario

    // fetches a random line from a file
    private function randomLine($filename){
        $lines = file($filename);
        return $lines[array_rand($lines)];
    }
}

/* TESTING BAY */
