<?php
$action = $_REQUEST['action'];

isset($action) ? callIfExist($action, $_REQUEST) : error("There is not action defined");
renderDashboard("users/usersDashboard.php");


function getAllUsers()
{
    require_once MODELS . "usersModel.php";

    renderDashboard("users/usersDashboard.php");
}

function getUser($request)
{
  $user_no = $request['user_no'];

    if (isset($user_no)) {
        require_once MODELS . "usersModel.php";

        $user = getById($user_no)[0];

        $user ? require_once VIEWS . "users/users.php" : error("A problem with database ocurred");
      } else {

        error("You need parameters to run this action");
      }
}

function newUser($request)
{
    if (isset($request) && count($request) > 2) {
        require_once MODELS . "usersModel.php";

        $created = create($request);

        $created ? renderDashboard("users/usersDashboard.php") : error("A problem with database ocurred");
      } else {

        require_once VIEWS . "users/users.php";
      }
}

function updateUser($request)
{
  $user_no = $request['user_no'];

    if (isset($user_no)) {
        require_once MODELS . "usersModel.php";

        $updated = update($request);

        $updated ? renderDashboard("users/usersDashboard.php") : error("A problem with database ocurred");
      } else {
        error("You need parameters to run this action");
      }
}

function deleteUser($request)
{
  $user_no = $request['user_no'];

    if (isset($user_no)) {
      require_once MODELS . "usersModel.php";

      $deleted = delete($user_no);

      $deleted ? renderDashboard("users/usersDashboard.php") : '';
  }
}
