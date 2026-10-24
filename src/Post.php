<?php 

class Post{

    public static $pdo;

    public int $id;
    public string $title;
    public string $body;
    public mixed $created_at;

    public static function  getAll(){

        $stmt = self::$pdo->prepare("SELECT*FROM posts");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $stmt->execute();
        $posts = $stmt->fetchAll();

        return $posts;

    }
}