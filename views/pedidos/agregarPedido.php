<?php 
    session_start(); 
    include '../sections/header.html';   
?>

   <div class="container"> 
        <h2>Agregar Pedido</h2>
        <form action="../../controllers/pedidoController.php?action=agregar" method="POST">
            <label for="mesa">Mesa:</label>
            <select id="mesa" name="mesa">
                <?php for ($i = 1; $i <= 20; $i++): ?>
                    <option value="<?php echo $i; ?>">Mesa <?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
            <br><br>
            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" required>
            <br><br>
            <br><br>  
    
            <?php if (isset($_SESSION['mensaje'])): ?>  
                <p style='color: green;'><?= $_SESSION['mensaje']; ?></p>  
                <?php unset($_SESSION['mensaje']); // Limpia el mensaje después de mostrarlo ?>  
            <?php endif; ?>

            <button type="submit">Agregar</button>
        </form>
        <!-- Botón para ver pedidos -->  
        <a href="verPedido.php">  
            <button>Ver Pedidos</button>  
        </a>
    </div>
<?php include '../sections/footer.html'; ?>
