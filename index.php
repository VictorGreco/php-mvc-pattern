<?php

//TODO: you need to create dbConstants.php in ./config/ .
//TODO: inside this file you need to define HOST(your database host), USER_NAME(database user name), PASSWORD(database password).

require_once "config/constants.php";
require_once "config/dbConstant.php";
require_once "helpers/helper.php";

$controller = $_REQUEST['controller'];

if (isset($controller)) {
    $controllerPath = CONTROLLERS . $controller . "Controller.php";

    file_exists($controllerPath) ? require_once($controllerPath) : error("This controller does not exists");
} else {
    empty($_REQUEST) ? require(VIEWS . "session/login.php") : header("Location: index.php");
}

