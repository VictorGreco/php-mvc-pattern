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
    }
}

function getUser($request)
{
    if (isset($request['user_no'])) {
        require_once MODELS . "usersModel.php";
        $user = getById($request['user_no'])[0];
        if ($user) {
            require_once VIEWS . "users/users.php";
        } else {
          error("A problem with database ocurred");
        }
      } else {
        error("You need parameters to run this action");
      }
}
