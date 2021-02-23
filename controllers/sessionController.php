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
    
    $isValidUser = validate($request);

    if ($isValidUser) {
        setcookie("session", $isValidUser['user_no'], timme() + 6000, "/");

        require_once VIEWS . "main/main.php";
    } else {
        error("Invalid user");
    }
}




