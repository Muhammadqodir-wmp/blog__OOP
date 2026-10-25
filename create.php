<?php

require_once  "config/bootstrap.php";

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $title = $_POST['title'];
    $body = $_POST['body'];

    $result = Post::create($title, $body);

    var_dump($result);
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>

<body>
    <form method="POST" action="">
        <h5>Post yaratish</h5>
        <div>
            <input type="text" name="title" id="" placeholder="sarlavha">
        </div>
        <div>
            <textarea name="body" id="" placeholder="Mavzu matni"></textarea>
        </div>
        <div>
            <button type="submit"> Saqlash
            </button>
        </div>
    </form>
</body>

</html>