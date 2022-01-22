<?php

// to ensure secure connection to database

$db_host = "localhost";
$db_root = "root";
$db_pass  = "";
$db_name  = "voicebox";




$connection = mysqli_connect($db_host, $db_root, $db_pass, $db_name);

if (!$connection) {
    echo 'Something went wrong...';
}
