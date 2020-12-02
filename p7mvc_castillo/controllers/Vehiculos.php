<?php 
    class VehiculosControllers{
        public function __construct(){
            require_once "models/vehiculosmodel.php";
        }
        public function index(){
            $vehiculos= new Vehiculo_model();
            $data['titulo']= 'Vehiculos';
            $data['vehiculos']=$vehiculos->get_vehiculos();
            require_once "views/vehiculos/vehiculos.php";
        }
    }
?>