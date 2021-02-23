<?php
function getAll() {
    try {
        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $query = "SELECT * FROM services";
        $executeQuery = mysqli_query($condb, $query);
        return mysqli_fetch_all($executeQuery);
    } catch (Throwable $th) {
        return false;
    }
}

function getById($id) {
    try {
        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $query = "SELECT * FROM services WHERE service_no = $id";
        $executeQuery = mysqli_query($condb, $query);
        return mysqli_fetch_all($executeQuery);
    } catch (Throwable $th) {
        return false;
    }
}

function create($request) {
    try {
        $service_name = $request['service_name'];
        $description = $request['description'];
        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $isExist = mysqli_query($condb, "SELECT * FROM services WHERE service_name = '$service_name'");
        $query = "INSERT INTO users (service_name, description) VALUES ('$service_name', '$description')";

        return mysqli_num_rows($isExist) == 0 ? mysqli_query($condb, $query) : false;
    } catch (Throwable $th) {

        return false;
    }
}

function update($request)
{
    $service_no = $request['service_no'];
    $service_name = $request['service_name'];
    $description = $request['description'];

    try {
        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $exists = mysqli_query($condb, "SELECT * FROM services WHERE service_no = '$service_no'");
        $query = "UPDATE users SET service_name = '$service_name', description = '$description' WHERE service_no = '$service_no'";

        return mysqli_num_rows($exists) != 0 ? mysqli_query($condb, $query) : false;
    } catch (Throwable $th) {

        return false;
    }
}

function delete($id) {
    try {
        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $query = "SELECT * FROM services WHERE service_no = $id";
        $exists = mysqli_query($condb, $query);
        $query = "DELETE FROM services WHERE service_no = $id";

        return mysqli_num_rows($exists) != 0 ? mysqli_query($condb, $query) : false;

    } catch (Throwable $th) {

        return false;
    }
}