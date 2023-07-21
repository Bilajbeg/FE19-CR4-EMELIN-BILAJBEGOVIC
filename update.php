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
    <title>Update</title>
</head>

<body>
    <!--     <form method="post">
        <input type="text" name="title" value="<?= $row["title"] ?>">
        <input type="text" name="author" value="<?= $row["author_first_name"] ?>">
        <input type="text" name="author_1" value="<?= $row["author_last_name"] ?>">
        <input type="text" name="image" value="<?= $row["image"] ?>">
        <input type="submit" name="update">
    </form> -->

    <div class="form-style-10">
        <h1>Update your book informations</h1>
        <form>
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
    </div>

</body>

</html>