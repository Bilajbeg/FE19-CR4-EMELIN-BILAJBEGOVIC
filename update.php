<?php

require_once "db_connect.php";


$id = $_GET["id"];

$sql = "SELECT * FROM library WHERE id = $id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);


if (isset($_POST["update"])) {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $author_1 = $_POST["author_1"];
    $image = $_POST["image"];

    $sql = "UPDATE `library` SET `title`='$title',`author_first_name`='$author',`author_last_name`='$author_1',`image`='$image' WHERE id = $id";

    if (mysqli_query($connect, $sql)) {
        echo "Success";
        header("refresh: 3; url = index.php");
    } else {
        echo "Error";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Update</title>
</head>

<body class="bg-success text-dark bg-opacity-50">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Create title</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!--     <form method="post">
        <input type="text" name="title" value="<?= $row["title"] ?>">
        <input type="text" name="author" value="<?= $row["author_first_name"] ?>">
        <input type="text" name="author_1" value="<?= $row["author_last_name"] ?>">
        <input type="text" name="image" value="<?= $row["image"] ?>">
        <input type="submit" name="update">
    </form> -->

    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h4 class="m-0">Update Book Information</h4>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="title" class="form-label">New Title of the Book</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?= $row["title"] ?>">
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="author" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="author" name="author" value="<?= $row["author_first_name"] ?>">
                        </div>
                        <div class="col">
                            <label for="author_1" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="author_1" name="author_1" value="<?= $row["author_last_name"] ?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">New Book Image</label>
                        <input type="text" class="form-control" id="image" name="image" value="<?= $row["image"] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>


<!--     <div class="form-style-10">
        <h1>Update your book informations</h1>
        <form method="post">
            <div class="section"><span>1</span>New Title of the book</div>
            <div class="inner-wrap">
                <label>New title<input type="text" name="title" value="<?= $row["title"] ?>"></label>
            </div>

            <div class="section"><span>2</span>First and Last Name</div>
            <div class="inner-wrap">
                <label>First Name<input type="text" name="author" value="<?= $row["author_first_name"] ?>"></label>
                <label>Last Name<input type="text" name="author_1" value="<?= $row["author_last_name"] ?>"></label>
            </div>

            <div class="section"><span>3</span>New book image</div>
            <div class="inner-wrap">
                <label>Image source <input type="text" name="image" value="<?= $row["image"] ?>"></label>

            </div>
            <div class="button-section">
                <input type="submit" name="Update" />
            </div>
        </form>
    </div> -->