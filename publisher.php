<?php
require_once "db_connect.php";

if (isset($_GET["id"])) {
    $publisher_name = $_GET["id"];

    // Note: Consider using prepared statements to prevent SQL injection
    $sql = "SELECT * FROM library WHERE publisher_name = '$publisher_name'";
    $result = mysqli_query($connect, $sql);

    // Display media published by the specific publisher
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Display the media details here (similar to index.php)
        }
    } else {
        echo "<p>No media found for this publisher.</p>";
    }

    mysqli_close($connect);
} else {
    echo "<p>No publisher name specified.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
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

    <div class="container mt-5">
        <!-- Add a heading to indicate the publisher -->
        <h1 class="text-center mb-5"><?= $_GET["id"] ?> Books</h1>

        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-xs-1">
            <?php
            require_once "db_connect.php";

            if (isset($_GET["id"])) {
                $publisher_name = $_GET["id"];

                $sql = "SELECT * FROM library WHERE publisher_name = '$publisher_name'";
                $result = mysqli_query($connect, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Display book details in a card
                        echo "<div class='col-lg-4 col-md-6 col-sm-12 mb-3'>
                                <div class='card' style='width: 18rem;'>
                                    <img src='{$row["image"]}' class='card-img-top' alt='...' style='height: 340px; object-fit: cover;'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>{$row["title"]}</h5>
                                        <p class='card-text'>{$row["author_first_name"]}</p>
                                        <p class='card-text'>{$row["author_last_name"]}</p>
                                        <a href='update.php?id={$row["id"]}' class='btn btn-warning'>Update</a>
                                        <a href='delete.php?id={$row["id"]}' class='btn btn-danger'>Delete</a>
                                    </div>
                                </div>
                            </div>";
                    }
                } else {
                    echo "<p>No media found for this publisher.</p>";
                }

                mysqli_close($connect);
            } else {
                echo "<p>No publisher name specified.</p>";
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>