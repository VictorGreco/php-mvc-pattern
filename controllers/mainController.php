<?php
$controller = $_GET["controller"];
$action = $_GET["action"] ? $_GET["action"] : "getAll";

$isUsersController = $controller === "users";
$isServiceController = $controller === "services";

function getLandingPage () {
    require_once BASE_PATH . "/views/main/main.php";
}

function error($errorMsg) {
    require_once BASE_PATH . "/views/error/error.php";
}

if ($isUsersController) {
    require BASE_PATH . "/controllers/userController.php";

} elseif ($isServiceController) {
    require BASE_PATH . "/controllers/serviceController.php";

} else {
    call_user_func("getLandingPage", $errorMsg);
}
