<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '123');
define('DB_NAME', 'Northwind');
define('MYSQL_CONN_ERROR', 'Unable to Connect to database');

class ConexionPDO {
    private $conn;

    public function open_connection() {
        try {
            $this->conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die(MYSQL_CONN_ERROR);
        }
    }

    public function ejecutar($sql, $params = []) {
        if ($this->conn) {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } else {
            throw new Exception("No hay conexión establecida");
        }
    }

    public function get_last_insert_id() {
        return $this->conn->lastInsertId();
    }

    public function beginTransaction() {
        $this->conn->beginTransaction();
    }

    public function commit() {
        $this->conn->commit();
    }

    public function rollBack() {
        $this->conn->rollBack();
    }

    public function close_connection() {
        $this->conn = null;
    }

    public function recorrer($rs) {
        return $rs->fetch();
    }

    public function contar($rs) {
        return $rs->rowCount();
    }

    public function closeCursor($stmt) {
        $stmt->closeCursor();
    }
}
?>