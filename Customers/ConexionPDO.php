<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS',"");
define('DB_NAME','NORTHWIND');
define('MYSQL_CONN_ERROR', 'Unable to Connect to database');
class ConexionPDO {
private $conn;
public function open_connection() {
    try{
        $this->conn=new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $this->conn;
    }catch(PDOException $e){
        $output = "<script>console.log( ".$e->getMessage(). "' );</script>";
        echo $output;
    }
}
public function ejecutar($sql) {
    $resultset=$this->open_connection()->prepare($sql);
    $resultset->execute();
    $this->close_connection();
    return $resultset;
}
public function close_connection() {
    $this->conn=null;
}
public function recorrer($rs) {
    return $rs->fetch();
}
public function contar($rs) {
    return $rs->rowcount();
}

}


?>