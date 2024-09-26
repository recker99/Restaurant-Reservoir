<?php
    include_once '../../controllers/pedidoController.php';

    $pedidoController = new PedidoController();

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $pedidoId = $_GET['id'];
        $pedido = $pedidoController->verPedidoPorId($pedidoId); // Crea este método en tu controlador para obtener un pedido por ID
    }
?>

<form action="actualizarPedido.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $pedido['id']; ?>">
    <label for="mesa">Mesa:</label>
    <input type="text" id="mesa" name="mesa" value="<?php echo $pedido['mesa']; ?>" required>
    <label for="descripcion">Descripción:</label>
    <input type="text" id="descripcion" name="descripcion" value="<?php echo $pedido['descripcion']; ?>" required>
    <button type="submit">Actualizar</button>
</form>
