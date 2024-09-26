<?php
    class Pedido {  
        private $conn;  
        public $id;  
        public $mesa;  
        public $descripcion;  
        public $estado;  

        public function __construct($db) {  
            $this->conn = $db;  
        }  

        public function create() {  
            $query = "INSERT INTO pedido (mesa, descripcion, estado) VALUES (:mesa, :descripcion, :estado)";  
            $stmt = $this->conn->prepare($query);  
            $stmt->bindParam(':mesa', $this->mesa);  
            $stmt->bindParam(':descripcion', $this->descripcion);  
            $stmt->bindParam(':estado', $this->estado);   
            return $stmt->execute();  
        }  

        public function readAll() {
            $query = "SELECT * FROM pedido"; // Asegúrate que el nombre de la tabla sea correcto
            $stmt = $this->conn->prepare($query); // Esto debe funcionar si $this->conn es una conexión PDO válida
            $stmt->execute();
            
            return $stmt; // Devuelve el objeto PDOStatement
        }
        
         

        public function delete($id) {  
            $query = "DELETE FROM pedido WHERE id = :id";  
            $stmt = $this->conn->prepare($query);  
            $stmt->bindParam(':id', $id);  
            return $stmt->execute();  
        }  

        public function update($id, $mesa, $descripcion) {  
            $query = "UPDATE pedido SET mesa = :mesa, descripcion = :descripcion WHERE id = :id";  
            $stmt = $this->conn->prepare($query);  
            $stmt->bindParam(':mesa', $mesa);  
            $stmt->bindParam(':descripcion', $descripcion);  
            $stmt->bindParam(':id', $id);  
            return $stmt->execute();  
        }  

        public function readOne() {  
            $query = "SELECT * FROM pedido WHERE id = :id";  
            $stmt = $this->conn->prepare($query);  
            $stmt->bindParam(':id', $this->id);  
            $stmt->execute();  
            return $stmt->fetch(PDO::FETCH_ASSOC);  
        }  
    }
?>
