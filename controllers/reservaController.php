<?php
   $databaseFile = __DIR__ . '/../models/DataBase.php';
   if (file_exists($databaseFile)) {
       include_once($databaseFile);
   } else {
       echo "Error: No se encontró el archivo DataBase.php en la ruta: " . $databaseFile;
   }

   $reservaFile = __DIR__ . '/../models/reserva.php';
   if (file_exists($reservaFile)) {
       include_once($reservaFile);
   } else {
       echo "Error: No se encontró el archivo reserva.php en la ruta: " . $reservaFile;
   }

    include_once(__DIR__ . '/../models/DataBase.php');
    include_once(__DIR__ . '/../models/reserva.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $database = new Database(); 
        $db = $database->getConnection();

        $reserva = new Reserva($db);

        $reserva->rut = $_POST['rut'];
        $reserva->nombre = $_POST['nombre'];

        if($reserva->create()) {
            header("Location: ../views/reservaConfirmacion.php");
        } else {
            echo "Error al realizar la reserva.";
        }
    }
?>
