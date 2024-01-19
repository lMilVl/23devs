<?php

class Message {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function select_all(): string|bool|array
    {
        $sql = 'SELECT `message_id`, `user_name`, `title`, `short_desc`, `full_desc` FROM `messages` INNER JOIN `users` USING(`user_id`) ORDER BY `message_id`';
        $res = $this->pdo->query($sql, array());
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function select_user_msg(int $user_id): string|bool|array
    {
        $sql = 'SELECT `message_id`, `user_name`, `title`, `short_desc`, `full_desc` FROM `messages` INNER JOIN `users` USING(`user_id`) WHERE `user_id` = ? ORDER BY `message_id`';
        $res = $this->pdo->query($sql, array($user_id));
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert(int $user_id, string $title, string $short_desc, string $full_desc): PDOStatement|string|bool
    {
        $sql = 'INSERT INTO `messages`(`user_id`, `title`, `short_desc`, `full_desc`) VALUES (?, ?, ?, ?)';
        return $this->pdo->query($sql, array($user_id, $title, $short_desc, $full_desc));
    }

    public function update(string $title, string $short_desc, string $full_desc, int $message_id): PDOStatement|string|bool
    {
        $sql = 'UPDATE `messages` SET `title`= ?,`short_desc`= ?,`full_desc`= ? WHERE `message_id` = ?';
        return $this->pdo->query($sql, array($title, $short_desc, $full_desc, $message_id));
    }

    public function delete(int $message_id): PDOStatement|string|bool
    {
        $sql = 'DELETE FROM `messages` WHERE `message_id` = ?';
        return $this->pdo->query($sql, array($message_id));
    }
}