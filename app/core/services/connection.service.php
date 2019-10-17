<?php

define("HOST", "fdb22.awardspace.net");
define("USER", "3173917_imobile");
define("PASSWORD", "Ferreira@123");
define("DATABASE", "3173917_imobile");

function getConnection() {
  $connection = new mysqli(HOST, USER, PASSWORD, DATABASE);
  
  if ($connection->connect_error) {
    throw new Exception('Falha na conexão com o MySQL: ' . $conn->connect_error);
  }

  return $connection;
}

?>
