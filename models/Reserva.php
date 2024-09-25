<?php
    class Reserva {
        private $conn;
        private $table_name = "reserva";

        public $rut;
        public $nombre;
        public $fechaHora;

        public function __construct($db) {
            $this->conn = $db;
        }

        public function create() {
            $query = "INSERT INTO " . $this->table_name . " (Rut, Nombre) VALUES (:rut, :nombre)";
            $stmt = $this->conn->prepare($query);

            $this->rut = htmlspecialchars(strip_tags($this->rut));
            $this->nombre = htmlspecialchars(strip_tags($this->nombre));

            $stmt->bindParam(':rut', $this->rut);
            $stmt->bindParam(':nombre', $this->nombre);

            if($stmt->execute()) {
                return true;
            }
            return false;
        }
    }
?>