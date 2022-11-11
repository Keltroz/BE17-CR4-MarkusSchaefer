<?php

require_once "./db_connect.php";

if ($_POST) {
    $id = $_POST["id"];
    // $title = $_POST["title"];
    // $type = $_POST["type"];
    // $description = $_POST["description"];
    // $author_first_name = $_POST["author_first_name"];
    // $author_last_name = $_POST["author_last_name"];
    // $publisher = $_POST["publisher_name"];
    // $publisher_address = $_POST["publisher_address"];
    // $publisher_date = $_POST["publisher_date"];
    // $isbn_code = $_POST["isbn_code"];
    // $availability = $_POST["availability"];
    $image = $_POST["image"];
    $image == "placeholder.png" ?: unlink("../images/$image");
    $mysql = "DELETE from library WHERE id = $id";
    if (mysqli_query($connect, $mysql)) {
        $class = "success";
        $message = "Entry deleted";
    } else {
        $class = "danger";
        $message = "Entry was not deleted" . $connect->error;
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
            <h1 class="font-monospace text-center text-decoration-underline">Delete request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p style="font-size: 24px;"><?= $message; ?></p>
            <button class="btn btn-success mt-4" type='button' onclick="window.location.href='../index.php'">Home</button>
        </div>
    </div>
</body>

</html>