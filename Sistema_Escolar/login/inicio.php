<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 22/11/14
 * Time: 9:24
 */

require("usuario.php");
require("bd.php");
$usuario=new login();
$usuario->seguridad();
if(isset($_REQUEST['op'])){
    switch($_REQUEST['op']){
        case 'close':
            $usuario->cerrarSesion();
            break;
    }
}

echo"WELCOME";
echo"<br><a href='andy/inicio.php?op=close'>Cerrar Sesion</a>";