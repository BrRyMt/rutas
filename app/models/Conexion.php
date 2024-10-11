<?php

require_once "../config/Server.php";

class Conexion
{
  /**
   * Retorna una conexion activa al servidor y DB
   */
  protected static function getConexion()
  {
    try {
      $pdo = new PDO(SGDB, USER, PASS);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (Exception $e) {
      error_log($e->getMessage());
    }
  }

  public function encryption($string) {

  }
  public function decryption($string) {
    
  }
  public function getAll($storeProcedure) {

  }
  public function search($data=[]) {

  }
}
