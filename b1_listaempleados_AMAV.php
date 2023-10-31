<?php
include("conecta.php");
$conn = conecta();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Listado de Empleados</title>
    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            font-family: Helvetica;
        }
        .eliminar-btn {
            background-color: #ff6262;
            color: #fff;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
        }
        .crear-btn {
            background-color: #585858;
            color: #fff;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
            font-family: Arial;
        }
        .titulo{
            font-family: Arial;
            color: white;
        }
        .ids{
            background-color: #585858;            
        }
        .listaemp{
            background-color: #A4A4A4;
        }
        #creditos{
            text-align: center;
            font-size: 10px;
            font-family: Arial Narrow;
            color: white;
        }
    </style>
</head>
<body>
    <h1 class="titulo">Listado de Empleados</h1>
    <a href="#" class="crear-btn">Crear nuevo registro</a><br><br>

    <?php
    $sql = "SELECT * FROM empleados";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table>
                <tr class="ids">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Eliminar</th>
                </tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr class="listaemp">
                    <td>' . $row["id"] . '</td>
                    <td>' . $row["nombre"] . '</td>
                    <td>' . $row["apellidos"] . '</td>
                    <td>' . $row["correo"] . '</td>
                    <td>' . $row["rol"] . '</td>
                    <td><button class="eliminar-btn">Eliminar</button></td>
                </tr>';
        }
        echo '</table>';
    } else {
        echo "No se encontraron registros de empleados.";
    }

    $conn->close();
    ?>

    <div id="creditos">
        <h2>Hecho por: Alan Marcel Arenas Venegas =D</h2>
    </div>
</body>
</html>
