<?php
include 'conexion.php';

// Conectamos a la base de datos
$conn = conectar_db();

// Consulta para obtener todas las tareas
$sql = "SELECT * FROM tasks";
$stmt = $conn->prepare($sql);
$stmt->execute();
$tareas = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestor de Tareas</title>
</head>
<body>
    <h1>Gestor de Tareas</h1>

    <form method="post" action="agregar_tarea.php">
        <input type="text" name="tarea" placeholder="Nueva tarea">
        <button type="submit">Agregar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Tarea</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tareas as $tarea): ?>
                <tr>
                    <td><?php echo $tarea['task']; ?></td>
                    <td><?php echo $tarea['status']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>