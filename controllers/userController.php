<?php
require_once "models/userModel.php";

function getAll() {
    $allUsers = getAllUsers();
    require_once "views/user/userDashboard.php";
    echo "getAll";
}

function getUser($request) {
    echo "getUser";
}

function createUser($request) {

}

function updateUser($request) {

}

function deleteUser($request) {

}

$actionExists = function_exists($action);

if ($actionExists) {
    $id = $_GET["id"];

    call_user_func($action, $param);
} else {
    $errorMsg = "Oh my... Looks like you missed the queryParams";

    call_user_func("error", $errorMsg);
}