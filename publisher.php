<?php

require_once "./actions/db_connect.php";

$list = "";
if ($_GET["publisher_name"]) {
    $article = $_GET["publisher_name"];
    $mysql = "SELECT * FROM library WHERE publisher_name = '$article'";
    $result = mysqli_query($connect, $mysql);
    
    if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
            $list .=  "<tr><td>" . $data['title'] . "</td>
                        <td>" . $data['type'] . "</td></tr>";
        }
    } else {
        $list = "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
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
        .bg-container {
            margin: 5% auto;
            width: 30%;
        }

        .btn {
            width: 70px;
        }

        html,
        body {
            background-color: antiquewhite;
        }
        
    </style>
</head>

<body>
    <div class="bg-container">
        <div class="products">
            <p class="h1 text-center font-monospace text-decoration-underline mb-5">Publisher</p>
            <table class='table table-striped table-dark table-hover'>
                <thead>
                    <tr>
                        <th class="text-center" colspan="2"><?= $article ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?= $list ?>
                    </tr>
                </tbody>
            </table>
            <div class="button">
                <a href="index.php"><button class='btn btn-primary' type="button">Back</button></a>
            </div>
        </div>
</body>

</html>