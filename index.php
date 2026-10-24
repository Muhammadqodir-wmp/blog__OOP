<?php

require_once "bootstrap.php";

$posts = Post::getAll();

var_dump($posts);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Blog</title>
</head>
<body>
    <h1>OOP blog</h1>

    <ul>
        <?php foreach($posts as $post):?>
        <li>
            <h4><?= $post->id . '  '.  $post->title; ?></h4>
            <p><?= $post->body; ?></p>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>