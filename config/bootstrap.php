<?php

require_once  "autoload.php";

$database = new Database('omborchi', 'localhost','5R<QG"28|S{u', 'PHP_OOP');

$pdo = $database->connect();

Post::$pdo=$pdo;

