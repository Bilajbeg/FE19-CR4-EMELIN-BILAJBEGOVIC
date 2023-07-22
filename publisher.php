<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-success text-dark bg-opacity-50">

    <nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php" style="font-size: 20px;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php" style="font-size: 20px;">Create title</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php

    require_once "db_connect.php";

    if (isset($_GET['publisher_name'])) {
        $publisher_name = $_GET['publisher_name'];

        $sql = "SELECT * FROM `library` WHERE `publisher_name` = '$publisher_name'";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "
      <div class='container d-flex justify-content-center'>
      <div class='row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-xs-1'>";

            while ($row = mysqli_fetch_assoc($result)) {
                $title = $row['title'];
                $image = $row['image'];
                $short_description = $row['short_description'];
                $author_firstname = $row['author_first_name'];
                $author_lastname = $row['author_last_name'];
                $publisher_name = $row['publisher_name'];
                $publisher_address = $row['publisher_adress'];
                $publish_date = $row['publisher_date'];

                echo "
        <div class='card my-2 mx-2' style='width: 18rem;'>
        <img src='{$row["image"]}' class='card-img-top my-2' alt='...' style='width: 200px; height: 250px; object-fit: cover;'>
        <div class='card-body'>
          <h5 class='card-title'>{$row["title"]}</h5>
          <hr>
          <li class='list-group-item'>ISBN: {$row["ISBN"]}</li>
          <hr>
          <p class='card-text'>{$row["short_description"]}</p>
        </div>
        <a href='details.php?id={$row["id"]}' class='btn btn-secondary' style='width: auto;'>Details</a>
        <a href='update.php?id={$row["id"]}' class='btn btn-primary my-2' style='width: auto;'>Update</a>
        <a href='delete.php?id={$row["id"]}' class='btn btn-danger my-2' style='width: auto;'>Delete</a>
        <a href='index.php' class='btn btn-success my-2' style='width: auto;'>HOME PAGE</a>
               <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Published on: {$row["publisher_date"]}</li>
          <li class='list-group-item'>Publisher: {$row["publisher_name"]}</li>
        </ul>
        </div>";
            }
            echo "
      </div>
      </div>";
        } else {
            echo 'Publisher have no Entries.';
        }
    } else {
        echo 'Invalid request.';
    };

    ?>

    <footer class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex justify-content-center">
            <div class="text-center p-3" style="font-size: 18px;">
                <strong>© 2023 Copyright: Emelin Bilajbegovic</strong>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>