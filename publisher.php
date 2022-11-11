<?php

require_once "./actions/db_connect.php";

if($_GET["publisher_name"]){
    $publisher_name = $_GET["publisher_name"];
    $mysql = "SELECT * FROM library WHERE pubisher_name = $publisher_name";
    $result = mysqli_query($connect, $mysql);
    $list = "";
    
    if (mysqli_num_rows($result) > 0) {
        while ($test = mysqli_fetch_assoc($result)) {
            $list .=  "<td>" . $test['title'] . "</td><br>
            <td>" . $test['type'] . "</td>";
        }
    } else {
        $list = "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
    }
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

        .bg-container {
            margin: 0 auto;
            width: 60%;
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
                        <th colspan="2">Published</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?= $list ?>
                        </tr>
                    </tbody>
                </table>
                <div class="button">
                    <a href="create.php"><button class='btn btn-primary' type="button">Add product</button></a>
                </div>
        </div>
</body>
</html>