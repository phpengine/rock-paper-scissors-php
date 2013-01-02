<?php

Namespace Core ;

class Control {

    public function executeControl($control, $pageVars) {
        $className = '\\Controller\\'.ucfirst($control);
        $controlObject = new $className;
        $executionResult = $controlObject->execute($pageVars);
        var_dump ( "x res", $executionResult);
        return $executionResult;
    }

}