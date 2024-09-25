<?php include 'sections/header.html'; ?>
    <div class="container">
        <h2>Haz tu reserva</h2>
        <form action="../controllers/ReservaController.php" method="POST">
            <label for="rut">RUT:</label>
            <input type="text" id="rut" name="rut" required><br><br>
            <label for="nombre">Nombre y Apellido:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <button type="submit">Reservar</button>
        </form>
    </div>
<?php include 'sections/footer.html'; ?>
