<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'php_login_database';

try {
  $conn = new mysqli($servername, $username, $password, $dbname);
  echo "Conexión exitosa a la base de datos";
} catch (PDOException $e) {
  die('ERROR DE CONEXIÓN: ' . $e->getMessage());
}

?>