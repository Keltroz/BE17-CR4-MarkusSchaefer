<?php
require_once "./actions/db_connect.php";

$mysql = "SELECT * FROM library";
$result = mysqli_query($connect, $mysql);
$list = "";

if (mysqli_num_rows($result) > 0) {
    while ($article = mysqli_fetch_assoc($result)) {
        $list .= "
        <tr>
           <td><a href=''><img class='image' src='images/" . $article["image"] . "'></a></td>
           <td>" . $article['title'] . "</td>
           <td>" . $article['type'] . "</td>
           <td style='border-right: none; text-align: right;'>" . $article["author_first_name"] . "</td>
           <td style='border-left: none; text-align: left;'>" . $article["author_last_name"] . "</td>
           <td><a href='publisher.php?publisher_name=" . $article["publisher_name"] . "'>" . $article["publisher_name"] . "</a></td>
           <td>" . $article["availability"] . "</td>
           <td><a href='update.php?id=" . $article["id"] . "'><button class='btn btn-primary me-2' type='button' style='width: 70px;'>Edit</button></a>
           <a href='delete.php?id=" . $article["id"] . "'><button class='btn btn-danger ms-2' type='button' style='width: 70px;'>Delete</button></a></td>
           </tr>
           ";
    }
} else {
    $list = "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Review 4</title>
    <?php require_once "./components/boot.php"; ?>
    <style type="text/css">
        .products {
            width: 60%;
            margin: 0 auto;
            padding-top: 5%;
        }

        .h1 {
            margin-bottom: 2%;
            font-weight: 600;
        }

        .button {
            margin-top: 5%;
        }

        td,
        tr {
            text-align: center;
            vertical-align: middle;
            border-left: 1px solid white;
            border-right: 1px solid white;
        }

        .image {
            width: 70px;
        }

        a {
            color: white;
        }

        a:hover {
            color: white;
            text-decoration: none;
        }

        html,
        body {
            height: 150%;
        }

        .bg-container {
            background-color: antiquewhite;
            height: 100%;
        }

    </style>
</head>

<body>
    <div class="bg-container">
        <div class="products">
            <p class="h1">Products</p>
            <table class='table table-striped table-dark table-hover'>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th colspan="2">Author</th>
                        <th>Publisher</th>
                        <th>Availability</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $list ?>
                </tbody>
            </table>
            <div class="button">
                <button class='btn btn-primary' type="button" onclick="window.location.href='create.php'">Add product</button>
            </div>
        </div>
</body>
</div>

</html>