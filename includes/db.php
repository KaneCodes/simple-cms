<?php 

// Database Array
$db['db_host'] = "localhost";
$db['db_user'] = "ccAdmin";
$db['db_pass'] = "Storm12345";
$db['db_name'] = "cms";

// Set to uppercase
foreach($db as $key => $value) {

    define(strtoupper($key), $value);
}

// Create connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Test Connection
if($connection) {

    // echo "We are connected";
} else {

    echo "Database connection failed";
}










?>