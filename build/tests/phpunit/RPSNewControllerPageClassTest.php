<?php


class RPSNewControllerPageClassTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        require_once('bootstrap.php');
    }

    public function testObjectInstantiation() {
        $page = new \Controller\Page();
        $this->assertTrue(is_object($page));
    }

    public function testExecuteReturnsAValue() {
        $control = new \Controller\Page();
        $mockPageVars = array();
        $mockPageVars["route"] = array();
        $mockPageVars["route"]["action"] = "hi";
        $returnRay = $control->execute($mockPageVars);
        $this->assertTrue( !is_null($returnRay) );
    }

    public function testExecuteReturnsAnArray() {
        $mockPageVars = array();
        $mockPageVars["route"] = array();
        $mockPageVars["route"]["action"] = "hi";
        $control = new \Controller\Page();
        $returnRay = $control->execute($mockPageVars);
        $this->assertTrue( is_array($returnRay) );
    }

    public function testExecuteReturnsAnArrayWithStandardPageViewWhenActionIsHi() {
        $mockPageVars = array();
        $mockPageVars["route"] = array();
        $mockPageVars["route"]["action"] = "hi";
        $control = new \Controller\Page();
        $returnRay = $control->execute($mockPageVars);
        $this->assertTrue( array_key_exists("type", $returnRay) );
        $this->assertTrue( $returnRay["type"]=="view" );
        $this->assertTrue( array_key_exists("view", $returnRay) );
        $this->assertTrue( $returnRay["view"]=="standardPage" );
    }

}
