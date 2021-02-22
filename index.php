<?php

//TODO: you need to create dbConstants.php in ./config/ .
//TODO: inside this file you need to define HOST(your database host), USER_NAME(database user name), PASSWORD(database password).

require_once "config/constants.php";
require_once "config/dbConstant.php";
require_once "helpers/helper.php";

if (isset($_REQUEST['controller'])) {
    file_exists(CONTROLLERS . $_REQUEST['controller'] . "Controller.php") ?
    require_once(CONTROLLERS . $_REQUEST['controller'] . "Controller.php") :
    error("This controller does not exists");
} else {
    empty($_REQUEST) ? require(VIEWS . "main/main.php") : header("Location: index.php");
}

