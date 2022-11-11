<?php

require_once "./db_connect.php";

if($_POST){
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
    if(mysqli_query($connect, $mysql)){
        $class = "Success";
        $message = "Entry deleted";
    }else{
        $class = "Danger";
        $message = "Entry was not deleted" . $connect->error;
    }
}else{
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
</head>
<body>
<div class="container">
<div class="mt-3 mb-3">
    <h1>Delete request response</h1>
</div>
<div class="alert alert-<?= $class; ?>" role="alert">
    <p><?= $message; ?></p>
    <button class="btn btn-success" type='button' onclick="window.location.href='../index.php'">Home</button>
</div>
</div>
</body>
</html>