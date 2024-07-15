<?php

class Database
{
    public $conn;

    public function __construct()
    {
        try {


            $this->conn  = new PDO('mysql:host=' . Config::get("DB_HOST") . ';dbname=' . Config::get("DB_NAME") . '', '' . Config::get("DB_USER") . '', '' . Config::get("DB_PASS") . '');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo '<h1 style="color:red;">ERROR: Failed to connect  Database</h1>';
        }
    }
    public function fetchData($tableName, $limit, $offset)
    {
        $stmt = $this->conn->prepare("SELECT name, chinese_name FROM $tableName LIMIT :limit OFFSET :offset");
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        $data = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }

        $countStmt = $this->conn->prepare("SELECT COUNT(*) as total FROM $tableName");
        $countStmt->execute();
        $total = $countStmt->fetch(PDO::FETCH_ASSOC)['total'];

        return ['data' => $data, 'total' => $total];
    }
}
