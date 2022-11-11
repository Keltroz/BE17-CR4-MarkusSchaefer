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
            padding-top: 5%;
            margin: 0 auto;
            width: 30%;
        }

        html,
        body {
            height: 100%;
        }

        .bg-container {
            background-color: antiquewhite;
            height: 100%;
        }

        .h2 {
            margin-bottom: 5%;
        }

        .btn-primary {
            width: 100px;
        }
        
    </style>
</head>

<body>
    <div class="bg-container">
        <fieldset class="field-container">
            <legend class='h2'>Add Product</legend>
            <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
                <table class='table table-dark'>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title" placeholder="Title"></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class='form-control' type="text" name="type" placeholder="Book, CD or DVD"></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><textarea class='form-control' type="text" name="description" placeholder="Description" style="height: 150px;"></textarea></td>
                    </tr>
                    <tr>
                        <th>Author</th>
                        <td><input class='form-control' type="text" name="author_first_name" placeholder="First Name"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input class='form-control' type="text" name="author_last_name" placeholder="Last Name"></td>
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td><input class='form-control' type="text" name="publisher_name" placeholder="Name"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input class='form-control' type="text" name="publisher_address" placeholder="Address"></td>
                    </tr>
                    <tr>
                        <th>Publisher Date</th>
                        <td><input class='form-control' type="date" name="publisher_date" placeholder="Publisher Date"></td>
                    </tr>
                    <tr>
                        <th>ISBN Code</th>
                        <td><input class='form-control' type="number" name="isbn_code" placeholder="ISBN Code"></td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><input class='form-control' type="file" name="image"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button onclick="window.location.href='index.php'" class='btn btn-primary' style="float:left;" type="button">Back</button>
                            <button class='btn btn-success' style="float: right;" type="submit">Add Product</button>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
</body>

</html>