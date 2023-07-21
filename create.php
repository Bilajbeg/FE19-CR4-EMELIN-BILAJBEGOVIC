<?php
require_once "db_connect.php";

if (isset($_POST["create"])) {
    $title = $_POST["title"];
    $author = $_POST["author_first_name"];
    $image = $_POST["image"];

    $sql = "INSERT INTO library (title, author_first_name, image) VALUES ('$title', '$author', '$image')";

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
    <title>Create</title>
</head>

<body>
    <form method="post">
        <input type="text" name="title">
        <input type="text" name="author_first_name">
        <input type="text" name="image">
        <input type="submit" name="create">
    </form>
</body>

</html>