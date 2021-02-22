<?php


function create() {
    $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
    try {
        $query = "INSERT INTO users VALUES (1, $first_name, $last_name, $email, $password, $phone_no, $address, $city, $state);";
        if ($executeQuery = mysqli_query($condb, $query)) {
        return mysqli_fetch_array($executeQuery);
        } else {
        return false;
        }
    } catch (Throwable $th) {
        return false;
    }
}

function getAllUsers() {
    $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
    try {
        $query = "SELECT * FROM users";
        $executeQuery = mysqli_query($condb, $query);
        return mysqli_fetch_all($executeQuery);
    } catch (Throwable $th) {
        return false;
    }
}

function getById($id) {
    $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
    try {
        $query = "SELECT users.user_no FROM users";
        if ($executeQuery = mysqli_query($condb, $query)) {
        return mysqli_fetch_array($executeQuery);
        } else {
        return false;
        }
    } catch (Throwable $th) {
        return false;
    }
}

function updateById($id) {
    $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
    try {
        $query = "UPDATE users SET user_no=$user_no WHERE $key_toChange=$value_toChange AND $key_toChange=$value_toChange;";
        if ($executeQuery = mysqli_query($condb, $query)) {
        return mysqli_fetch_array($executeQuery);
        } else {
        return false;
        }
    } catch (Throwable $th) {
        return false;
    }
}

function deleteById($id) {
    $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
    try {
        $query = "DELETE users.user_no FROM users";
        if ($executeQuery = mysqli_query($condb, $query)) {
        return mysqli_fetch_array($executeQuery);
        } else {
        return false;
        }
    } catch (Throwable $th) {
        return false;
    }
}

 COMMIT;