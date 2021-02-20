<?php
require_once "models/serviceModel.php";

function getAll() {
    echo "getAll";
}

function getService($request) {
    echo "getService";
}


function createService($request) {

}

function updateService($request) {

}

function deleteService($request) {

}

$actionExists = function_exists($action);

if ($actionExists) {
    $id = $_GET["id"];

    call_user_func($action, $param);
} else {
    $errorMsg = "Oh my... Looks like you missed the queryParams";

    call_user_func("error", $errorMsg);
}