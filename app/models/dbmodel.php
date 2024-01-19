<?php

class DbModel {

    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO('mysql:host='. DBHOST . ';dbname=' . DBNAME . ';charset=utf8mb4', DBUSER, DBPASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Failed to connect: " . $e->getMessage();
            exit();
        }
    }

    public function query(string $sql, array $params = []): PDOStatement|string|bool
    {
        try {
            $sth = $this->pdo->prepare($sql);
            $state = $sth->execute($params);
            if($state === false) {
                return false;
            }
            else {
                return $sth;
            }
        } catch (PDOException $e) {
            return "Invalid request: " . $e->getMessage();
        }
    }
}
