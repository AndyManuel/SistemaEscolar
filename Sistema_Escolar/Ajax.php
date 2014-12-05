<?php
require 'Materia.php';
require 'conexion/bd.php';
require 'header.php';
    
	$id_maestro = $_POST['id_maestro'];
    $materia = new Materia();
    $materia->mostrarMaestro($id_maestro);
    $materia->materiasAsignadas($id_maestro);
    $materia->comboMaterias($id_maestro);
    require 'footer.php';
?>





