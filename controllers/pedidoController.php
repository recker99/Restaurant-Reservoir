<?php
    session_start(); 
    include_once dirname(__DIR__) . '/models/DataBase.php';
    include_once dirname(__DIR__) . '/models/Pedido.php';

    class PedidoController {
        private $db;
        private $pedido;

        public function __construct() {
            $database = new DataBase();
            $this->db = $database->getConnection();
            $this->pedido = new Pedido($this->db);
        }

        public function crearPedido($mesa, $descripcion) {  
            $this->pedido->mesa = $mesa;  
            $this->pedido->descripcion = $descripcion;  
            $this->pedido->estado = 0; // Estado inicial: iniciado  
    
            if ($this->pedido->create()) {  
                $_SESSION['mensaje'] = "Pedido agregado correctamente.";  
            } else {  
                $_SESSION['mensaje'] = "Error al agregar el pedido.";  
            }  
        }

        public function verPedidos() {
            return $this->pedido->readAll();  // Esto debe devolver un objeto PDOStatement
        }

        public function eliminarPedido($id) {
            // Lógica para eliminar un pedido
            if ($this->pedido->delete($id)) {
                echo "Pedido eliminado correctamente.";
            } else {
                echo "Error al eliminar el pedido.";
            }
        }

        public function editarPedido($id, $mesa, $descripcion) {
            // Lógica para editar un pedido
            if ($this->pedido->update($id, $mesa, $descripcion)) {
                echo "Pedido actualizado correctamente.";
            } else {
                echo "Error al actualizar el pedido.";
            }
        }

        public function verPedidoPorId($id) {
            $this->pedido->id = $id; // Asigna el ID al modelo
            return $this->pedido->readOne(); // Llama al método del modelo que recupera el pedido por ID
        }
        
    }

        // Verificar la acción después de definir la clase  
    if (isset($_GET['action']) && $_GET['action'] == 'agregar') {  
        $mesa = $_POST['mesa'];  
        $descripcion = $_POST['descripcion'];  

        // Crear una instancia del controlador y llamar al método correspondiente  
        $pedidoController = new PedidoController();  
        $pedidoController->crearPedido($mesa, $descripcion);

        header("Location: ../views/pedidos/agregarPedido.php");   
        exit();
        
    }  
?>

