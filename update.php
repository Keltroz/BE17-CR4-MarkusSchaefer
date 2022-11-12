<?php

require_once "./actions/db_connect.php";

if ($_GET["id"]) {
    $id = $_GET["id"];
    $mysql = "SELECT * FROM library WHERE id = $id";
    $result = mysqli_query($connect, $mysql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data["title"];
        $type = $data["type"];
        $description = $data["description"];
        $author_first_name = $data["author_first_name"];
        $author_last_name = $data["author_last_name"];
        $publisher = $data["publisher_name"];
        $publisher_address = $data["publisher_address"];
        $publisher_date = $data["publisher_date"];
        $isbn_code = $data["isbn_code"];
        $image = $data["image"];
        // $availability = $data["availability"];
    }
} else {
    header("location: error.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Review 4</title>
    <?php require_once "./components/boot.php" ?>

    <style type="text/css">
        .field-container {
            margin: 3% auto;
            width: 30%;
            background-color: antiquewhite;
        }

        img {
            width: 100px;
            height: 100px;
        }

        .btn-primary {
            width: 100px;
        }

        html,
        body {
            background-color: antiquewhite;
        }

    </style>
</head>

<body>
    <div class="bg-container">
        <fieldset class="field-container">
            <legend class='h1 mb-5 font-monospace text-decoration-underline text-center'>Update product <img class='rounded-circle ms-4' src='./images/<?= $image ?>' alt=""></legend>
            <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
                <table class='table table-dark'>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title" placeholder="Title" value="<?= $title ?>"></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class='form-control' type="text" name="type" placeholder="Book, CD or DVD" value="<?= $type ?>"></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="description" placeholder="Description" value="<?= $description ?>"></td>
                    </tr>
                    <tr>
                        <th>Author</th>
                        <td><input class='form-control' type="text" name="author_first_name" placeholder="First Name" value="<?= $author_first_name ?>"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input class='form-control' type="text" name="author_last_name" placeholder="Last Name" value="<?= $author_last_name ?>"></td>
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td><input class='form-control' type="text" name="publisher_name" placeholder="Name" value="<?= $publisher ?>"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input class='form-control' type="text" name="publisher_address" placeholder="Address" value="<?= $publisher_address ?>"></td>
                    </tr>
                    <tr>
                        <th>Publisher Date</th>
                        <td><input class='form-control' type="date" name="publisher_date" placeholder="Publisher Date" value="<?= $publisher_date ?>"></td>
                    </tr>
                    <tr>
                        <th>ISBN Code</th>
                        <td><input class='form-control' type="number" name="isbn_code" placeholder="ISBN Code" value="<?= $isbn_code ?>"></td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><input class='form-control' type="file" name="image" value="<?= $image ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button onclick="window.location.href='index.php'" class='btn btn-primary' style="float:left;" type="button">Back</button>
                            <button class='btn btn-success' style="float: right;" type="submit">Update Product</button>
                        </td>
                    </tr>
                    <tr>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="hidden" name="image" value="<?= $image ?>">
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>

</body>

</html>