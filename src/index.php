<?php

/**
*
* EBAY  - ROCK PAPER SCISSORS GAME
* 20/11/2011
* ------
* INDEX PAGE / ROUTER CLASS
*
*/

require_once("routerClass.php"); // inclusion of the router class file
require_once("controlclass.php"); // inclusion of the controller class file
require_once("viewclass.php"); // inclusion of the view class file

$route = new EbayRPSGameRouterClass(); // instantiate a router object
$control = new EbayRPSGameControlClass(); // instantiate a controller object
$view = new EbayRPSGameViewClass(); // instantiate a view object

$route = $route->run(); // execute the router to parse the request
$pageVars = $control->run($route); // execute the controller to parse the route and process logic based on it
$view->run($pageVars); // execute the view to display the processed data
