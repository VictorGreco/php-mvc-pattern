<?php
$session = $_COOKIE['session'];
$action = $_REQUEST['action'];

if ($session) {
    require_once VIEWS . "main/main.php";
    exit;
}

isset($action) ? callIfExist($action, $_REQUEST) : error("There is not action defined");

function login($request) {
    require_once MODELS . "sessionsModel.php";

    $isValidUser = validate($request)[0];

    if ($isValidUser) {
        setcookie("session", $isValidUser[0], time() + 6000, "/");
        require VIEWS . "main/main.php";

    } else {
        error("Invalid user");
    }
}




