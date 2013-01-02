<?php


class RPSNewControllerPageClassTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        require_once('bootstrap.php');
    }

    public function testObjectInstantiation() {
        $page = new \Controller\Page();
        $this->assertTrue(is_object($page));
    }

}
