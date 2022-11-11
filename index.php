<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Review 4</title>
    <?php require_once "components/boot.php" ?>
    <style type="text/css">

.products {
    width: 60%;
    margin: 5% auto 0 auto;
}

.button {
    margin-top: 5%;
}


    </style>
</head>
<body>
<div class="products">
    <p class="h2">Products</p>
    <table class='table table-striped table-dark table-hover'>
        <thead>
            <tr>
                <th>Picture</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
            </tbody>
        </table>
        <div class="button">
            <a href="create.php"><button class='btn btn-primary' type="button">Add product</button></a>
        </div>
    </div>
</body>
</html>