<?php

function create() {
    $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
    try {
        $query = "INSERT INTO users VALUES ($first_name, $last_name, $email, md5($password), $phone_no, $address, $city, $state);";
        $executeQuery = mysqli_query($condb, $query);
        return mysqli_fetch_array($executeQuery);
    } catch (Throwable $th) {
        return false;
    }
}

function getAll() {
    try {
        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $query = "SELECT * FROM users";
        $executeQuery = mysqli_query($condb, $query);
        return mysqli_fetch_all($executeQuery);
    } catch (Throwable $th) {
        return false;
    }
}

function getById($id) {
    try {
        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $query = "SELECT * FROM users WHERE user_no = $id";
        $executeQuery = mysqli_query($condb, $query);
        return mysqli_fetch_all($executeQuery);
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
        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $exists = mysqli_query($condb, "SELECT * FROM users WHERE user_no = '$user_no'");
        if (mysqli_num_rows($exists) == 0) {
            return "This user does not exist";
        } else {
            $query = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', email = '$email', address = '$address', city = '$city', state = '$state', phone = '$phone' WHERE user_no = '$user_no'";
            mysqli_query($condb, $query);
            return 'User updated correctly';
        }
    } catch (Throwable $th) {
        return false;
    }
}

function deleteById($id) {
    try {
        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $query = "DELETE users.user_no FROM users";
        $executeQuery = mysqli_query($condb, $query);
        return mysqli_fetch_array($executeQuery);
    } catch (Throwable $th) {
        return false;
    }
}