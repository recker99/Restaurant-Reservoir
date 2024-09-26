<?php
    include_once '../../controllers/pedidoController.php';

    $pedidoController = new PedidoController();

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $id = $_GET['id'];
        $pedidoController->eliminarPedido($id);
        header("Location: verPedido.php"); // Redirige a la página de ver pedidos
    }
?>
