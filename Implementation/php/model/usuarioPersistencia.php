<?php
require_once('Conexion.php');
class UsuarioPersistencia extends Conexion
{
    public $id;
    public $cedula;
    public $nombre;
    public $apellido;
    public $direccion;
    public $telefono;
    public $correo;
    public $password;
    public $estado;
    public $rol;

    public function login(){
        $sql = "SELECT *
                FROM US_TUSER 
                WHERE USER_CEDU = '$this->cedula' AND 
                      USER_PSWD = '$this->password'";
        $stmt = $this->query($sql);
        return $stmt->fetch();
    }

    public function crearUsuario(){
        $this->query("INSERT INTO US_TUSER 
                    VALUES ('',
                            '$this->cedula',
                            '$this->nombre',
                            '$this->apellido',
                            '$this->direccion',
                            '$this->telefono',
                            '$this->correo',
                            '$this->password',
                            'ACTIVO',
                            '$this->rol'
                             )");
    }

    public function editarUsuario(){
        $this->query("UPDATE US_TUSER SET 
                    USER_CEDU = '$this->cedula',
                    USER_NAME = '$this->nombre',
                    USER_APDO = '$this->apellido',
                    USER_DIRC = '$this->direccion',
                    USER_TELF = '$this->telefono',
                    USER_EMAL = '$this->correo',
                    USER_PSWD = '$this->password',
                    USER_STDO = '$this->estado',
                    TPRL_TPRL = '$this->rol'
                    WHERE USER_USER = '$this->id'");
    }

    public function buscarUsuario(){
        $sql = "SELECT * 
                  FROM US_TUSER 
                  WHERE USER_USER = '$this->id'";
        return $this->query($sql);
    }

    public function listarUsuarios(){
        $sql = "SELECT * FROM US_TUSER";
        return $this->query($sql);
    }
}
?>