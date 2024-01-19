<?php
class User {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function insert(string $user_name, string $user_email, string $password): PDOStatement|string|bool
    {
        $sql = 'INSERT INTO `users`(`user_name`, `user_email`, `password`) VALUES (?, ?, ?)';
        return $this->pdo->query($sql, array($user_name, $user_email, $password));
    }

    public function select(string $user_email, string $password): string|bool|array
    {
        $sql = 'SELECT `user_id`, `user_name`, `user_email` FROM `users` WHERE `user_email` = ? AND `password` = ?';
        $res = $this->pdo->query($sql, array($user_email, $password));
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}
