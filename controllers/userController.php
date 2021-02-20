<?php

require_once "models/userModel.php";

function getAllClients() {
    echo "getAllClients";
    //
}

function getClient($request) {
    echo "getClient";
}

$actionExists = function_exists($action);

if ($actionExists) {
    $id = $_GET["id"];

    call_user_func($action, $param);
} else {
    $errorMsg = "Oh my... Looks like you missed the queryParams";

    call_user_func("error", $errorMsg);
}