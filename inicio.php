<?php 
    include 'views/sections/header.html'; // Asegúrate de incluir el encabezado
?>

<div class="container">
    <h2>Menú Principal</h2>
    <p>Bienvenido al sistema de administración de Restaurant Reservoir. Seleccione una opción:</p>

    <ul>
        <li><a href="./views/reservaForm.php">Gestionar Reservas</a></li>
        <li><a href="./views/pedidos/inicio.php">Gestionar Pedidos</a></li>
        <!-- Puedes añadir más opciones aquí  -->
    </ul>
</div>

<a href="logout.php">Cerrar sesión</a>

<?php include 'views/sections/footer.html'; ?>
