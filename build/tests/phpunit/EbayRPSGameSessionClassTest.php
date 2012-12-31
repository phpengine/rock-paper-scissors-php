<?php


class EbayRPSGameSessionClassTest extends PHPUnit_Framework_TestCase {

    private $session;

    public function setUp() {
	require_once('bootstrap');
	require_once(bootstrapForTests::getBasePath()."/src/sessionclass.php");
	$this->session = new EbayRPSGameSessionClass() ;
    }
	
    /**
    * this one checks that we can set a session var
    */
    public function testsetVar() {
	$this->session->setVar("testvar", "testval");
	$this->assertEquals($_SESSION["testvar"], "testval");
    }
	
    /**
    * @depends testsetVar
    * this checks that we can correctly get a variable (also)
    * performs setting one
    */
    public function testgetVar() {
	$this->session->setVar("testvar", "testval");
	$this->assertEquals( $this->session->getVar("testvar"), "testval" );
    }
	
    /**
    * @depends testgetVar
    * this tests that the $_SESSION array is genuinely empty
    * (session is reset)
    */
    public function testreset() {
	$this->session->reset("testvar");
	$this->assertEmpty($_SESSION);
    }

}
