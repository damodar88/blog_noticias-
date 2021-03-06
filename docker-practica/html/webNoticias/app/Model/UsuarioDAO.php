<?php


include('../Librery/Conectar.php');
include('../Entidades/Usuario.php');
/**
 *
 */

class UsuarioDAO extends Conectar
{

  protected static $conectarDB;
  public $usuario;

  public static function getConectar(){

    self::$conectarDB = Conectar::conexion();


  }

  public static function desconectar(){

    self::$conectarDB = null;

  }

  public function insertaUsuario(Usuario $usuario,Escuela $escuela,Calle $calle,Ciudad $ciudad, Region $region){



    $sql="INSERT INTO USUARIO(administrador,nombreUsuario,apellidoPaternoUsuario,apellidoMaternoUsuario,usuarioUsuario,passwordUsuario,ocupacionUsuario
    ) VALUES
    ('".$usuario->getAdministradorUsuario()."','".$usuario->getNombreUsuario()."','".$usuario->getApellidoPaternoUsuario()."','".$usuario->getApellidoMaternoUsuario()."','".$usuario->getUsuarioUsuario()."','".$usuario->getPasswordUsuario()."','".$usuario->getFechaModificacionUsuario()."','".$usuario->getOcupacionUsuario()."')";

    self::getConectar();

    $resultado = self::$conectarDB->prepare($sql);

    $resultado->execute();

  }


  public static function login($usuarioEvaluar){

    $query = "SELECT * FROM USUARIO WHERE usuarioUsuario = :usuario AND passwordUsuario = :password";

    self::getConectar();

    $resultado = self::$conectarDB->prepare($query);

    $resultado->bindParam(":usuario",$usuarioEvaluar->getUsuarioUsuario());

    $resultado->bindParam(":password",$usuarioEvaluar->getPasswordUsuario());



    $resultado->execute();

    //$numeroRegistro = $resultado->rowCount();


    if ($resultado->rowCount() > 0) {

        $fila = $resultado->fetch();

        if ($fila["usuario"] == $usuarioEvaluar->getUsuarioUsuario && $fila["password"]== $usuarioEvaluar->getPasswordUsuario){
          return true;
        }

      return false;

    }


  }

 /*
  *
  *
  */

  public static function getUsuario($usuario){

    $query = "SELECT ID_USUARIO,administrador,nombreUsuario,apellidoPaternoUsuario,apellidoMaternoUsuario,usuarioUsuario,fechaModificacionUsuario,ocupacionUsuario FROM USUARIO WHERE usuarioUsuario = :usuario AND passwordUsuario = :password";

    self::getConectar();

    $resultado = self::$conectarDB->prepare($query);

    $resultado->bindParam(":usuario",$usuario->getUsuarioUsuario());

    $resultado->bindParam(":password",$usuario->getPasswordUsuario());

    $resultado->execute();

    $filas = $resultado->fetch();

    $usuario = new Usuario();

    $usuario->setIdUsuario($filas["ID_USUARIO"]);
    $usuario->setAdministradorUsuario($filas["administrador"]);
    $usuario->setNombreUsuario($filas["nombreUsuario"]);
    $usuario->setApellidoPaternoUsuario($filas["apellidoPaternoUsuario"]);
    $usuario->setApellidoMaternoUsuario($filas["apellidoMaternoUsuario"]);
    $usuario->setUsuarioUsuario($filas["usuarioUsuario"]);
    $usuario->setFechaModificacionUsuario($filas["fechaModificacionUsuario"]);
    $usuario->setOcupacionUsuario($filas["ocupacionUsuario"]);

    return $usuario;
  }






}


?>
