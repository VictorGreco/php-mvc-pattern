<?php 
    function validate($request) {
        try {
            $email = $request['email'];
            $selectQuery = "SELECT * FROM users WHERE email = $email";
    
            $condb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'mvc_services');
            $rows = mysqli_query($condb, $selectQuery);
    
            return mysqli_fetch_all($rows);
        } catch (Throwable $th) {
    
            return false;
        }
    }
?>