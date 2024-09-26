<?php  
include_once '../../controllers/pedidoController.php';  
include '../sections/header.html';  

$pedidoController = new PedidoController();  
$pedidos = $pedidoController->verPedidos(); // Asegúrate de que este método retorne un objeto PDOStatement  
?>  
<div class="container">   
    <h2>Ver Pedidos</h2>  
    
    <?php if ($pedidos->rowCount() > 0): // Verifica si hay pedidos ?>  
        <table class="tabla-pedidos">  
            <thead>  
                <tr>  
                    <th>Mesa</th>  
                    <th>Descripción</th>  
                    <th>Acciones</th>  
                </tr>  
            </thead>  
            <tbody>  
                <?php while ($row = $pedidos->fetch(PDO::FETCH_ASSOC)): ?>  
                    <tr>  
                        <td><?php echo htmlspecialchars($row['mesa']); ?></td>  
                        <td><?php echo htmlspecialchars($row['descripcion']); ?></td>  
                        <td>  
                            <a href="editarPedido.php?id=<?php echo $row['id']; ?>">Editar</a>  
                            <a href="eliminarPedido.php?id=<?php echo $row['id']; ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este pedido?');">Eliminar</a>  
                        </td>  
                    </tr>  
                <?php endwhile; ?>  
            </tbody>  
        </table>  
    <?php else: ?>  
        <p>No hay pedidos registrados.</p>  
    <?php endif; ?>  
    <a href="inicio.php">Volver</a>  
</div>  


<?php include '../sections/footer.html'; ?>