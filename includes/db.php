<?php

$db['db_host'] = "localhost";
$db['db_user'] = "cmsproject";
$db['db_pass'] = "D6WR9T11OZvcs8tW";
$db['db_name'] = "cmsproject";

foreach($db as $key => $value){
    define (strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// secur
include "secur.php";