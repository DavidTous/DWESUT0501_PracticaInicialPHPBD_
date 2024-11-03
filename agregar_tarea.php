<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tarea = $_POST['tarea'];

    $conn = conectar_db();
    $sql = "INSERT INTO tasks (task, status) VALUES (:tarea, 'pending')";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':tarea', $tarea);
    $stmt->execute();

    header("Location: DWESUT0501_PracticaInicialPHPBD_.php");
}
?>