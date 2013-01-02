<?php


class EbayRPSGameControlClassTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        require_once('bootstrap.php');
    }

    public function testGetRandomPlayerChoiceReturnsValue() {
        $control = new \Controller\Game();
        $reflector = new ReflectionMethod($control, "getRandomPlayerChoice");
        $reflector->setAccessible(true);
        $choice = $reflector->invoke($control);
        $this->assertTrue( !is_null($choice) );
    }

    public function testGetRandomPlayerChoiceReturnsValueOfCorrectType() {
        $control = new \Controller\Game();
        $reflector = new ReflectionMethod($control, "getRandomPlayerChoice");
        $reflector->setAccessible(true);
        $choice = $reflector->invoke($control);
        $this->assertTrue( in_array($choice, array("rock", "paper", "scissors") ) );
    }

    public function testCalculateWinner() {
        $control = new \Controller\Game();
        $reflector = new ReflectionMethod($control, "getRandomPlayerChoice");
        // make the private method accessible then use it to generate inputs
        $reflector1 = new ReflectionMethod($control, "getRandomPlayerChoice");
        $reflector1->setAccessible(true);
        $player1 = $reflector1->invoke($control);
        $player2 = $reflector1->invoke($control);
        // use generated inputs to run the calculate winner method, after making
        // it accessible
        $reflector2 = new ReflectionMethod($control, "calculateWinner");
        $reflector2->setAccessible(true);
        $statusray = $reflector2->invoke($control, $player1, $player2 );
        // check the returned array has 2 elements
        $this->assertCount(2, $statusray );
        // check the returned array val 0 is string
        $this->assertTrue( strlen($statusray["p1"])>0 );
        // check the returned array val 1 is string
        $this->assertTrue( strlen($statusray["p2"])>0 );
        // check the val 0 is either win, draw or lose
        $this->assertTrue( in_array($statusray["p1"], array("win", "draw", "lose") ) );
        // check the val 1 is either win, draw or lose
        $this->assertTrue( in_array($statusray["p2"], array("win", "draw", "lose") ) );
    }


}
