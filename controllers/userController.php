<?php
require_once "models/userModel.php";

function getAll() {
    $allUsers = getAllUsers();
    require_once "views/user/userDashboard.php";
    echo "getAll";
}

function getUser($request) {
    $userId = getById();
    require_once "views/user/user.php";
    echo "getUser";
}

function createUser($request) {
    create();
    //$allUsers = getAllUsers();
    require_once "views/user/userDashboard.php";
    echo "User created ";

}

function updateUser($request) {
    $userId = getById();
    updateById($userId);
    //$allUsers = getAllUsers();
    require_once "views/user/user.php";
    echo "User updated";

}

function deleteUser($request) {
    $userId = getById();
    deleteById($userId);
    //$allUsers = getAllUsers();
    require_once "views/user/userDashboard.php";
    echo "User deleted";
}

$actionExists = function_exists($action);

if ($actionExists) {
    $id = $_GET["id"];

    call_user_func($action, $param);
} else {
    $errorMsg = "Oh my... Looks like you missed the queryParams";

    call_user_func("error", $errorMsg);
}