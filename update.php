<?php
require_once "db_connect.php";


$id = $_GET["id"];

$sql = "SELECT * FROM library WHERE id = $id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);


if (isset($_POST["update"])) {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $image = $_POST["image"];

    $sql = "UPDATE `library` SET `title`='$title',`author_first_name`='$author',`image`='$image' WHERE id = $id";

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
    <title>Update</title>
</head>

<body>
    <form method="post">
        <input type="text" name="title" value="<?= $row["title"] ?>">
        <input type="text" name="author" value="<?= $row["author_first_name"] ?>">
        <input type="text" name="image" value="<?= $row["image"] ?>">
        <input type="submit" name="update">
    </form>
</body>

</html>