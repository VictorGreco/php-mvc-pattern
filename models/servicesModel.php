<?php
function getAll() {
    try {
        $selectQuery = "SELECT * FROM services";

        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $rows = mysqli_query($condb, $selectQuery);

        return mysqli_fetch_all($rows);
    } catch (Throwable $th) {

        return false;
    }
}

function getById($id) {
    try {
        $selectQuery = "SELECT * FROM services WHERE service_no = $id";

        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $rows = mysqli_query($condb, $selectQuery);

        return mysqli_fetch_all($rows);
    } catch (Throwable $th) {

        return false;
    }
}

function create($request) {
    try {
        $service_name = $request['service_name'];
        $description = $request['description'];
        $selectQuery = "SELECT * FROM services WHERE service_name = '$service_name'";
        $insertQuery = "INSERT INTO users (service_name, description) VALUES ('$service_name', '$description')";

        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $rows = mysqli_query($condb, $selectQuery);

        return mysqli_num_rows($rows) == 0 ? mysqli_query($condb, $insertQuery) : false;
    } catch (Throwable $th) {

        return false;
    }
}

function update($request)
{
    try {
        $service_no = $request['service_no'];
        $service_name = $request['service_name'];
        $description = $request['description'];

        $selectQuery = "SELECT * FROM services WHERE service_no = '$service_no'";
        $updateQuery = "UPDATE users SET service_name = '$service_name', description = '$description' WHERE service_no = '$service_no'";

        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $rows = mysqli_query($condb, $selectQuery);

        return mysqli_num_rows($rows) != 0 ? mysqli_query($condb, $updateQuery) : false;
    } catch (Throwable $th) {

        return false;
    }
}

function delete($id) {
    try {
        $selectQuery = "SELECT * FROM services WHERE service_no = $id";
        $deleteQuery = "DELETE FROM services WHERE service_no = $id";

        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $rows = mysqli_query($condb, $selectQuery);

        return mysqli_num_rows($rows) != 0 ? mysqli_query($condb, $deleteQuery) : false;
    } catch (Throwable $th) {

        return false;
    }
}