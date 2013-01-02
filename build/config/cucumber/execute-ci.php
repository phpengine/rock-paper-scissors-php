<?php

cukeCiExecutor::execute();

class cukeCiExecutor {

    public static function execute(){
        self::setWorkingDirectory();
        self::performTests();
    }

    private function setWorkingDirectory(){
        $basePath = str_replace('build/config/cucumber', "", dirname(__FILE__));
        $scriptLocation = $basePath.'build/tests/';
        $command = "cd $scriptLocation";
        self::executeAndOutput($command); }

    private function performTests(){
        $basePath = str_replace('build/config/cucumber', "", dirname(__FILE__));
        $scriptLocation = $basePath.'build/reports/cucumber/json/cucumber.json';
        $command = 'cucumber --format json -o '.$scriptLocation;
        self::executeAndOutput($command); }

    private static function executeAndOutput($command) {
        $outputArray = array();
        exec($command, $outputArray);
        echo "\nOutput for Command $command:\n";
        foreach ($outputArray as $outputValue) {
            echo "$outputValue\n"; } }

}

?>