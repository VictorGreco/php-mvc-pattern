<?php

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

function create($request) {
    $user_no = $request['user_no'];
    $first_name = $request['first_name'];
    $last_name = $request['last_name'];
    $email = $request['email'];
    $address = $request['address'];
    $city = $request['city'];
    $state = $request['state'];
    $phone = $request['phone'];
    try {
        validateRequest($request);
        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $isExist = mysqli_query($condb, "SELECT * FROM users WHERE email = '$email'");
        if (mysqli_num_rows($isExist) > 0) {
            return "This user already exists";
        } else {
            $query = "INSERT INTO users (first_name, last_name, email, password, phone, address, city, state) VALUES ('$first_name', '$last_name', '$email', '123456', '$address', '$city', '$state', $phone)";
            mysqli_query($condb, $query);
            echo $query;
            return "New user was created correctly";
        }
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

function delete($id) {
    try {
        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $query = "SELECT * FROM users WHERE user_no = $id";
        $exists = mysqli_query($condb, $query);
        if (mysqli_num_rows($exists) == 0) {
            return "This user does not exist";
        } else {
            $query = "DELETE FROM users WHERE user_no = $id";
            mysqli_query($condb, $query);
            return "User deleted correctly";
        }
    } catch (Throwable $th) {
        return false;
    }
}