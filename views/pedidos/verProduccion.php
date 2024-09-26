<?php include '../sections/header.html'; ?>
    <div class="container">
        <h2>Ver Producción</h2>
        <?php
        // Simulación de obtención de producción desde la base de datos
        $produccion = []; // Reemplaza esto con tu consulta a la base de datos

        if (empty($produccion)) {
            echo "<p>No hay producción registrada.</p>";
        } else {
            echo "<table>
                    <tr>
                        <th>Mesa</th>
                        <th>Descripción</th>
                        <th>Acción</th>
                    </tr>";
            foreach ($produccion as $item) {
                echo "<tr>
                        <td>{$item['mesa']}</td>
                        <td>{$item['descripcion']}</td>
                        <td>
                            <a href='controladorPedido.php?action=finalizar&id={$item['id']}'>Finalizar</a>
                        </td>
                    </tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
<a href="inicio.php">Volver</a>
<?php include '../sections/footer.html'; ?>
