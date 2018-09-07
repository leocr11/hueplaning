<?php
require_once('Conexion.php');
class UsuarioPersistencia extends Conexion
{
    public $id;
    public $dni;
    public $Nombre;
    public $Apellido;
    public $Correo;
    public $Telefono;

    function login(){
        $sql = "SELECT adm_documento FROM administradores WHERE adm_usuario = '$usuario' AND adm_password = '$password'";
        $stmt = $this->query($sql);
        return $stmt->fetch();
    }
    function crearUsuario(){
      $this->query("INSERT INTO usuarios_bici VALUES ('$usu_documento','$usu_nombres','$usu_apellidos','$usu_correo','$usu_placabici','$usu_UID')");
    }
    function editarUsuario(){
      $this->query("UPDATE usuarios_bici SET usu_nombres = '$usu_nombres',usu_apellidos = '$usu_apellidos',usu_correo = '$usu_correo',usu_placabici = '$usu_placabici',usu_UID = '$usu_UID'  WHERE usu_documento = '$usu_documento'");
    }
    function buscarUsuario(){
          $sql = "SELECT * FROM usuarios_bici WHERE usu_documento = '$usu_documento'";
                  return $this->query($sql);
    }
    function listarUsuarios(){
          $sql = "SELECT * FROM usuarios_bici";
                  return $this->query($sql);
    }
}
?>