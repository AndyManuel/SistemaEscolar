<?php

    require 'Materia.php';
    require 'conexion/bd.php';
    require 'header.php';
	require 'menu.php';
    if(isset($_REQUEST['accion'])){
        $accion = $_REQUEST['accion'];
        $materia = $_REQUEST['materia'];
        $maestro = $_REQUEST['maestro'];
        if($materia != 0){
            $sql = "INSERT INTO maestro_materia (id_maestro, id_materia) VALUES ($maestro, $materia)";
            $consulta = mysql_query($sql)or die("Error de inserción");
        }

    }
	
    $materia = new Materia();
    $materia->comboMaestro();
    require 'footer.php';
?>
