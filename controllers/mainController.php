<?php
$controller = $_GET["controller"];
$action = $_GET["action"] ? $_GET["action"] : "getAll";

$isUsersController = $controller === "user";
$isServiceController = $controller === "service";

function getLandingPage () {
    require_once "views/main/main.php";
}

function error($errorMsg) {
    require_once "views/error/error.php";
}

if ($isUsersController) {
    require "controllers/userController.php";

} elseif ($isServiceController) {
    require "controllers/serviceController.php";

} else {
    call_user_func("getLandingPage", $errorMsg);
}
