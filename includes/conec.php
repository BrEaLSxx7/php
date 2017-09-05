<?php

class Conexion {

  function __construct() {
    try {
      $conexion = new PDO('pgsql:host=localhost;dbname=cein;port=5432', 'postgres', 'root');
      $conexion->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      $conexion->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
      return $conexion;
    } catch (PDOException $exc) {
      echo $exc->getMessage();
    } finally {
      
    }
  }

}

$conect = new Conexion();
