<?php

$localhost = "localhost";
$user = "root";
$pass = "";
$db_name = "be17_cr4_markusschaefer_biglibrary";

try {
    $connect = mysqli_connect($localhost, $user, $pass, $db_name);
}catch(Exception $e){
    echo "Failed to connect: " . mysqli_connect_error();
}