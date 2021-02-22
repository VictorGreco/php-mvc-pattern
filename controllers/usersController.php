<?php


if (isset($_REQUEST['action'])) {
    function_exists($_REQUEST['action']) ? call_user_func($_REQUEST['action'], $_REQUEST) : error("This action does not exist");
} else {
    error("There is not action defined");
}


function getAllUsers()
{
    require_once MODELS . "usersModel.php";
    $allUsers = getAll();
    if ($allUsers) {
        require_once VIEWS . "users/usersDashboard.php";
    } else {
        error ('Os quiero mucho others, espero que este mensaje nunca se muestre si no, sus mato.');
    }
}

function getUser($request)
{
    //
    require_once MODELS . "usersModel.php";
}
