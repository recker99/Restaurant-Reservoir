<?php
    include_once '../../controllers/pedidoController.php';

    $pedidoController = new PedidoController();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $mesa = $_POST['mesa'];
        $descripcion = $_POST['descripcion'];

        $pedidoController->editarPedido($id, $mesa, $descripcion);
        header("Location: verPedido.php"); // Redirige a la página de ver pedidos
    }
?>
