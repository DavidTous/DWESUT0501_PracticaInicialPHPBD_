<?php
function conectar_db() {
  $servername = "sql108.infinityfree.com";
  $username = "if0_37620344";
  $password = "D2a0v0i4d";
  $dbname = "if0_37620344_todolist";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
}
?>