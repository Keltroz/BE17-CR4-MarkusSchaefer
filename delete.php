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
        $availability = $data["availability"];
    } else {
        header("location: ./error.php");
    }
} else {
    header("location: ./error.php");
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
        fieldset {
            width: 30%;
            margin: 5% auto 0 auto;
        }

        img {
            /* width: 50%; */
            height: 300px;
        }

        table {
            margin: 0 auto;
        }

        .btn {
            width: 100px;
        }

        html,
        body {
            background-color: antiquewhite;
        }

    </style>
</head>

<body>
    <fieldset>
        <legend class='h1 font-monospace text-decoration-underline text-center mb-5'>Delete request</legend>
        <h4 class="mb-5">You have selected the data below:</h5>
        <table class="mt-3">
            <tr>
                <td class="test fs-4 text-center">
                    <?= $title ?>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <img class='rounded mt-4 mb-4' src='images/<?php echo $image ?>' alt="<?php echo $title ?>">
                </td>
            </tr>
        </table>

        <h4 class="mt-4 mb-5">Do you really want to delete this product?</h3>
        <form action="actions/a_delete.php" method="post">
            <input type="hidden" name="id" value="<?= $id ?>" />
            <input type="hidden" name="image" value="<?= $image ?>" />
            <button class="btn btn-warning" type="button" onclick="window.location.href='index.php'" style="float: left;">No</button>
            <button class="btn btn-danger" type="submit" style="float: right;">Yes</button>
        </form>
    </fieldset>
</body>

</html>