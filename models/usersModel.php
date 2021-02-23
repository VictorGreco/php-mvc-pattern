<?php

function getAll() {
    try {
        $selectQuery = "SELECT * FROM users";

        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $rows = mysqli_query($condb, $selectQuery);

        return mysqli_fetch_all($rows);
    } catch (Throwable $th) {

        return false;
    }
}

function getById($id) {
    try {
        $selectQuery = "SELECT * FROM users WHERE user_no = $id";

        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $rows = mysqli_query($condb, $selectQuery);

        return mysqli_fetch_all($rows);
    } catch (Throwable $th) {

        return false;
    }
}

function create($request) {
    try {
        validateRequest($request);

        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        $address = $request['address'];
        $city = $request['city'];
        $state = $request['state'];
        $phone = $request['phone'];

        $selectQuery = "SELECT * FROM users WHERE email = '$email'";
        $insertQuery = "INSERT INTO users (first_name, last_name, email, password, phone, address, city, state) VALUES ('$first_name', '$last_name', '$email', '123456', $phone, '$address', '$city', '$state')";

        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $rows = mysqli_query($condb, $selectQuery);

        return mysqli_num_rows($rows) <= 0 ? mysqli_query($condb, $insertQuery) : false;
    } catch (Throwable $th) {

        return false;
    }
}

function update($request)
{
    $user_no = $request['user_no'];
    $first_name = $request['first_name'];
    $last_name = $request['last_name'];
    $email = $request['email'];
    $address = $request['address'];
    $city = $request['city'];
    $state = $request['state'];
    $phone = $request['phone'];

    try {
        $selectQuery = "SELECT * FROM users WHERE user_no = '$user_no'";
        $updateQuery = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', email = '$email', address = '$address', city = '$city', state = '$state', phone = '$phone' WHERE user_no = '$user_no'";

        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $rows = mysqli_query($condb, $selectQuery);

        return mysqli_num_rows($rows) !== 0 ? mysqli_query($condb, $updateQuery) : false;
    } catch (Throwable $th) {

        return false;
    }
}

function delete($id) {
    try {
        $selectQuery = "SELECT * FROM users WHERE user_no = $id";
        $deleteQuery = "DELETE FROM users WHERE user_no = $id";

        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $rows = mysqli_query($condb, $selectQuery);

        return mysqli_num_rows($rows) != 0 ? mysqli_query($condb, $deleteQuery) : false;
    } catch (Throwable $th) {

        return false;
    }
}