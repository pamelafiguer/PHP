<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '1234');
define('DB_NAME', 'Northwind');
define('MYSQL_CONN_ERROR', 'Unable to Connect to database');
mysqli_report(MYSQLI_REPORT_STRICT);

class Conexion {
    private $conn;

    public function open_connection() {
        try {
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if ($this->conn->connect_error) {
                die('Error en la conexion: ' . $this->conn->connect_error);
            }
            $this->conn->query("SET NAMES 'UTF8'");
            return $this->conn;
        } catch (mysqli_sql_exception $e) {
            $error = $e->getMessage();
            $output = "<script>console.log('Error: " . $error . "');</script>";
            echo $output;
        }
    }

    public function close_connection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }

    public function ejecutar($sql) {
        $conn = $this->open_connection();
        $resultset = $conn->query($sql);
        $this->close_connection();
        return $resultset;
    }

    public function recorrer($result) {
        return mysqli_fetch_array($result);
    }

    public function liberar($rs) {
        mysqli_free_result($rs);
    }

    public function id_insert($rs) {
        $conn = $this->open_connection();
        $idi = mysqli_insert_id($conn);
        $this->close_connection();
        return $idi;
    }

    public function agregarCategoria($category, $description) {
        $sql = "INSERT INTO categories (CategoryName, Description) VALUES (?, ?)";
        $conn = $this->open_connection();
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            die("Error al preparar la consulta: " . $conn->error);
        }
        $stmt->bind_param("ss", $category, $description);
        if ($stmt->execute()) {
            $id = $stmt->insert_id;
        } else {
            die("Error al agregar categoría: " . $stmt->error);
        }
        $stmt->close();
        $this->close_connection();
        return $id;
    }

    public function obtenerCategorias($buscar) {
        $sql = "SELECT * FROM categories where CategoryName LIKE '%$buscar%'";
        $result = $this->ejecutar($sql);
        return $result;
    }

    public function EliminarCategoria($CategoryID) {
        $sql = "DELETE FROM categories WHERE CategoryID = ?";
        $conn = $this->open_connection();
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            die("Error al preparar la consulta: " . $conn->error);
        }
        $stmt->bind_param("i", $CategoryID);
        if ($stmt->execute()) {
            $result = true;
        } else {
            die("Error al eliminar categoría: " . $stmt->error);
        }
        $stmt->close();
        $this->close_connection();
        return $result;
    }

    public function actualizarCategoria($CategoryID, $CategoryName, $Description) {
        $sql = "UPDATE categories SET CategoryName = ?, Description = ? WHERE CategoryID = ?";
        $conn = $this->open_connection();
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            throw new Exception("Error al preparar la consulta: " . $conn->error);
        }
        $stmt->bind_param("ssi", $CategoryName, $Description, $CategoryID);
        if ($stmt->execute()) {
            $result = true;
        } else {
            throw new Exception("Error al actualizar categoría: " . $stmt->error);
        }
        $stmt->close();
        $this->close_connection();
        return $result;
    }
    
        
}

?>