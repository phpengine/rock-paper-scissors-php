<?php

Namespace Core;

$bootStrap = new BootStrap();
$bootStrap->main();

class BootStrap {

    public function __construct() {
        require_once("AutoLoad.php");
        $autoLoader = new autoLoader();
        $autoLoader->launch();
    }

    public function main() {
        $routeObject = new \Core\Router();
        $route = $routeObject->run();
        $emptyPageVars = array("messages"=>array(), "route"=>$route);
        $this->executeControl($route["control"], $emptyPageVars);
    }

    private function executeControl($controlToExecute, $pageVars=null) {
        $control = new \Core\Control();
        $controlResult = $control->executeControl($controlToExecute, $pageVars);
        try {
            if ($controlResult["type"]=="view") {
                $this->executeView( $controlResult["view"], $controlResult["pageVars"] ); }
            else if ($controlResult["type"]=="control") {
                $this->executeControl( $controlResult["control"], $controlResult["pageVars"] ); }
        } catch (\Exception $e) {
            throw new \Exception( 'No controller result type specified', 0, $e); }
    }

    private function executeView($viewTemplate, $viewVars) {
        $view = new \Core\View();
        $view->executeView($viewTemplate, $viewVars);
    }

}