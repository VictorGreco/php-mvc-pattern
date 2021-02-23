<?php



if (isset($_REQUEST['action'])) {
    function_exists($_REQUEST['action']) ? call_user_func($_REQUEST['action'], $_REQUEST) : error("This action does not exist");
} else {
    error("There is not action defined");
}


function getAllServices()
{
    require_once MODELS . "servicesModel.php";
    $allServices = getAll();
    if ($allServices) {
        require_once VIEWS . "services/servicesDashboard.php";
    } else {
    }
}

function getService($request)
{
    if (isset($request['service_no'])) {
        require_once MODELS . "servicesModel.php";
        $service = getById($request['service_no'])[0];
        if ($service) {
            require_once VIEWS . "services/services.php";
        } else {
          error("A problem with database ocurred");
        }
      } else {
        error("You need parameters to run this action");
      }
}