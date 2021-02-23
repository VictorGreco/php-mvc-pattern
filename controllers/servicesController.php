<?php
$action = $_REQUEST['action'];

isset($action) ? callIfExist($action, $_REQUEST) : error("There is not action defined");

function getAllServices()
{
    require_once MODELS . "servicesModel.php";

    renderDashboard("services/servicesDashboard.php");
}

function getService($request)
{
    if (isset($request['service_no'])) {
        require_once MODELS . "servicesModel.php";
        $service = getById($request['service_no'])[0];

        $service ? require_once VIEWS . "services/services.php" : error("A problem with database ocurred");
    } else {

        error("You need parameters to run this action");
    }
}

function newService($request)
{
    if (isset($request) && count($request) > 2) {
        require_once MODELS . "servicesModel.php";
        $created = create($request);

        $created ? renderDashboard("services/servicesDashboard.php") : error("A problem with database ocurred");
    } else {

        require_once VIEWS . "services/services.php";
    }
}

function updateService($request)
{
    if (isset($request['service_no'])) {
        require_once MODELS . "servicesModel.php";

        $updated = update($request);

        $updated ? renderDashboard("services/servicesDashboard.php") : error("A problem with database ocurred");
    } else {

        error("You need parameters to run this action");
    }
}

function deleteService($request)
{
    $service_no = $request['service_no'];

    if (isset($service_no)) {
        require_once MODELS . "servicesModel.php";

        $deleted = delete($service_no);

        $deleted ? renderDashboard("services/servicesDashboard.php") : error("A problem while deleting ocurred");
    }
}