<?php

include('../Librery/Conectar.php');
include('../Entidades/Contacto.php');

/**
 *
 */
class ContactoDAO extends Conectar
{

  protected static $conectarDB;

  public static function getConectar(){

    self::$conectarDB = Conectar::conexion();

  }

  private static function desconectar(){

    self::$conectarDB = null;

  }

  public static function insertarCiudad(Ciudad $ciudad){

  $query = "INSERT INTO CIUDAD(nombreCiudad,localidadCiudad) VALUES ('".$ciudad->getNombreCiudad()."','".$ciudad->getLocalidadCiudad()."')";


  self::getConectar();

  $resultadoInsertar = self::$conectarDB->prepare($query);

  $resultadoInsertar->execute();


  }

  public function obtenerContacto(){

    $ciudad = array();

    //require_once('../Helper/Paginacion.php');

    self::getConectar();

    $consulta = self::$conectarDB->query("SELECT * FROM CONTACTO"); //$empezar_desde, $tamano_pagina");  // LIMIT $empezar_desde, $tamano_pagina")

      while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

        $contacto[]=$filas;

      }

    return $contacto;

  }










}


?>
