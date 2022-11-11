<?php

require_once "./db_connect.php";
require_once "./file_upload.php";

if($_POST){
    $title = $_POST["title"];
    $type = $_POST["type"];
    $author_first_name = $_POST["author_first_name"];
    $author_last_name = $_POST["author_last_name"];
    $publisher = $_POST["publisher"];
    $availability = $_POST["availability"];
    $description = $_POST["description"];
    $isbn_code = $_POST["isbn_code"];
    // $image = file_upload($_FILES["image"]);
}