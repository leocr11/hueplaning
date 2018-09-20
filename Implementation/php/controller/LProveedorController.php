<?php 

require_once 'model/LProveedorPersistencia.php';

class LProveedorController{	
  
    public function buscarLProveedor($r){
       $lProveedor = new LProveedorPersistencia();
       $lProveedor->id = $r;
       return $lProveedor->buscarLProveedor();
    }
    public function listarLProveedores(){
       $lProveedor = new LProveedorPersistencia();
       return $lProveedor->listarLProveedores();
    }
}

 ?>