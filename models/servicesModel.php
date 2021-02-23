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
        $user_no = $request['user_no'];
        $service_name = $request['service_name'];
        $description = $request['description'];
        $price = $request['price'];
        $selectQuery = "SELECT * FROM services WHERE service_name = '$service_name'";
        $insertQuery = "INSERT INTO services (user_no, service_name, description, stars, price) VALUES ($user_no, '$service_name', '$description', 0, $price)";

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
        $stars = 0;
        $price = $request['price'];

        $selectQuery = "SELECT * FROM services WHERE service_no = '$service_no'";
        $updateQuery = "UPDATE services SET service_name = '$service_name', description = '$description', description = '$description', price = '$price' WHERE service_no = '$service_no'";

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
