<?php
require_once "models/serviceModel.php";

function getAll() {
    $allServices = getAllServices();
    require_once "views/user/seriveDashboard.php";
    echo "getAll";
}

function getService($request) {
    $serviceId = getById();
    require_once "views/user/service.php";
    echo "getService";
}


function createService($request) {
    create();
    //$allServices = getAllServices();
    require_once "views/user/serviceDashboard.php";
    echo "User created ";

}

function updateService($request) {
    $serviceId = getById();
    updateById($serviceId);
    //$allServices = getAllServices();
    require_once "views/user/service.php";
    echo "User updated";


}

function deleteService($request) {
    $serviceId = getById();
    deleteById($serviceId);
    //$allServices = getAllServices();
    require_once "views/user/serviceDashboard.php";
    echo "Service deleted";

}

$actionExists = function_exists($action);

if ($actionExists) {
    $id = $_GET["id"];

    call_user_func($action, $param);
} else {
    $errorMsg = "Oh my... Looks like you missed the queryParams";

    call_user_func("error", $errorMsg);
}