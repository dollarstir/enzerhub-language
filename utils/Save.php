<?php
class save extends Database
{
    public function saveData($sql, $parameters): bool {
        try {
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute($parameters);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    
}