<?php


class EbayRPSGameViewClassTest extends PHPUnit_Framework_TestCase {

    private $route ;
    private $control ;
    private $view ;

    public function setUp() {

	require_once('bootstrap.php');

	// create a router object
	require_once(bootstrapForTests::getBasePath()."/src/routerClass.php");
	$this->route = new EbayRPSGameRouterClass();

	// create a view object
	require_once(bootstrapForTests::getBasePath()."/src/controlclass.php");
	$this->control = new EbayRPSGameControlClass();
	
	// create a view object
	require_once(bootstrapForTests::getBasePath()."/src/viewclass.php");
	$this->view = new EbayRPSGameViewClass() ;

	$route = $this->route->run();
	$pageVars = $this->control->run($route);
    }

	
    /**
    * this tests the header html starts correctly
    */
    public function testcreateHeaderHtml() {
	$reflector = new ReflectionMethod($this->view, "createHeaderHtml");
	$reflector->setAccessible(true);
	$htmlvar = $reflector->invoke($this->view);
	// check that output starts correctly
	$this->assertStringStartsWith("<!-- BEGIN html -->", $htmlvar );
    }

	
    /**
    * this tests the footer html ends correctly
    */
    public function testcreateFooterHtml() {
	$reflector = new ReflectionMethod($this->view, "createFooterHtml");
	$reflector->setAccessible(true);
	$htmlvar = $reflector->invoke($this->view);
	// check that output starts correctly
	$this->assertStringEndsWith("</html>", $htmlvar );
    }


}
