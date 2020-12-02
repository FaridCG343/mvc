<?php 
    require_once "config/database.php";
    require_once "controllers/Vehiculos.php";
    $control= new VehiculosControllers();
    $control->index();
?>