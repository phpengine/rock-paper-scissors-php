<?php

class RPSNewControllerBaseClassTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        require_once("bootstrap.php");
    }

    public function testControllerBaseInstantiates() {
        $controllerBaseObject = new Controller\Base() ;
        $this->assertTrue( is_object($controllerBaseObject) );
    }

    public function testControllerBaseHasContentProperty() {
        $controllerBaseObject = new Controller\Base() ;
        $this->assertTrue( property_exists($controllerBaseObject,'content') );
    }

    public function testControllerBaseHasContentPropertyWithEmptyArrayValueOnInstantiation() {
        $controllerBaseObject = new Controller\Base() ;
        $reflectionObject = new ReflectionObject($controllerBaseObject);
        $controllerBaseContentProperty = $reflectionObject->getProperty('content');
        $controllerBaseContentProperty->setAccessible(true);
        $controllerBaseContentPropertyValue = $controllerBaseContentProperty->getValue($controllerBaseObject);
        $this->assertSame( $controllerBaseContentPropertyValue, array() );
    }

}
