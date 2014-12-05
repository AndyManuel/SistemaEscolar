<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 22/11/14
 * Time: 7:56
 */
require("login/usuario.php");
require("conexion/bd.php");
$usuario=new login();
if(isset($_REQUEST['op'])){
    switch($_REQUEST['op']){
        case 'enviar':
            $usuario->validarUsuario($_REQUEST['nombre'],$_REQUEST['passw']);
            break;
    }
}
$usuario->formulario();


