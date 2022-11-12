<?php

require_once "./db_connect.php";
require_once "./file_upload.php";

if ($_POST) {
    $id = $_POST["id"];
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
    if ($image->error == 0) {
        ($_POST["image"] == "placeholder.png" ?: unlink("../images/$_POST[image]"));
        $mysql = "UPDATE library SET title = '$title', type = '$type', description = '$description', author_first_name = '$author_first_name', author_last_name = '$author_last_name', publisher_name = '$publisher', publisher_address = '$publisher_address', publisher_date = '$publisher_date', isbn_code = '$isbn_code', image = '$image->fileName' WHERE id = $id";
    } else {
        $mysql = "UPDATE library SET title = '$title', type = '$type', description = '$description', author_first_name = '$author_first_name', author_last_name = '$author_last_name', publisher_name = '$publisher', publisher_address = '$publisher_address', publisher_date = '$publisher_date', isbn_code = '$isbn_code' WHERE id = $id";
    }
    if (mysqli_query($connect, $mysql)) {
        $class = "success";
        $message = "The entry was successfully updated";
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : "";
    } else {
        $class = "danger";
        $message = "Error occurred while updating the entry: <br>" . mysqli_connect_error();
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : "";
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

        html,
        body {
            background-color: antiquewhite;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-5">
            <h1 class="text-center font-monospace text-decoration-underline">Update request response</h1>
        </div>
        <div class="alert alert-<?php echo $class; ?>" role="alert">
            <p style="font-size: 24px;"><?php echo $message; ?></p>
            <p style="font-size: 24px;"><?php echo $uploadError; ?></p>
            <button class="btn btn-warning" type='button' onclick="window.location.href='../update.php?id=<?= $id ?>'">Back</button>
            <button class="btn btn-success" type='button' onclick="window.location.href='../index.php'" style="float: right;">Home</button>
        </div>
    </div>
</body>

</html>