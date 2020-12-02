
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos</title>
</head>
<link rel="stylesheet" href="estilo.css">
<body>
    <center>
    <h2>Vehiculos</h2>
    <a href="">Agregar</a>
    <br> </br>
    <table border="1" width="80%" > <!--Creando tablas -->
    <thead> <!--Cabecera de la tabla -->
    <tr>
    <th>Placa</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Año</th>
    <th>Color</th>
    </tr>
    </thead>
    <tbody> <!--Contenido de la tabla -->
    <?php 
        foreach($data["vehiculos"] as $datos){
            echo "<tr>";
            echo "<td>".$datos["placa"]."</td>";
            echo "<td>".$datos["marca"]." </td>";
            echo "<td>".$datos["modelo"]."</td>";
            echo "<td>".$datos["anio"]."</td>";
            echo "<td>".$datos["color"]."</td>";
            echo "</tr>";
        }
    
    ?>
    </tbody>
    </table>
    </center>
</body>
</html>