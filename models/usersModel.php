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

function updateById($id) {
    try {
        $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
        $query = "UPDATE users SET user_no=$user_no WHERE $key_toChange=$value_toChange AND $key_toChange=$value_toChange;";
        $executeQuery = mysqli_query($condb, $query);
        return mysqli_fetch_array($executeQuery);
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