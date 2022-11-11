<?php

require_once "./db_connect.php";
require_once "./file_upload.php";

if ($_POST) {
    $title = $_POST["title"];
    $type = $_POST["type"];
    $description = $_POST["description"];
    $author_first_name = $_POST["author_first_name"];
    $author_last_name = $_POST["author_last_name"];
    $publisher = $_POST["publisher_name"];
    $publisher_address = $_POST["publisher_address"];
    $publisher_date = $_POST["publisher_date"];
    $isbn_code = $_POST["isbn_code"];
    // $availability = $_POST["availability"];
    $image = file_upload($_FILES["image"]);
    $uploadError = "";
    $mysql = "INSERT into library (title, type, description, author_first_name, author_last_name, publisher_name, publisher_address, publisher_date, isbn_code, image) VALUES ('$title', '$type', '$description', '$author_first_name', '$author_last_name', '$publisher', '$publisher_address', '$publisher_date', '$isbn_code', '$image->fileName')";
    if (mysqli_query($connect, $mysql)) {
        $class = "success";
        $message = "Entry successfully added.
        <table class='table w-50'><tr>
        <td> $title </td>
        <td> $type </td>
        </tr></table><hr>";
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error. Try again: <br>" . $connect->error;
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    }
} else {
    header("location: ../error.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Review 4</title>
    <?php require_once "../components/boot.php" ?>
    <style type="text/css">
        .container {
            margin: 5% auto;
            width: 30%;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="mt-3 mb-5">
            <h1 class="font-monospace text-center text-decoration-underline">Create request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p style="font-size: 26px;"><?= $message; ?></p>
            <p style="font-size: 26px;"><?= $uploadError; ?></p>
            <button class="btn btn-primary mt-4" type='button' onclick="window.location.href='../index.php'">Home</button></a>
        </div>
    </div>
</body>
</html>