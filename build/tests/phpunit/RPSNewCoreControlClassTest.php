<?php

class RPSNewCoreControlClassTest extends PHPUnit_Framework_TestCase {

    private $availableControls;

    public function setUp() {
        require_once("bootstrap.php");
        $this->availableControls = array("Game");
    }

    public function testexecuteControlReturnsAnArray() {

        $mockPageVars = array();
        $mockPageVars["route"] = array();
        $mockPageVars["route"]["action"] = "home";

        $control = new Core\Control() ;
        foreach ($this->availableControls as $availableControl) {
            $currentControlOutput = $control->executeControl($availableControl, $mockPageVars);
            $this->assertTrue( is_array($currentControlOutput) );
        }
    }

    public function testexecuteControlReturnsAnArrayOfCorrectStructure() {

        $mockPageVars = array();
        $mockPageVars["route"] = array();
        $mockPageVars["route"]["action"] = "home";

        $control = new Core\Control() ;
        foreach ($this->availableControls as $availableControl) {
            $currentControlOutput = $control->executeControl($availableControl, $mockPageVars );
            $this->assertTrue( array_key_exists("view", $currentControlOutput) );
            $this->assertTrue( array_key_exists("pageVars", $currentControlOutput) );
        }
    }

}
