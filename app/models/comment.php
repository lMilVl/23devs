<?php
 class Comment {
     private $pdo;

     public function __construct($pdo) {
         $this->pdo = $pdo;
     }

     public function insert(int $message_id, int $user_id, string $text): PDOStatement|string|bool
     {
         $sql = 'INSERT INTO `comments`(`message_id`, `user_id`, `text`) VALUES (?, ?, ?)';
         return $this->pdo->query($sql, array($message_id, $user_id, $text));
     }

     public function select(int $message_id): string|bool|array
     {
         $sql = 'SELECT `user_name`, `text` FROM `comments` INNER JOIN `users` USING(`user_id`) WHERE `message_id` = ?';
         $res = $this->pdo->query($sql, array($message_id));
         return $res->fetchAll(PDO::FETCH_ASSOC);
     }
 }